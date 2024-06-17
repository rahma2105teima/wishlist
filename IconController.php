<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Icon;
use App\Models\Product;

class IconController extends Controller
{
    public function store(Request $request)
    {
        // Assuming you're getting $property_id, $property_price, $property_loc from the request
        $property_id = $request->input('property_id');
        $property_price = $request->input('property_price');
        $property_loc = $request->input('property_loc');

        // Assuming 'instance' is a method in the Icon model
        $icon = new Icon();
        $icon->add($property_id, $property_price, $property_loc)
             ->associate(Product::class);
        
        // Continue with your code
    }
}
