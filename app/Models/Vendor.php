<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [ 'name' ,'email' ,'phone' ,'address' ,'image' ,'url' ,'product_id','is_active'];

    public function getImageAttribute($value)
    {
        if (isset($value))
            return url('/upload') . '/' . $value;
    }

    public function product()
    {
        return $this->belongsTo(Products::class,'product_id','id');
    }
}
