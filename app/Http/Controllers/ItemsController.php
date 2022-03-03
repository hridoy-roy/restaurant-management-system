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
            'group_id' => $request->itemGroup,
            'unit_name' => $request->unit,
            'sale_price' => $request->sPrice,
            'purchase_price' => $request->cPrice,
            'status' => $request->status,
        ]);
    }

    public function show()
    {

        $items = Item::all();

         return view('admin.inventory.item-info', compact('items'));
    }

    public function delete($id)
    {
        $items= Item::find($id);

        $items->delete();

        return redirect()->back();

    }
}
