<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DogStoreRequest extends FormRequest
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
            'sex_id' => 'required',
            'size_id' => 'required',
            'name' => 'required|max:50',
            'image' => 'required|image',
            'breed' => 'required|max:50',
            'color' => 'required|max:50',

        ];
    }
}
