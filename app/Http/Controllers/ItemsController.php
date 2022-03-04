<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index()
    {
        return view('admin.inventory.item-info');
    }
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

        return response()->json($items);
    }

    public function delete(Request $request)
    {

        $items = Item::find($request->id);

        $items->delete();

        return response()->json();
    }
    public function update(Request $request)
    {
       

        $update = Item::find($request->updateId)->update([
            'item_name' => $request->iName,
            'group_id' => $request->itemGroup,
            'unit_name' => $request->unit,
            'sale_price' => $request->sPrice,
            'purchase_price' => $request->cPrice,
            'status' => $request->status,
        ]);
        
        return response()->json(['message'=>'Update Complete']);
    }
}
