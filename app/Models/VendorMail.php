<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendorMail extends Model
{
    protected $fillable = ['message' ,'name','email'];
}
