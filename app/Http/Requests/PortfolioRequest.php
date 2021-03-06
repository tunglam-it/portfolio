<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
      'title' => 'required|string',
      'subtitle' => 'required|string',
      'description' => 'required',
      'image' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
      'category' => 'required|string',
      'client' => 'required|string'
    ];
  }
  public function messages()
  {
    return [
      'title.required'=>'Do not leave this field blank',
      'subtitle.required'=>'Do not leave this field blank',
      'description.required'=>'Do not leave this field blank',
      'image.required'=>'Do not leave this field blank',
      'image.image'=>'Wrong image format',
      'image.max'=>'Image size not exceed 2MB',
      'image.mimes'=>'Wrong image format',
      'category.required'=>'Do not leave this field blank',
      'client.required'=>'Do not leave this field blank',

    ];
  }
}
