<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vendor\CreateVendorRequest;
use App\Http\Requests\Vendor\UpdateVendorRequest;
use App\Models\Products;
use App\Models\VendorMail;
use App\Repositories\Eloquents\VendorEloquent;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    private $vendor;

    public function __construct(VendorEloquent $vendor)
    {
        $this->vendor = $vendor;
    }

    public function index()
    {
        return view(admin_vendors_vw() . '.index');
    }

    public function create()
    {
        $products = Products::all();
        return view(admin_vendors_vw() . '.create' , compact('products'));
    }

    public function edit($id)
    {
        $vendor = $this->vendor->getById($id);
        $products = Products::all();
        $data = [
            'vendor' => $vendor
        ];
        return view(admin_vendors_vw() . '.edit', $data , compact('products'));
    }

    public function replay($id)
    {
        $vendor = $this->vendor->getById($id);
        $data = [
            'vendor' => $vendor
        ];
        return view(admin_vendors_vw() . '.sendMail', $data);
    }

    public function anyData()
    {
        return $this->vendor->anyData();
    }


    public function store(CreateVendorRequest $request)
    {
        return $this->vendor->create($request->all());
    }

    public function update(UpdateVendorRequest $request, $id)
    {
        return $this->vendor->update($request->all(), $id);
    }

   public function storeReplay(Request $request, $id)
    {
        $message = new VendorMail([
            'message' => $request->message,
            'name' => $request->name,
            'email' => $request->email,
        ]);
        $message->save();
        return $this->vendor->storeReplay($request->all(), $id);
    }

    public function delete($id)
    {
        return $this->vendor->delete($id);
    }

    public function vendorActivate(Request $request)
    {
        return $this->vendor->vendorActivate($request->only('vendor_id'));
    }
}
