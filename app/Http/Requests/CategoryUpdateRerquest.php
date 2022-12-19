<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Auth;

class CategoryUpdateRerquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Gate::any(['admin','category'], Auth::user())) {
            return true;
        } 

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:100|unique:categories,name,'.$this->id
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên danh mục không để trống',
            'name.unique' => 'Tên danh mục đã được sử dụng, chọn tên khác',
            'name.min' => 'Tên danh mục tối thiểu là 3 ký tự',
            'name.max' => 'Tên danh mục tối đa là 100 ký tự',
        ];
    }
}
