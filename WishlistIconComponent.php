<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WishlistIconComponent extends Component
{
    // Define the listener for Livewire events
    protected $listeners = ['refreshComponent' => '$refresh'];
    
    // Render the wishlist icon component
    public function render()
    {
        // Return a JSON response
        return response()->json(['message' => 'Wishlist icon component refreshed']);
    }
}
