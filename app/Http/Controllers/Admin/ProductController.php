<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Models\Service;
use App\Repositories\Eloquents\ProductEloquent;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;

    public function __construct(ProductEloquent $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        return view(admin_products_vw() . '.index');
    }

    public function create()
    {
        $services = Service::all();

        return view(admin_products_vw() . '.create' , compact('services'));
    }

    public function edit($id)
    {
        $product = $this->product->getById($id);
        $services = Service::all();
        $data = [
            'product' => $product
        ];
        return view(admin_products_vw() . '.edit', $data , compact('services'));
    }

    public function anyData()
    {
        return $this->product->anyData();
    }


    public function store(ProductRequest $request)
    {
        return $this->product->create($request->all());
    }

    public function update(ProductRequest $request, $id)
    {
        return $this->product->update($request->all(), $id);
    }

    public function delete($id)
    {
        return $this->product->delete($id);
    }

    public function productActivate(Request $request)
    {
        return $this->product->productActivate($request->only('product_id'));
    }

}