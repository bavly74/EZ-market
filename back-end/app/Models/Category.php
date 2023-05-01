<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->hasMany(product::class);
    }
    protected $guarded = [];

//    public function subcategory(){
//
//        return $this->hasMany(Category::class, 'parent_id');
//
//    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }


    protected $fillable=['name','status','cat_parent'];
}

