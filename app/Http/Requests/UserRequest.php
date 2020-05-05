<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
                "max:50",
                "unique:users,name,{$this->id},id"
            ],
            'email' => [
                "required",
                "email",
                "unique:users,email,{$this->id},id",
            ],
            'phone' => [
                "nullable",
                "regex:/^([0-9\s\-\+\(\)]*)$/",
                "max:10",
            ],
            'password' => !$this->id ?
                [
                    "required",
                    "min:8",
                    "regex:/^(?=.*[0-9]+.*)(?=.*[a-z]|[A-Z]+.*)[0-9a-zA-Z]{8,}$/",
                ] :
                [
                    "nullable"
                ],
            'confirm_password' => !$this->id ?
                [
                    "required_with:password",
                    "same:password",
                ] :
                [
                    "nullable"
                ],
            'role' => [
                "required",
            ],
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "ten la bat buoc",
            "name.min" => "ten phai co do dai tu 5-50 ky tu",
            "name.max" => "ten phai co do dai tu 5-50 ky tu",
            "name.unique" => "ten da duoc su dung",
            'email.required' => "Email la bat buoc",
            'email.email' => "Vui long nhap dung dinh dang email",
            'email.unique' => "Email da duoc su dung",
            'password.required' => "Mat khau la bat buoc",
            'password.min' => "Mat khau phai co do dai tu 8 ky tu",
            'password.regex' => "Mật khẩu phải có độ dài tối thiểu 8 ký tự và các ký tự chữ và số.",
            'confirm_password.required' => "Xac nhan mat khau la bat buoc",
            'confirm_password.same' => "Xac nhan mat khau khong khop",
            'phone.regex' => "Vui long nhap dung dinh dang so dien thoai",
            'phone.max' => "Vui long nhap dung dinh dang so dien thoai",
            'role.required' => "Quyen la bat buoc",
        ];
    }
}
