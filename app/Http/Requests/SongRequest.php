<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongRequest extends FormRequest
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
            'title' => 'required',
            'singer' => 'required',
            'album' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'country' => 'required',
            'price' => 'required|numeric',
        ];
    }

    public function messages(){
        return [
            'price.numeric' => 'price harus numeric',
            //'title.required' => 'price harus numeric',
        ];
    }
}
