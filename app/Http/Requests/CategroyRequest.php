<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategroyRequest extends FormRequest
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
            'name'=>'required|unique:categories,name'
        ];
    }
    public function messages(){
        return[
        'name.required'=>'**Vui lòng nhập tên thể loại',
        'name.unique'=>'**Thể Loại đã tồn tại'
    ];
    }
}
