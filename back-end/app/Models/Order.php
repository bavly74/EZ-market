<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable =[
        'user_id',
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'address2',
        'city',
        'state',
        'country',
        'pincode',
        'status',
        'message',
        'total_price',
        'tracking_no',
    ];
    public function orderitems(){
        return $this->hasMany(orderitem::class);

    }
}
