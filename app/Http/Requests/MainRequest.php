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
        'title1.required'=>'Không bỏ trống tiêu đề 1',
        'title2.required'=>'Không bỏ trống tiêu đề 2',
        'subtitle1.required'=>'Không bỏ trống tiêu đề nhỏ 1',
        'subtitle2.required'=>'Không bỏ trống tiêu đề nhỏ 2',
        'main_img.required'=>'Không bỏ trống ảnh',
        'main_img.image'=>'Tệp phải là ảnh',
        'main_img.max'=>'Dung lượng ảnh không quá 2MB',
        'main_img.mimes'=>'Tệp phải là ảnh',
      ];
    }
}
