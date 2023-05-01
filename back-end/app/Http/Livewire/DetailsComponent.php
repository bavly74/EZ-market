<?php

namespace App\Http\livewire;

use App\Models\Product;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        return view('livewire.details-component',['product'=>$product])->layout('layouts.base');
    }
}
