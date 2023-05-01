<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_man extends Model
{
    use HasFactory;
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    protected $fillable=['name','image','salary_type','Nat_id'];
}
