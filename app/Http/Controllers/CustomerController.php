<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

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
        return view('confirm', ['inputs' => $inputs]);
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
}
