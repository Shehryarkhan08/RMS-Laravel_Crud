<?php

namespace App\Models;

use App\Models\car;
use App\Models\customer;
use App\Models\meal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class histories extends Model
{
    protected $primaryKey="history_id";
    public function meals()
    {
        return $this->belongsToMany(meal::class,'car_customer','customer_id','meal_id','history_id','booker_id');
    }
    public function customers()
    {
        return $this->belongsToMany(customer::class,'car_customer','customer_id','meal_id','history_id','booker_id');
    }
    public function cars()
    {
        return $this->belongsToMany(car::class,'car_customer','customer_id','meal_id','history_id','booker_id');
    }
    use HasFactory;
}
