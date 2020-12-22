<?php


/**
 * Created by PhpStorm.
 * UserRequest: mohammedsobhei
 * Date: 5/12/17
 * Time: 2:50 PM
 */

function generateVerificationCode($digits = 6)
{
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while ($i < $digits) {
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}

function response_api($status, $statusCode, $message = null, $object = null, $page_count = null, $page = null, $count = null, $errors = null, $another_data = null)
{

    $message = isset($message) ? $message : message($statusCode);
    $error = ['status' => false, 'statusCode' => $statusCode, 'message' => $message];
    $success = ['status' => true, 'statusCode' => $statusCode, 'message' => $message];

    if ($status && isset($object)) {
        if (isset($page_count) && isset($page)) {
            if (isset($another_data))
                $success['items'] = ['info' => $another_data, 'data' => $object, 'total_pages' => $page_count, 'current_page' => $page + 1, 'total_records' => $count];
            else
                $success['items'] = ['data' => $object, 'total_pages' => $page_count, 'current_page' => $page + 1, 'total_records' => $count];
        } else
            $success['items'] = $object;

    } else if (!$status && isset($errors))
        $error['errors'] = $errors;
    else if (isset($object) || (is_array($object) && empty($object)))
        $error['items'] = $object;

    if (isset($another_data))
        foreach ($another_data as $key => $value)
            $success [$key] = $value;
    $response = ($status) ? $success : $error;
    return response()->json($response);
}


function authAdmin()
{
    if (auth()->guard('admin')->check())
        return auth()->guard('admin')->user();
    return null;
}

function user()
{
    if (auth()->check())
        return auth()->user();
    return null;
}

function admin_dashboard_url()
{
    return '/admin/home';
}

function empObj()
{
    return new stdClass();
}

function modals($page)
{
    return 'admin.modals.' . $page;
}

function assets($folder)
{
    return url('assets/' . $folder . '/assets');
}

function layouts($folder)
{
    return $folder . '.layout';
}

function dashboard()
{
    return 'Dashboard';
}

function admin_vw()
{
    return 'admin';
}

function admin_web_url()
{
    return 'admin/web';
}

function admin_admins_url()
{
    return 'admin/admins';
}
function admin_admins_vw()
{
    return admin_vw() . '.admins';
}
function admin_subscriptions_management_url()
{
    return 'admin/subscriptions_management';
}
function admin_subscriptions_management_vw()
{
    return admin_vw() . '.subscriptions_management';
}


function admin_home_url()
{
    return 'admin/home';
}

function admin_users_vw()
{
    return admin_vw() . '.users';
}


function admin_users_url()
{
    return admin_vw() . '/users';
}


function admin_services_vw()
{
    return admin_vw() . '.services';
}

function admin_services_url()
{
    return admin_vw() . '/services';
}

function admin_products_vw()
{
    return admin_vw() . '.products';
}


function admin_products_url()
{
    return admin_vw() . '/products';
}
function admin_vendors_vw()
{
    return admin_vw() . '.vendors';
}


function admin_vendors_url()
{
    return admin_vw() . '/vendors';
}



function admin_roles_url()
{
    return 'admin/roles';
}

function admin_roles_vw()
{
    return 'admin.roles';
}


function public_url()
{
    return url('public/');
}

function upload_url()
{
    return base_path() . '/public/upload';
}

function upload_assets()
{
    return url('/assets/upload');
}

function upload_storage()
{
    return storage_path('app');
}

function loader_icon()
{
    return url(assets('admin') . '/apps/img/preloader.gif');
}

function user_vw()
{
    return 'user';
}



function max_pagination($record = 10.0)
{
    return $record;
}

function admin_layout_vw()
{
    return 'admin.layout';
}


function site_layout_vw()
{
    return 'site.layout';
}

function notification_trans()
{
    return 'app.notification_message';
}


function message($status_code)
{
    switch ($status_code) {
        case 200:
            return __('app.success');
        case 400:
            return __('app.not_data_found');
        case 401:
            return __('app.invalid_token');
        case 404:
            return __('app.invalid_route');
        case 422:
            return __('app.client_input_error');//'Client input error.';
        case 500:
            return __('app.server_error');//'Something went wrong. Please try again later.';
    }
    return 'Sorry! You do not have permission.';
}
