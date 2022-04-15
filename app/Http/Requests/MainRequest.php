<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainRequest extends FormRequest
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
          'title1' => 'required|string',
          'title2' => 'required|string',
          'subtitle1' => 'required|string',
          'subtitle2' => 'required|string',
          'main_img' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
          'img_name' => 'string',
        ];
    }

    public function messages()
    {
      return [
        'title1.required'=>'Do not leave this field blank',
        'title2.required'=>'Do not leave this field blank',
        'subtitle1.required'=>'Do not leave this field blank',
        'subtitle2.required'=>'Do not leave this field blank',
        'main_img.required'=>'Do not leave this field blank',
        'main_img.image'=>'Wrong image format',
        'main_img.max'=>'Image size not exceed 2MB',
        'main_img.mimes'=>'Wrong image format',
      ];
    }
}
