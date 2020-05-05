<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            "name" => [
                "required",
                "min:5",
                "max:255",
                "unique:products,name,{$this->id},id"
            ],
            "description" => [
                "nullable",
                "min:50",
                "unique:products,description,{$this->id},id"
            ],
            "content" => [
                "nullable",
                "min:50",
                "unique:products,content,{$this->id},id"
            ],
            "amount" => [
                "required",
                "numeric",
            ],
            "price" => [
                "required",
                "numeric",
            ],
            "sale" => [
                "required",
                "numeric",
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
            "name.required" => "ten la bat buoc",
            "name.min" => "ten phai co do dai tu 5-255 ky tu",
            "name.max" => "ten phai co do dai tu 5-255 ky tu",
            "name.unique" => "ten da duoc su dung",
            "description.min" => "mo ta phai co do dai tu 50 ky tu",
            "description.unique" => "mo ta da duoc su dung",
            "content.min" => "noi dung phai co do dai tu 50 ky tu",
            "content.unique" => "noi dung da duoc su dung",
            "amount.required" => "amount la bat buoc",
            "amount.numeric" => "amount phai la so",
            "price.required" => "gia la bat buoc",
            "price.numeric" => "gia phai la so",
            "sale.required" => "gia khuyen mai la bat buoc",
            "sale.numeric" => "gia khuyen mai phai la so",
            "image.image" => "Image phai la anh",
            "image.mimes" => "Image phai la anh",
        ];
    }
}
