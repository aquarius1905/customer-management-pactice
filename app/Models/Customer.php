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
        'furigana' => 'required|max:50',
        'email' => 'required|email',
        'postcode' => 'required',
        'address' => 'required',
        'tel' => 'required',
        'birthday' => 'required',
        'sex' => 'required',
        'inquiry' => 'required|max:1000',
    );
}
