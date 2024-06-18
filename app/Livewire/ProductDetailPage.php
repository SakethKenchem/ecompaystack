<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetailPage extends Component
{
    public $name;

    public function mount($name)
    {
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.product-detail-page', [
            'product' => Product::where('name', $this->name)->firstOrFail(),
        ]);
    }
}
