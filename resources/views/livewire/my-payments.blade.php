<div>
    <h1 class="text-2xl font-bold">My Payments</h1>
    <table class="min-w-full mt-6 bg-white dark:bg-gray-800 border">
        <thead>
            <tr>
                <th class="px-4 py-2">Payment ID</th>
                <th class="px-4 py-2">Product Name</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Quantity</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($payments as $payment)
                <tr>
                    <td class="px-4 py-2 border">{{ $payment->payment_id }}</td>
                    <td class="px-4 py-2 border">{{ $payment->product_name }}</td>
                    <td class="px-4 py-2 border">{{ $payment->price }}</td>
                    <td class="px-4 py-2 border">{{ $payment->quantity }}</td>
                    <td class="px-4 py-2 border">{{ $payment->payment_status }}</td>
                    <td class="px-4 py-2 border">{{ $payment->created_at->format('d-m-Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-4 py-2 text-center">No payments found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>