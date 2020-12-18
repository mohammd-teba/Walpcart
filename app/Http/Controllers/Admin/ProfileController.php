<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index($id)
    {
//        $id = authAdmin()->id;
        $profile = Admin::find($id);
        return view(admin_admins_vw(). '.profile' , compact('profile'));
    }
}
