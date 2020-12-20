<?php
/**
 * Created by PhpStorm.
 * UserRequest: mohammedsobhei
 * Date: 5/2/18
 * Time: 11:43 PM
 */

namespace App\Repositories\Eloquents;


use App\Models\Admin;
use App\Repositories\Interfaces\Repository;
use App\Repositories\Uploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Spatie\Permission\Models\Role;

class AdminEloquent extends Uploader implements Repository
{

    private $model ;

    public function __construct(Admin $model)
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
            ->editColumn('is_active', function ($admin) {
                return ($admin->is_active == 1) ?
                    '<span class="label label-sm label-success">Active</span>' : '<span class="label label-sm label-danger">Inactive</span>';
            })
            ->addColumn('action', function ($item) {
                $admin=authAdmin();

                $edit="";
                $activate="";


//                if($admin->can('Edit admins')) {
                $checked = '';
                if ($admin->is_active)
                    $checked = 'checked="checked"';
                $activate = '<span class="m-switch m-switch m-switch--outline m-switch--icon m-switch--success" style="margin-left:3px;margin-top: 10px;vertical-align: middle;"><label><input type="checkbox"' . $checked . ' name="is_active" class="is_active" data-id="' . $admin->id . '"><span></span></label></span>';

                $edit = ' <a href="' . url(admin_admins_url() . '/admin-edit/' . $item->id) . '" class="btn btn-circle btn-icon-only purple edit-admin-mdl">
                                        <i class="fa fa-edit"></i>
                                    </a>';
//                }

                $delete="";
//                if($admin->can('Delete admins'))
                    $delete = '<a href="' . url(admin_admins_url() . '/' . $item->id) . '" class="btn btn-circle btn-icon-only red delete">
                                        <i class="fa fa-trash"></i>
                                    </a>';
//

                if(!isset($activate) && !isset($edit)&& !isset($delete) )
                    return "";

                return $activate . $edit .  $delete ;

            })->addIndexColumn()
            ->rawColumns(['action', 'is_active'])->toJson();
    }

    public function modal_create()
    {
//        $roles=Role::all();
        $view = view()->make(admin_vw() . '.modal_role', [
            'modal_id' => 'add-admin',
            'modal_title' => 'Add Admin',
            'icon' => '<i class="fa fa-plus"></i>',
            'action' => '<button type="submit" class="btn green"><i class="fa fa-plus"></i> Add </button>',
            'form' => [
                'method' => 'POST',
                'url' => url(admin_admins_url() . '/admin-create'),
                'form_id' => 'formAdd',
                'fields' => [
                    'name' => 'text',
                    'email' => 'email',
                    'phone' => 'text',
                    'address' => 'text',
                    'password' => 'password',
//                    'roles[]' => $roles ,
                ], 'fields_name' => [
                    'name' => 'Name',
                    'email' => 'Email',
                    'phone' => 'Phone',
                    'address' => 'Address',
                    'password' => 'Password',
//                    'roles[]' => 'Roles',
                ],
            ]
        ]);

        $html = $view->render();

        return $html;
    }

    public function modal_update($id)
    {
        $item = $this->model->find($id);

//        $roles=Role::all();

        $html = 'This admin does not exist';

        if (isset($item)) {
            $view = view()->make(admin_vw() . '.modal_role', [
                'modal_id' => 'edit-admin',
                'modal_title' => 'Edit Admin',
                'icon' => '<i class="fa fa-edit"></i>',
                'action' => '<button type="submit" class="btn purple"><i class="fa fa-edit"></i> Edit </button>',
                'form' => [
                    'method' => 'PUT',
                    'url' => url(admin_admins_url() . '/admin-edit/' . $id),
                    'form_id' => 'formEdit',
                    'fields' => [
                        'name' => 'text',
                        'email' => 'email',
                        'phone' => 'text',
                        'address' => 'text',
                        'password' => 'password',
//                        'roles[]' => $roles ,
                    ], 'fields_name' => [
                        'name' => 'Name',
                        'email' => 'Email',
                        'phone' => 'Phone',
                        'address' => 'Address',
                        'password' => 'Password',
//                        'roles[]' => 'Roles',
                    ], 'values' => [
                        'name' => $item->name,
                        'email' => $item->email,
                        'phone' => $item->phone,
                        'address' => $item->address,
                        'password' => '',
//                        'roles[]' =>  $item,

                    ],
                ]
            ]);

            $html = $view->render();

            return $html;
        }
        return 'error';
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
//        $model = Admin::create($attributes);

        $admin = new Admin();
        $admin->name = $attributes['name'];
        $admin->email = $attributes['email'];
        $admin->phone = $attributes['phone'];
        $admin->address = $attributes['address'];
        $admin->password = bcrypt($attributes['password']);
        if ($admin->save()) {

//            if(isset($attributes['roles']))
//                $roles=$attributes['roles'];
//
//            if (isset($roles)) {
//                $admin->roles()->sync($roles);  //If one or more role is selected associate user to roles
//                $admin->save();
//            }
//            else {
//                $admin->roles()->detach(); //If no role is selected remove exisiting role associated to a user
//                $admin->save();
//            }
//
//            $admin = $this->model->find($admin->id);

            return response_api(true, 200, trans('app.created'), $admin);

        }
        return response_api(false, 422, __('app.error'));


    }

    function update(array $attributes, $id = null)
    {
        // TODO: Implement update() method.
        $admin = $this->model->find($id);

        if (isset($attributes['name']))
            $admin->name = $attributes['name'];

        if (isset($attributes['email']))
            $admin->email = $attributes['email'];
        if (isset($attributes['phone']))
            $admin->phone = $attributes['phone'];
        if (isset($attributes['address']))
            $admin->address = $attributes['address'];
        if (isset($attributes['password']))
            $admin->password = bcrypt($attributes['password']);

        if ($admin->save()) {

//            if(isset($attributes['roles']))
//                $roles=$attributes['roles'];
//
//            if (isset($roles)) {
//                $admin->roles()->sync($roles);  //If one or more role is selected associate user to roles
//                $admin->save();
//            }
//            else {
//                $admin->roles()->detach(); //If no role is selected remove exisiting role associated to a user
//                $admin->save();
//            }

            return response_api(true, 200, trans('app.updated'), $admin);

        }
        return response_api(false, 422, trans('app.not_updated'));
    }

    function delete($id)
    {
        // TODO: Implement delete() method.
        $model = $this->model->find($id);

        if (isset($model) && $model->delete())
            return response_api(true, 200, __('app.success'), []);
        return response_api(false, 422, __('app.error'), []);

    }


    function adminActivate($id){
        $admin = $this->model->find($id['admin_id']);
        if (isset($admin)) {
            $admin->is_active = !$admin->is_active;

            if ($admin->save()) {
                if (!$admin->is_active) {
                    $action = 'admin_deactivated';
                    return response_api(true, 200);

                }
                return response_api(true, 200);
            }
        }
        return response_api(false, 422);
    }

}
