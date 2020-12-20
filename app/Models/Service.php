<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [ 'name' ,'description' ,'image' ,'is_active'];

    public function getImageAttribute($value)
    {
        if (isset($value))
            return url('/upload') . '/' . $value;
    }
}
