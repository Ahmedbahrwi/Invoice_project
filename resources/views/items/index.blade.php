<h1>All Items</h1>
@foreach($items as $item)

<hr>
<a href="{{ route('item.show',$item->id) }}">
    <h3>{{ $item->item_name }}</h3>
</a>
<h3>{{ $item->item_name }}</h3>
<p>{{ $item->item_price }}</p>



@endforeach