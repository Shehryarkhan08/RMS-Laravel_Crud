<?php

namespace App\Models;

use App\Models\car;
use App\Models\customer;
use App\Models\histories;
use App\Models\meal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class car_customer extends Model
{
    public function customer()
    {
        return $this->belongsTo(customer::class, 'customer_id');
    }

    public function meal()
    {
        return $this->belongsTo(meal::class, 'meal_id');
    }
    public function histories()
    {
        return $this->belongsTo(histories::class, 'id');
    }

    public function cars()
    {
        return $this->belongsTo(car::class, 'id');
    }
    use HasFactory;
}
