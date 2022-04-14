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
      'title.required'=>'Không bỏ trống tiêu đề',
      'subtitle.required'=>'Không bỏ trống tiêu đề nhor',
      'description.required'=>'Không bỏ trống mô tả',
      'image.required'=>'Không bỏ trống ảnh',
      'image.image'=>'Tệp phải là ảnh',
      'image.max'=>'Dung lượng ảnh không quá 2MB',
      'image.mimes'=>'Tệp phải là ảnh',
      'category.required'=>'Không bỏ trống category',
      'client.required'=>'Không bỏ trống client',

    ];
  }
}
