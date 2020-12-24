<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mailVendor extends Model
{
    protected $fillable = ['message' ,'vendor_id'];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class,'vendor_id','id');
    }
}
