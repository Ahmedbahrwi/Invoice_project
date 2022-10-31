<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiItemController extends Controller
{
    public function index()
    {
        $items = Item::get();
        return response()->json($items);
    }
    //function  to show one item
    public function show($id)
    {
        $item = Item::FindOrFail($id);
        return response()->json($item);
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
        $validator = Validator::make($request->all(), [
            "item_name" => "required|string|max:64",
            "item_price" => "required|max:10",
        ]);
        if ($validator->fails()) {
            $errore = $validator->errors();
            return response()->json($errore);
        }

        Item::create([
            "item_name" => $request->item_name,
            "item_price" => $request->item_price,
        ]);
        //$book->categories()->sync($request->category_ids);

        return response()->json("Item Created Successfully");
    }
    //
}
