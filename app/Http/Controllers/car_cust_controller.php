<?php

namespace App\Http\Controllers;

use App\Models\car_customer;
use App\Models\Customer;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orderdataa = car_customer::get();
        return view("display", compact("orderdataa"));
    }

    public function add(Request $request)
    {
        $customer_id = $request->input('customer_id');
        $meal_id = $request->input('meal_id');

        // Find the customer based on the provided customer_id
        $customer = Customer::find($customer_id);

        // Store the relationship in the customer_foods table
        $customer->meal()->attach($meal_id);

        return redirect()->refresh();
    }

    public function saveorder(Request $request)
    {
        $request->validate([
            "customer_id" => "required",
            "meal_id" => "required",
            "quantity" => "required",
            "table_no" => "required",
            "total" => "required",
        ]);

        $table_no = $request->table_no;

        
        $existingOrder = car_customer::where('table_no', $table_no)->first();
        if ($existingOrder) {
            return redirect()->back()->withErrors(['table_no' => 'Table ' . $table_no . ' is already reserved. Please choose another table.']);
        }

        $order_id = $request->order_id;
        $customer_id = $request->customer_id;
        $meal_id = $request->meal_id;
        $quantity = $request->quantity;
        $total = $request->total;

        $order = new car_customer;
        $order->order_id = $order_id;
        $order->customer_id = $customer_id;
        $order->meal_id = $meal_id;
        $order->quantity = $quantity;
        $order->table_no = $table_no;
        $order->total = $total;

        $order->save();

        return redirect()->back()->with('success', 'Order Added Successfully');
    }
    public function editorder($order_id)
    {
        // $fooddata=food::where("Item_id","=",$Item_id)->first();
        $orderdata=car_customer::where("order_id","=","$order_id")->first();
       
        // return $customerdata;
        return view("order/editorder",compact("orderdata"));
    
    }
    public function updateorder(Request $request)
    {
        $request->validate([
            "order_id"=>"required",
            "customer_id"=>"required",
            "meal_id"=>"required",
            "quantity"=>"required",
            "table_no"=>"required",
            "total"=>"required",
           
        ]);
        $order_id=$request->order_id;
        $customer_id=$request->customer_id;
        $meal_id=$request->meal_id;
        $quantity=$request->quantity;
        $table_no=$request->table_no;
        $total=$request->total;
       

        car_customer::where("order_id","=","$order_id")->update([
            "customer_id"=>$customer_id,
            "meal_id"=>$meal_id,
            "quantity"=>$quantity,
            "table_no"=>$table_no,
            "total"=>$total,
            
        ]);
        return redirect()->back()->with('success','iteam Updated Successfully');
    }
    public function deleteorder($order_id)
    {
        car_customer::where("order_id","=","$order_id")->delete();
        return redirect()->back()->with('success','Order Deleted Successfully');
    }
}

