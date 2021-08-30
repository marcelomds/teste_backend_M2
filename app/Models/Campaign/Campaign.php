<?php

namespace App\Models\Campaign;

use App\Models\City\GroupCity;
use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_id', 'price', 'group_city_id'];


    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function groupCity(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(GroupCity::class);
    }
}
