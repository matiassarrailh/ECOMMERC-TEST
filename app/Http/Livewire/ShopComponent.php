<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;

class ShopComponent extends Component
{
    public $sorting;

    public function mount()
    {
        $this->sorting = "default";
    }

    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add( $product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart correctly.');
        return redirect()->route('product.cart');
    }

    public function addToWishList($product_id,$product_name,$product_price)
    {
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component', 'refreshComponent');
    }

    public function removeFromWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $wishItem)
        {
            if($wishItem->id == $product_id)
            {
                Cart::instance('wishlist')->remove($wishItem->rowId);
                $this->emitTo('wishlist-count-component', 'refreshComponent');
                return;
            }
        }
    }

    use WithPagination;
    public function render()
    {
        if($this->sorting == 'date')
        {
            $products = Product::orderBy('created_at', 'DESC')->paginate(6);
        }
        elseif($this->sorting == "price")
        {
            $products = Product::orderBy('regular_price', 'ASC')->paginate(6);
        }
        elseif($this->sorting == "price-desc")
        {
            $products = Product::orderBy('regular_price', 'DESC')->paginate(6);
        }
        else
        {
            $products = Product::paginate(6);
        }

        $categories = Category::all();


        return view('livewire.shop-component', ['products' => $products, 'categories' => $categories])->layout('layouts.base');
    }
}
