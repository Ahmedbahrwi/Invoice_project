<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //function to show all items in DB
    public function index()
    {
        $items = Item::get();
        return view("items.index", compact("items"));
    }
    //function  to show one item
    public function show($id)
    {
        $item = Item::FindOrFail($id);
        return view("items.show", compact("item"));
    }
    //function to show creatation form
    public function create()
    {
        $items = Item::select("id", "item_name")->get();
        return view("items.create", compact("items"));
    }
    //function to store item details(item_name , item_price)
    public function store(request $request)
    {
        //make validate

        $request->validate([
            "item_name" => "required|string|max:64",
            "item_price" => "required|max:10",
        ]);

        Item::create([
            "item_name" => $request->item_name,
            "item_price" => $request->item_price,
        ]);
        //$book->categories()->sync($request->category_ids);

        return redirect(route("item.index"));
    }
    //
}
