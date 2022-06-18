@extends('layouts.app')
<body>
@section('content')
@foreach($item as $name)
<table class="table">
<thead class="thead-light">
<tr><th>商品名</th><th>{{$name->item_name}}</th></tr>
<tr><th>商品説明</th><th>{{$name->about}}</th></tr>
<tr><th>値段</th><th>{{$name->price}}</th></tr>
@if ($name->stock == 0)
<tr><th>在庫なし</th></tr>
@else
<tr><th>在庫あり</th></tr>
@endif
@endforeach
@endsection
</thead>
</table>
</body>
