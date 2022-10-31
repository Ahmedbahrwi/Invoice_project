<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //this is function to show all customers in DB
    public function index()
    {
        $customers = Customer::get();
        return view("customers.index", compact("customers"));
    }
    //this function to show customer by id
    public function show($id)
    {
        //find_or_fail function to find id in DB
        $customer = Customer::FindOrFail($id);
        return view("customers.show", compact("customer"));
    }
    //function to show the create form
    public function create()
    {
        $customers = Customer::select("id", "customer_name")->get();
        return view("customers.create", compact("customers"));
    }
    //function to create customer in DB
    public function store(request $request)
    {
        //make validate on date that input from form
        $request->validate([
            "customer_name" => "required|string|max:64",
            "customer_email" => "required|email|max:100",
            "customer_address" => "required|string|max:64",
        ]);
        //make to store data in DB
        Customer::create([
            "customer_name" => $request->customer_name,
            "customer_email" => $request->customer_email,
            "customer_address" => $request->customer_address,
        ]);
        //$book->categories()->sync($request->category_ids);

        return redirect(route("get.index"));
    }
    //
}
