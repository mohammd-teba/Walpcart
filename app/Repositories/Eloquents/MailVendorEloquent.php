<?php
/**
 * Created by PhpStorm.
 * UserRequest: mohammedsobhei
 * Date: 5/2/18
 * Time: 11:43 PM
 */

namespace App\Repositories\Eloquents;


use App\Mail\ReplayMessage;
use App\Mail\ReplayVendor;
use App\Models\Admin;
use App\Models\mailVendor;
use App\Models\Products;
use App\Models\Service;
use App\Repositories\Interfaces\Repository;
use App\Repositories\Uploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;

class MailVendorEloquent extends Uploader implements Repository
{
    private $model;

    public function __construct(mailVendor $model)
    {
        $this->model = $model;
    }

    function anyData()
    {

        $data = $this->model->orderByDesc('updated_at');

        return datatables()->of($data)

            ->addColumn('message', function ($item) {
//                return $item->name;
                return $item->message;
            })
            ->addColumn('action', function ($item) {
            })->addIndexColumn()
            ->rawColumns([ 'action'])->toJson();
    }

    function getAll(array $attributes)
    {
        // TODO: Implement getAll() method.
        $data = $this->model->all();
        if (request()->segment(1) == 'api') {
            return response_api(true, 200, null, $data);
        }
        return $data;
    }

    function getById($id)
    {
        // TODO: Implement getById() method.
        return $this->model->find($id);
    }

    function create(array $attributes)
    {
        // TODO: Implement create() method.
        $model = new mailVendor([
            'message' => $attributes['message'],
            'vendor_id' => $attributes['vendor_id'],
        ]);
        $message = $attributes['vendorEmail'];
        Mail::send(new ReplayVendor($message , $attributes['message']));
        if ($model->save()) {
            return response_api(true, 200, __('app.success'), $model);
        }
        return response_api(false, 422, __('app.error'));


    }

    function update(array $attributes, $id = null)
    {
        // TODO: Implement update() method.
//        $model = $this->model->find($id);
//        if (isset($model)) {
//            if (isset($attributes['name'])) {
//                $model->name = $attributes['name'];
//            }
//            if (isset($attributes['description'])) {
//                $model->description = $attributes['description'];
//            }
//            if (isset($attributes['cost'])) {
//                $model->cost = $attributes['cost'];
//            }
//            if (isset($attributes['url'])) {
//                $model->url = $attributes['url'];
//            }
//            if (isset($attributes['service_id'])) {
//                $model->service_id = $attributes['service_id'];
//            }
//            if ($model->save()) {
//                return response_api(true, 200, __('app.success'), $model);
//            }
//        }
//        return response_api(false, 422, __('app.error'));
    }

    function delete($id)
    {
        // TODO: Implement delete() method.
//        $model = $this->model->find($id);
//
//        if (isset($model) && $model->delete())
//            return response_api(true, 200, __('app.success'), []);
//        return response_api(false, 422, __('app.error'), []);

    }

}