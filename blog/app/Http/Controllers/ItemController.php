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

	public function detail($id) {
		$item = Item::find($id);    // 全てのデータが取得できる
		//$item = Item::find($data);
		//dd($item);
		//dd($item);
		if (isset($item)) {
			//return view('item.detail', compact('item'));
			return view('item.detail', compact('item'));
		} else {
			return redirect('/item/index');
		}
	}

}
