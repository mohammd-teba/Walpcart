<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MailVendor\MailVendorRequest;
use App\Models\mailVendor;
use App\Models\Service;
use App\Models\Vendor;
use App\Repositories\Eloquents\MailVendorEloquent;
use http\Message;
use Illuminate\Http\Request;

class MailToVendorController extends Controller
{
    private $mail;

    public function __construct(MailVendorEloquent $mail)
    {
        $this->mail = $mail;
    }

    public function index()
    {
        return view(admin_mail_vw() . '.index');
    }

    public function create()
    {
        $vendors = Vendor::all();
        return view(admin_mail_vw() . '.create' , compact('vendors'));
    }

    public function edit($id)
    {
    }

    public function anyData()
    {
        return $this->mail->anyData();
    }


    public function store(MailVendorRequest $request)
    {
        return $this->mail->create($request->all());
    }

    public function update(MailVendorRequest $request, $id)
    {
    }

    public function delete($id)
    {
    }




}
