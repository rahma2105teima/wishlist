<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'property_id', 'property_price', 'property_loc',
    ];

    /**
     * Create a new instance of the Icon.
     *
     * @param  int  $property_id
     * @param  float  $property_price
     * @param  string  $property_loc
     * @return Icon
     */
    public static function instance($property_id, $property_price, $property_loc)
    {
        return static::create([
            'property_id' => $property_id,
            'property_price' => $property_price,
            'property_loc' => $property_loc,
        ]);
    }

    /**
     * Associate the Icon with a product.
     *
     * @param  string  $productClassName
     * @return void
     */
    public function associate($productClassName)
    {
        $product = new $productClassName();
        $this->product()->associate($product);
        $this->save();
    }

    /**
     * Define the relationship between Icon and Product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
