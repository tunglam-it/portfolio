<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
      'timeline' => 'required|string',
      'title' => 'required|string',
      'description' => 'required',
      'image' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
    ];
  }

  public function messages()
  {
    return [
      'timeline.required'=>'Do not leave this field blank',
      'title.required'=>'Do not leave this field blank',
      'description.required'=>'Do not leave this field blank',
      'image.required'=>'Do not leave this field blank',
      'image.image'=>'Wrong image format',
      'image.max'=>'Image size not exceed 2MB',
      'image.mimes'=>'Wrong image format',
    ];
  }
}
