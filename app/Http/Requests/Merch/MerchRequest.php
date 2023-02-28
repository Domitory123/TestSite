<?php

namespace App\Http\Requests\Merch;

use Illuminate\Foundation\Http\FormRequest;

class MerchRequest extends FormRequest
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
            'nameMainPhoto'=>'required|image',
            'namePhoto1'=>'required|image',
            'namePhoto2'=>'required|image',
            'title'=>'string',
            'describe'=>'string'
        ];
    }
}
