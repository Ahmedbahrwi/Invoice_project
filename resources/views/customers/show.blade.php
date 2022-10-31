<h1>Customer Id: {{ $customer->id }}</h1>
<h3>{{ $customer->customer_name }}</h3>
<p>{{ $customer->customer_email }}</p>
<p>{{ $customer->customer_address }}</p>

<hr>

<a href="{{ route('get.index') }}">Back</a>
