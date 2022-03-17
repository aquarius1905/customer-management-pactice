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
        'name' => 'required|max:20',
        'furigana' => 'required|max:50|regex:/^[ァ-ヶー　]+$/u',
        'email' => 'required|email',
        'postcode' => 'required|size:7',
        'address' => 'required',
        'tel' => 'required|between:10,11',
        'birthday' => 'required',
        'sex' => 'required',
        'inquiry' => 'required|max:1000',
    );
}
