<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Carbon\Carbon;
use Log;

class CustomerController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $this->validate($request, Customer::$rules);
        $inputs = $request->all();
        $name = $request->lastname.'　'.$request->firstname;
        $furigana = $request->lastname_furigana.'　'.$request->firstname_furigana;
        return view('confirm', ['inputs' => $inputs, 'name' => $name, 'furigana' => $furigana]);
    }

    public function send(Request $request)
    {
        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');
        
        //フォームから受け取ったactionを除いたinputの値を取得
        $inputs = $request->except('action');

        //actionの値で分岐
        if($action !== 'submit'){
            return redirect()
                ->route('index')
                ->withInput($inputs);
        } else {//登録
            $customer = new Customer;
            unset($inputs['_token_']);
            $customer->fill($inputs)->save();
            //送信完了ページのviewを表示
            return view('complete');
        }
    }

    public function getCustomers()
    {
        $items = Customer::all();
        return view('management', ['items' => $items]);
    }

    public function search(Request $request)
    {
        $query = Customer::query();
        if($request->lastname) {
            $query->orWhere('name', 'like', "%{$request->lastname}%");
        }
        if($request->firstname) {
            $query->orWhere('name', 'like', "%{$request->firstname}%");
        }
        if($request->firstname_furigana) {
            $query->orWhere('furigana', 'like', "%{$request->firstname_furigana}%");
        }
        if($request->lastname_furigana) {
            $query->orWhere('furigana', 'like', "%{$request->lastname_furigana}%");
        }
        if($request->email) {
            $query->orWhere('email', 'like', "%{$request->email}%");
        }
        if($request->tel) {
            $query->orWhere('tel', 'like', "%{$request->tel}%");
        }
        if($request->postcode) {
            $query->orWhere('postcode', 'like', "%{$request->postcode}%");
        }
        if($request->address) {
            $query->orWhere('address', 'like', "%{$request->address}%");
        }
        if($request->birthday_at_from && $request->birthday_at_to) {
            $query->orWhere('birthday', '>=',  Carbon::parse($request->birthday_at_from)->startOfDay())->where('birthday', '<=',  Carbon::parse($request->birthday_at_to)->endOfDay());
        } else if($request->birthday_at_from && !$request->birthday_at_to) {
            $query->orWhere('birthday', '>=',  Carbon::parse($request->birthday_at_from)->startOfDay());
        } else if(!$request->birthday_at_from && $request->birthday_at_to) {
            $query->orWhere('birthday', '<=',  Carbon::parse($request->birthday_at_to)->endOfDay());
        }
        if($request->sex) {
            $query->orWhere('sex', 'like', "%{$request->sex}%");
        }
        if($request->inquiry) {
            $query->orWhere('inquiry', 'like', "%{$request->inquiry}%");
        }
        $items = $query->get();
        return view('management', ['items' => $items]);
    }
}
