<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = ['productName', 'productDescription', 'manufacturer_id', 'imagePath', 'price'];
    protected $dates = ['deleted_at'];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
}
