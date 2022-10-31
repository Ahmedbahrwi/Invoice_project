<h1>All Customers</h1>
@foreach($customers as $customer)

<hr>
<a href="{{ route('get.show',$customer->id) }}">
    <h3>{{ $customer->customer_name }}</h3>
</a>
<h3>{{ $customer->customer_name }}</h3>
<p>{{ $customer->customer_email }}</p>
<p> {{ $customer->customer_address }}</p>


@endforeach