<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CustomerForm extends Component
{
    public $lastname;
    public $firstname;
    public $lastname_furigana;
    public $firstname_furigana;
    public $email;
    public $postcode;
    public $address;
    public $tel;
    public $birthday;
    public $sex;
    public $inquiry;

    // validationのルールを定義
    protected $rules = [
        'lastname' => 'required|max:10',
        'firstname' => 'required|max:10',
        'lastname_furigana' => 'required|max:25|regex:/^[ァ-ヶー　]+$/u',
        'firstname_furigana' => 'required|max:25|regex:/^[ァ-ヶー　]+$/u',
        'email' => 'required|email',
        'postcode' => 'required|size:7',
        'address' => 'required',
        'tel' => 'required|between:10,11',
        'birthday' => 'required',
        'sex' => 'required',
        'inquiry' => 'required|max:1000',
    ];

    // inputタグが更新された際に、validateを行う。validateOnlyメソッドはinputタグ一つ一つに対してvalidateを行うことができます。
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.customer-form');
    }
}
