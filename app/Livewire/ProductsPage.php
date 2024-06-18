<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class ProductsPage extends Component
{   
    use WithPagination;
    public $products;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function getFirstImageUrlAttribute()
    {
        return !empty($this->images) && is_array($this->images)
            ? Storage::url('products/' . $this->images[0])
            : null;
    }

    public function render()
    {
        return view('livewire.products-page', [
            'products' => $this->products,
        ]);
    }
}
