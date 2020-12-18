<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [ 'name' ,'description' ,'service_id' ,'rate' ,'cost' ,'url' ,'is_active'];

    public function service()
    {
        return $this->belongsTo(Service::class,'service_id','id');
    }
}
