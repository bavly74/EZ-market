<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'productName',
        'description',
        'brand_id',
        'category_id',
        'pro_image1',
        'pro_image2',
        'status',
        'most_recent',
        'offer',
        'price'
    ];

    public function category()
    {
       return $this->belongsTo(Category::class);
    }
    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }
    public function brand()
    {
        return $this->belongsTo(brand::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Product::class,'orders_products_pivot');
    }
    public function attribute()
    {
        return $this->hasMany(ProductAttribute::class);
    }
protected $casts=[
    'variations'=>'object'
];
}
