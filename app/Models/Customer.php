<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    protected $dates = [
        'birthday'
    ];
    public static $rules = array(
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
    );
}
