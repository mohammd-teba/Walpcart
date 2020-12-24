<?php

namespace App\Http\Requests\Vendor;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVendorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
         $str = $_SERVER['REQUEST_URI'];
        preg_match_all('!\d+!', $str, $user_id);

        $user_id =(int) $user_id[0][0];
        return [
            'name' => 'required|string|max:191',
           'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i|unique:vendors,email,'. $user_id,
            'phone' => 'required',
            'address' => 'required|string',
            'image' => 'nullable|image',
            'url' => 'required|string',
            'product_id' => 'required|integer',
        ];
    }
}
