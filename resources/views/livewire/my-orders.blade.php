<div>
    <h1 class="text-2xl font-bold">My Orders</h1>
    <table class="min-w-full mt-6 bg-white dark:bg-gray-800 border">
        <thead>
            <tr>
                <th class="px-4 py-2">Order ID</th>
                <th class="px-4 py-2">Product Name</th>
                <th class="px-4 py-2">Quantity</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <td class="px-4 py-2 border">{{ $order->payment_id }}</td>
                    <td class="px-4 py-2 border">{{ $order->product_name }}</td>
                    <td class="px-4 py-2 border">{{ $order->quantity }}</td>
                    <td class="px-4 py-2 border">{{ $order->order_status }}</td>
                    <td class="px-4 py-2 border">{{ $order->created_at->format('d-m-Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 py-2 text-center">No orders found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>