<?php

namespace App\Models;

use App\Models\customer;
use App\Models\histories;
use App\Models\meal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    public function meals()
    {
        return $this->belongsToMany(meal::class,'car_customer','customer_id','meal_id','history_id','booker_id');
    }
    public function customers()
    {
        return $this->belongsToMany(customer::class,'car_customer','customer_id','meal_id','history_id','booker_id');
    }
    public function histories()
    {
        return $this->belongsToMany(histories::class,'car_customer','customer_id','meal_id','history_id','booker_id');
    }
    use HasFactory;
}
