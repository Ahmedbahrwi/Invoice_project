<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;
use Illuminate\Http\Request;

class ApiCustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::get();
        return response()->json($customers);
    }
    //this function to show customer by id
    public function show($id)
    {
        //find_or_fail function to find id in DB
        $customer = Customer::FindOrFail($id);
        return response()->json($customer);
    }
    //function to show the create form
    public function create()
    {
        $customers = Customer::select("id", "customer_name")->get();
        return response()->json($customers);
    }
    //function to create customer in DB
    public function store(request $request)
    {
        //make validate on date that input from form
        $validator = Validator::make($request->all(), [
            "customer_name" => "required|string|max:64",
            "customer_email" => "required|email|max:100",
            "customer_address" => "required|string|max:64",
        ]);
        if ($validator->fails()) {
            $errore = $validator->errors();
            return response()->json($errore);
        }

        //make to store data in DB
        Customer::create([
            "customer_name" => $request->customer_name,
            "customer_email" => $request->customer_email,
            "customer_address" => $request->customer_address,
        ]);
        //$book->categories()->sync($request->category_ids);

        return response()->json("Customer Created Successfully");
    }
    //
}
