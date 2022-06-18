@extends('layouts.app')
<body>
@section('content')
@foreach($items as $item)
<table class="table">
<thead class="thead-lignt">
<tr><th>商品名</th><th><a href="{{route('item.detail', ['item_id' => $item->id])}}">{{$item->item_name}}</a></th></tr>
<tr><th>値段</th><th>{{$item->price}}</th></tr>
@if ($item->stock == 0)
<tr><th>在庫なし</th></tr>
@else
<tr><th>在庫あり</th></tr>
@endif
@endforeach
@endsection
</thead>
</table>
</body>
