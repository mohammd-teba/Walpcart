<?php
/**
 * Created by PhpStorm.
 * UserRequest: mohammedsobhei
 * Date: 5/2/18
 * Time: 11:43 PM
 */

namespace App\Repositories\Eloquents;


use App\Models\Admin;
use App\Models\Products;
use App\Models\Service;
use App\Repositories\Interfaces\Repository;
use App\Repositories\Uploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Spatie\Permission\Models\Role;

class ProductEloquent extends Uploader implements Repository
{
    private $model;

    public function __construct(Products $model)
    {
        $this->model = $model;
    }

    function anyData()
    {

        $data = $this->model->orderByDesc('updated_at');

        return datatables()->of($data)

            ->addColumn('name', function ($item) {
//                return $item->name;
                return $item->name;
            })
            ->editColumn('url', function ($item) {

                return '<a href="'.$item->url.'" target="_blank">Go to website</a>';
            })

            ->editColumn('is_active', function ($admin) {
                return ($admin->is_active == 1) ?
                    '<span class="label label-sm label-success">Active</span>' : '<span class="label label-sm label-danger">Inactive</span>';
            })
            ->addColumn('action', function ($item) {
                $edit="";

                $checked = '';
                if ($item->is_active)
                    $checked = 'checked="checked"';
                $activate = '<span class="m-switch m-switch m-switch--outline m-switch--icon m-switch--success" style="margin-left:3px;margin-top: 10px;vertical-align: middle;"><label><input type="checkbox"' . $checked . ' name="is_active" class="is_active" data-id="' . $item->id . '"><span></span></label></span>';

                $edit = ' <a href="' . url(admin_products_url() . '/product-edit/' . $item->id) . '" class="btn btn-circle btn-icon-only purple edit">
                                        <i class="fa fa-edit"></i>
                                    </a>';


                $delete="";

                $delete = '   <a href="' . url(admin_products_url() . '/product/' . $item->id) . '" class="btn btn-circle btn-icon-only red delete">
                                        <i class="fa fa-trash"></i>
                                    </a>';
//

                if(!isset($edit)&& !isset($delete) )
                    return "";

                return $activate . $edit .  $delete ;

            })->addIndexColumn()
            ->rawColumns(['is_active' , 'url' , 'action'])->toJson();
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
        $model = new Products([
            'name' => $attributes['name'],
            'description' => $attributes['description'],
            'cost' => $attributes['cost'],
            'url' => $attributes['url'],
            'service_id' => $attributes['service_id'],
        ]);
        if ($model->save()) {
            return response_api(true, 200, __('app.success'), $model);
        }
        return response_api(false, 422, __('app.error'));


    }

    function update(array $attributes, $id = null)
    {
        // TODO: Implement update() method.
        $model = $this->model->find($id);
        if (isset($model)) {
            if (isset($attributes['name'])) {
                $model->name = $attributes['name'];
            }
            if (isset($attributes['description'])) {
                $model->description = $attributes['description'];
            }
            if (isset($attributes['cost'])) {
                $model->cost = $attributes['cost'];
            }
            if (isset($attributes['url'])) {
                $model->url = $attributes['url'];
            }
            if (isset($attributes['service_id'])) {
                $model->service_id = $attributes['service_id'];
            }
            if ($model->save()) {
                return response_api(true, 200, __('app.success'), $model);
            }
        }
        return response_api(false, 422, __('app.error'));
    }

    function delete($id)
    {
        // TODO: Implement delete() method.
        $model = $this->model->find($id);

        if (isset($model) && $model->delete())
            return response_api(true, 200, __('app.success'), []);
        return response_api(false, 422, __('app.error'), []);

    }

    function productActivate($id){
        $product = $this->model->find($id['product_id']);
        if (isset($product)) {
            $product->is_active = !$product->is_active;

            if ($product->save()) {
                if (!$product->is_active) {
                    $action = 'product_deactivated';
                    return response_api(true, 200);

                }
                return response_api(true, 200);
            }
        }
        return response_api(false, 422);
    }

}