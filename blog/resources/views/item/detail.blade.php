@extends('layouts.app')
<body>
@section('content')
<table class="table">
<thead class="thead-light">
<tr><th>商品名</th><th>{{$item->item_name}}</th></tr>
<tr><th>商品説明</th><th>{{$item->about}}</th></tr>
<tr><th>値段</th><th>{{$item->price}}</th></tr>
@if ($item->stock == 0)
<tr><th>在庫なし</th></tr>
@else
<tr><th>在庫あり</th></tr>
@endif
@endsection
</thead>
</table>
</body>
