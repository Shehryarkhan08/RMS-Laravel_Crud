<?php

namespace App\Models;

use App\Models\car;
use App\Models\customer;
use App\Models\histories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class meal extends Model
{
    protected $primaryKey="meal_id";
   
    public function customer()
    {
        return $this->belongsToMany(customer::class,'car_customer','customer_id','meal_id','history_id','booker_id');
    }
   
    public function histories()
    {
        return $this->belongsToMany(histories::class,'car_customer','customer_id','meal_id','history_id','booker_id');
    }
    public function cars()
    {
        return $this->belongsToMany(car::class,'car_customer','customer_id','meal_id','history_id','booker_id');
    }
    use HasFactory;
}
