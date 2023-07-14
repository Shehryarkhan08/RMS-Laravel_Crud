<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
class CustomerController extends Controller
{
    public function index()
    {
        $customerdata=customer::get();
        return view("customer.readcustomer",compact("customerdata"));
    }
    public function addcustomer()
    {
        return view("customer.addcustomer");
    }
    public function savecustomer(Request $request)
    {
        $request->validate([
            
            "customer_name"=>"required",
            "contact_number"=>"required",
            "email"=>"required",
        ]);
    
        $customer_name=$request->customer_name;
        $contact_number=$request->contact_number;
        $email=$request->email;

        $cust=new customer;
       
        $cust->customer_name=$customer_name;
        $cust->contact_number=$contact_number;
        $cust->email=$email;
        $cust->save();
        return redirect()->back()->with('success','Customer Added Successfully');
    }
    public function editcustomer($customer_id)
    {
        $customerdata=customer::where("customer_id","=",$customer_id)->first();
        return view("customer.editcustomer",compact("customerdata"));
    }
    
    public function updatecustomer(Request $request)
    {
        $request->validate([
            "customer_id"=>"required",
            "customer_name"=>"required",
            "contact_number"=>"required",
           
        ]);

        $customer_id=$request->customer_id;
        $customer_name=$request->customer_name;
        $contact_number=$request->contact_number;
       

        customer::where("customer_id","=","$customer_id")->update([
            "customer_name"=>$customer_name,
            "contact_number"=>$contact_number,
            
        ]);
        return redirect()->back()->with('success','Customer Updated Successfully');
    }
    public function deletecustomer($customer_id)
    {
        customer::where("customer_id","=","$customer_id")->delete();
        return redirect()->back()->with('success','Customer Deleted Successfully');
    }
}
