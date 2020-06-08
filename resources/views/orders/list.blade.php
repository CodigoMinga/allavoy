<h1>lista</h1>

<ul>

    @forelse($orders as $order)
        <li><a href="{{ route('orders.details', $order) }}">{{ $order->client }}</a></li>

    @empty
        <li>No hay ordenes para mostrar</li>
    @endforelse 
    {{ $orders->links() }}

</ul>