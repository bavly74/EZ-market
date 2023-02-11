<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    public function supplier(){
        return $this->hasMany(Supplier::class);
    }
    public function product(){
        return $this->hasMany(Product::class);
    }

}
