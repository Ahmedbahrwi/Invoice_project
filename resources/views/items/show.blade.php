<h1>Item Id: {{ $item->id }}</h1>
<h3>{{ $item->item_name }}</h3>
<p>{{ $item->item_price }}</p>


<hr>

<a href="{{ route('item.index') }}">Back</a>
