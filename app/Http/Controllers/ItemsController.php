<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function insert(Request $request)
    {
        //dd($request);

        $itemInfo = Item::create([

            'item_name' => $request->iName,
        ]);
    }
}
