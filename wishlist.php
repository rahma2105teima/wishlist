<?php

namespace App\Http\Livewire;


use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use \App\Models\Icon;

class Wishlist extends Component
{
    // Function to add an item to the wishlist
    public function addToWishlist($property_id, $property_price, $property_loc)
    {
        $icon = new Icon(); // Create an instance of the Icon model
        $icon->add($property_id, $property_price, $property_loc)->associate('App\Models\Product');
        $this->emitTo('wishlist-icon-component', 'refreshComponent');
    }
    
    // Function to store an item in the wishlist
    public function store($property_id, $property_price, $property_loc)
    {
       //Icon::instance()->add($property_id, $property_price, $property_loc)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added to wishlist');
        $this->emitTo('wishlist-icon-component', 'refreshComponent');
        return redirect()->route('favorite.icon');
    }
    
    // Function to remove an item from the wishlist
    public function removeFromWishlist($property_id)
    {
        $icon = new Icon();
        foreach ($icon->content() as $witem) {
            if ($witem['id'] == $property_id) {
                $icon->remove($property_id);
                $this->emitTo('wishlist-icon-component', 'refreshComponent');
                return;
            }
        }
    }
}
