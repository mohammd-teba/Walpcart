<?php
/**
 * Created by PhpStorm.
 * UserRequest: mohammedsobhei
 * Date: 5/2/18
 * Time: 11:43 PM
 */

namespace App\Repositories\Eloquents;


use App\Models\Admin;
use App\Models\Service;
use App\Models\Vendor;
use App\Repositories\Interfaces\Repository;
use App\Repositories\Uploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Spatie\Permission\Models\Role;

class VendorEloquent extends Uploader implements Repository
{
    private $model;

    public function __construct(Vendor $model)
    {
        $this->model = $model;
    }

    function anyData()
    {

        $data = $this->model->orderByDesc('updated_at');

        return datatables()->of($data)
            ->filter(function ($query) {

                if (request()->filled('name')) {
                    $query->where('name', 'LIKE', '%' . request()->get('name') . '%');
                }

                if (request()->filled('email')) {
                    $query->where('email', 'LIKE', '%' . request()->get('email') . '%');
                }
                if (request()->filled('phone')) {
                    $query->where('phone', 'LIKE', '%' . request()->get('phone') . '%');
                }
                if (request()->filled('status')) {
                    $query->where('is_active', request()->get('status'));
                }
            })
            ->editColumn('image', function ($item) {

                if (isset($item->image))
                    return '<img src="' . $item->image . '" width="80px">';
            })
            ->addColumn('name', function ($item) {
                return $item->name;
            })
           ->editColumn('url', function ($item) {

               return '<a href="'.$item->url.'" target="_blank">Go to website</a>';
                    })

            ->editColumn('is_active', function ($vendor) {
                return ($vendor->is_active == 1) ?
                    '<span class="label label-sm label-success">Active</span>' : '<span class="label label-sm label-danger">Inactive</span>';
            })
            ->addColumn('action', function ($item) {
                $edit="";

                $checked = '';
                if ($item->is_active)
                    $checked = 'checked="checked"';
//                $activate = '<input type="hidden" value="{{ $item->id }}" name="is_active" class="is_active" data-id="' . $item->id . '" style="border-style:none;">
//                   <button class="btn t-btn delete-btn" typy="submit" style="border-style: none;">
//
//                                                                    <input id="chkToggle1" class="make-switch" type="checkbox" ' . $checked . ' data-toggle="toggle" class="is_active" data-id="' . $item->id . '">
//
//                                                            </button>';
                $activate = '<span class="m-switch m-switch m-switch--outline m-switch--icon m-switch--success" style="margin-left:3px;margin-top: 10px;vertical-align: middle;"><label><input type="checkbox"' . $checked . ' name="is_active" class="is_active" data-id="' . $item->id . '" data-on-color="success" data-off-color="warning"><span></span></label></span>';

                $edit = ' <a href="' . url(admin_vendors_url() . '/vendor-edit/' . $item->id) . '" class="btn btn-circle btn-icon-only purple edit">
                                        <i class="fa fa-edit"></i>
                                    </a>';


                $delete="";

                    $delete = '   <a href="' . url(admin_vendors_url() . '/vendor/' . $item->id) . '" class="btn btn-circle btn-icon-only red delete">
                                        <i class="fa fa-trash"></i>
                                    </a>';
//

                if(!isset($activate)&& !isset($edit)&& !isset($delete) )
                    return "";

                return $activate . $edit .  $delete ;

            })->addIndexColumn()
            ->rawColumns(['image' ,'url' , 'is_active' , 'action'])->toJson();
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
        $model = new Vendor([
            'image' => $this->upload($attributes, 'image'),
            'name' => $attributes['name'],
            'email' => $attributes['email'],
            'phone' => $attributes['phone'],
            'address' => $attributes['address'],
            'url' => $attributes['url'],
            'product_id' => $attributes['product_id'],
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
            if (isset($attributes['image'])) {
                $model->image = $this->upload($attributes, 'image');
            }
            if (isset($attributes['name'])) {
                $model->name = $attributes['name'];
            }
            if (isset($attributes['email'])) {
                $model->email = $attributes['email'];
            }
            if (isset($attributes['phone'])) {
                $model->phone = $attributes['phone'];
            }
            if (isset($attributes['address'])) {
                $model->address = $attributes['address'];
            }
            if (isset($attributes['image'])) {
                $model->image = $attributes['image'];
            }
            if (isset($attributes['url'])) {
                $model->url = $attributes['url'];
            }
            if (isset($attributes['product_id'])) {
                $model->product_id = $attributes['product_id'];
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

    function vendorActivate($id){
        $vendor = $this->model->find($id['vendor_id']);
        if (isset($vendor)) {
            $vendor->is_active = !$vendor->is_active;

            if ($vendor->save()) {
                if (!$vendor->is_active) {
                    $action = 'vendor_deactivated';
                    return response_api(true, 200);

                }
                return response_api(true, 200);
            }
        }
        return response_api(false, 422);
    }

}
