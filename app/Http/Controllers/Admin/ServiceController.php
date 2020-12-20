<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\ServiceRequest;
use App\Repositories\Eloquents\ServiceEloquent;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $service;

    public function __construct(ServiceEloquent $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view(admin_services_vw() . '.index');
    }

    public function create()
    {
        return view(admin_services_vw() . '.create');
    }

    public function edit($id)
    {
        $service = $this->service->getById($id);
        $data = [
            'service' => $service
        ];
        return view(admin_services_vw() . '.edit', $data);
    }

    public function anyData()
    {
        return $this->service->anyData();
    }


    public function store(ServiceRequest $request)
    {
        return $this->service->create($request->all());
    }

    public function update(ServiceRequest $request, $id)
    {
        return $this->service->update($request->all(), $id);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }

    public function serviceActivate(Request $request)
    {
        return $this->service->serviceActivate($request->only('admin_id'));
    }
}
