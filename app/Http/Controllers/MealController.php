<?php

namespace App\Http\Controllers;

use App\Models\meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        $mealdata=meal::get();
        return view("meal.readmeal",compact("mealdata"));
    }
    public function addmeal()
    {
        return view("meal.addmeal");
    }
    public function savemeal(Request $request)
    {
        $request->validate([
            
            "meal_name"=>"required",
            "description"=>"required",
            "price"=>"required",
        ]);
    
        $meal_name=$request->meal_name;
        $description=$request->description;
        $price=$request->price;

        $cust=new meal;
       
        $cust->meal_name=$meal_name;
        $cust->description=$description;
        $cust->price=$price;
        $cust->save();
        return redirect()->back()->with('success','meal Added Successfully');
    }
    public function editmeal($meal_id)
    {
        $mealdata=meal::where("meal_id","=",$meal_id)->first();
        return view("meal.editmeal",compact("mealdata"));
    }
    
    public function updatemeal(Request $request)
    {
        $request->validate([
            
            "meal_name"=>"required",
            "description"=>"required",
            "price"=>"required",
           
        ]);
        $meal_id=$request->meal_id;
        $meal_name=$request->meal_name;
        $description=$request->description;
        $price=$request->price;
       

        meal::where("meal_id","=","$meal_id")->update([
            "meal_name"=>$meal_name,
            "description"=>$description,
            "price"=>$price,
            
        ]);
        return redirect()->back()->with('success','iteam Updated Successfully');
    }
    public function deletemeal($meal_id)
    {
        meal::where("meal_id","=","$meal_id")->delete();
        return redirect()->back()->with('success','meal Deleted Successfully');
    }
}
