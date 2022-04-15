<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
      'title'=>'required|string',
      'description'=>'required',
      'icon' => 'required|string',
    ];
  }

  public function messages()
  {
    return [
      'title.required'=>'Do not leave this field blank',
      'description.required'=>'Do not leave this field blank',
      'icon.required'=>'Do not leave this field blank',

    ];
  }
}
