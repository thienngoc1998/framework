<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            "title" => [
                "required",
                "min:5",
                "max:255",
                "unique:articles,title,{$this->id},id"
            ],
            "description" => [
                "nullable",
                "min:5",
                "unique:articles,description,{$this->id},id"
            ],
            "content" => [
                "required",
                "min:5",
                "unique:articles,content,{$this->id},id"
            ],
            "image" => [
                "nullable",
                "image",
                "mimes:jpeg,jpg,png",
            ],
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "tieu de la bat buoc",
            "title.min" => "tieu de phai co do dai tu 5-255 ky tu",
            "title.max" => "tieu de phai co do dai tu 5-255 ky tu",
            "title.unique" => "tieu de da duoc su dung",
            "description.min" => "mo ta phai co do dai tu 5 ky tu",
            "description.unique" => "mo ta da duoc su dung",
            "content.required" => "noi dung bai viet la bat buoc",
            "content.min" => "noi dung phai co do dai tu 5 ky tu",
            "content.unique" => "noi dung da duoc su dung",
            "image.image" => "Image phai la anh",
            "image.mimes" => "Image phai la anh",
        ];
    }
}
