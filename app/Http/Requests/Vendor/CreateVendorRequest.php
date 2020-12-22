<?php

namespace App\Http\Requests\Vendor;

use Illuminate\Foundation\Http\FormRequest;

class CreateVendorRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:vendors',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'image' => 'nullable|image',
            'url' => 'required|string',
            'product_id' => 'required|integer',
        ];
    }
}
