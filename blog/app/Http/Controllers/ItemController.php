<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
	public function index() {
		$var = 12345;
		return view('item/index', compact('var'));
	}
}
