<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the pages is authorized to make this request.
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
            'name'=>'required|unique:categories,name|max:20',
            'description'=>'required|max:125'
        ];
    }

    public function messages()
    {
        # code...
        return [
            'name.required'=>'Bạn vui lòng nhập tên thể loại!',
            'name.unique'=>'Tên thể loại bị trung, vui lòng kiểm tra lại!',
            'name.max'=>'Vui lòng nhập tên thể loại ít hơn 20 ký tự!',
            'description.max'=>'Vui lòng nhập miêu tả thể loại ít hơn 125 ký tự!'
        ];
    }
}
