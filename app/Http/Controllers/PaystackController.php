<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Order;
use Illuminate\Support\Facades\Auth; // Import Facades Auth

class PaystackController extends Controller
{
    public function callback(Request $request)
    {
        $reference = $request->input('reference');

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$reference,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer sk_test_e93b9373eb965f9c1c882b086cf1223101f1362a",
                "Cache-Control: no-cache",
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        if ($err) {
            return redirect()->route('cancel')->with('error', 'cURL Error #:'.$err);
        }

        $response = json_decode($response);

        if (isset($response->data->status) && $response->data->status == 'success') {
            $meta_data = $response->data->metadata->custom_fields;
            $user_id = Auth::id();

            // Insert record into payments table
            $payment = new Payment;
            $payment->user_id = $user_id;
            $payment->payment_id = $reference;
            $payment->email = $response->data->customer->email;
            $payment->price = $response->data->amount / 100; 
            $payment->quantity = $meta_data[2]->value ?? 1; 
            $payment->product_name = $meta_data[0]->value ?? 'Unknown Product';
            $payment->phone = $meta_data[6]->value ?? '';
            $payment->first_name = $meta_data[3]->value ?? '';
            $payment->last_name = $meta_data[4]->value ?? '';
            $payment->currency = $response->data->currency;
            $payment->address = $meta_data[5]->value ?? '';
            $payment->payment_method = $response->data->channel;
            $payment->payment_status = "Paid";
            $payment->save();

            // Insert record into orders table
            $order = new Order;
            $order->user_id = $user_id;
            $order->payment_id = $reference;
            $order->product_name = $meta_data[0]->value ?? 'Unknown Product'; // Fallback to placeholder if product name is missing
            $order->quantity = $meta_data[2]->value ?? 1; // Fallback to 1 if no quantity provided
            $order->customer_email = $response->data->customer->email;
            $order->customer_phone = $meta_data[6]->value ?? '';
            $order->customer_address = $meta_data[5]->value ?? '';
            $order->order_status = 'Completed'; // Mark order as completed
            $order->save();

            return redirect()->route('success');
        } else {
            return redirect()->route('cancel');
        }
    }

    public function cancel()
    {
        return 'Payment was not successful. Try again';
    }

    public function success()
    {
        return 'Payment was successful. Thank you';
    }
}