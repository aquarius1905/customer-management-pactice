<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->path() == '/';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:20',
            'furigana' => 'required|max:50',
            'email' => 'required|email',
            'postcode' => 'required',
            'address' => 'required',
            'tel' => 'required',
            'birthday' => 'required',
            'sex' => 'required',
            'inquiry' => 'required|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.max' => '名前は20文字以内で入力してください',
            'furigana.required' => 'フリガナを入力してください',
            'furigana.max' => 'フリガナは50文字以内で入力してください',
            'furigana.furigana' => 'フリガナは50文字以内で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.postcode' => '郵便番号の形式で入力してください',
            'tel.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'birthday.required' => '生年月日を入力してください',
            'birthday.date' => '生年月日は日付の形式で入力してください',
            'sex.required' => '性別を選択してください',
            'inquiry.required' => 'お問い合わせ内容を入力してください',
            'inquiry.max' => 'お問い合わせ内容は1000文字以内で入力してください',
        ];
    }

    protected function getRedirectUrl()
    {
        return '/';
    }
}
