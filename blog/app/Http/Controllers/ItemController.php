<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
	public function index() {
//		$items = \DB::table('items')->get();    // 全てのデータが取得できる
		$items = Item::all();
		//dd($items);
		return view('/item/index', compact('items'));
	}

	public function detail(Request $request) {
		$items = Item::all();    // 全てのデータが取得できる
		$data = $request->item_id;
		$item = Item::where('id', $data)->get();
		//$item = Item::find($data);
		//dd($item);
		return view('item.detail', compact('item'));
	}

}
