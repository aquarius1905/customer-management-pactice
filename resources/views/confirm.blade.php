@extends('layouts.default')
@section('title', '送信内容確認')

<style>
  .form-item-content {
    width: 90%;
    font-weight: bold;
    font-size: 18px;
    width: 100%;
    font-size: 18px;
  }
</style>
@section('content')
<form class="form" action="{{ route('send') }}" method="POST">
  @csrf
  <div class="form-item">
    <p class="form-item-lbl">お名前</p>
    <p class="form-item-content">{{ $inputs['lastname'] }}　{{ $inputs['firstname'] }}</p>
    <input type="hidden" name="lastname" value="{{ $inputs['lastname'] }}" >
    <input type="hidden" name="firstname" value="{{ $inputs['firstname'] }}" >
  </div>
  <div class="form-item">
    <p class="form-item-lbl">フリガナ</p>
    <p class="form-item-content">{{ $inputs['lastname_furigana'] }}　{{ $inputs['firstname_furigana'] }}</p>
    <input type="hidden" name="lastname_furigana" value="{{ $inputs['lastname_furigana'] }}">
    <input type="hidden" name="firstname_furigana" value="{{ $inputs['firstname_furigana'] }}">
  </div>
  <div class="form-item">
    <p class="form-item-lbl">電話番号</p>
    <p class="form-item-content">{{ $inputs['tel'] }}</p>
    <input type="hidden" name="tel" value="{{ $inputs['tel'] }}">
  </div>
  <div class="form-item">
    <p class="form-item-lbl">メールアドレス</p>
    <p class="form-item-content">{{ $inputs['email'] }}</p>
    <input type="hidden" name="email" value="{{ $inputs['email'] }}">
  </div>
  <div class="form-item">
    <p class="form-item-lbl">郵便番号</p>
    <p class="form-item-content">{{ $inputs['postcode'] }}</p>
    <input type="hidden" name="postcode" value="{{ $inputs['postcode'] }}">
  </div>
  <div class="form-item">
    <p class="form-item-lbl">住所</p>
    <p class="form-item-content">{{ $inputs['address'] }}</p>
    <input type="hidden" name="address" value="{{ $inputs['address'] }}">
  </div>
  <div class="form-item">
    <p class="form-item-lbl">生年月日</p>
    <p class="form-item-content">{{ $inputs['birthday'] }}</p>
    <input type="hidden" name="birthday" value="{{ $inputs['birthday'] }}">
  </div>
  <div class="form-item">
    <p class="form-item-lbl">性別</p>
    <p class="form-item-content">{{ $inputs['sex'] }}</p>
    <input type="hidden" name="sex" value="{{ $inputs['sex'] }}">
  </div>
  <div class="form-item">
    <p class="form-item-lbl">お問い合わせ内容</p>
    <p class="form-item-content">{{ $inputs['inquiry'] }}</p>
    <input type="hidden" name="inquiry" value="{{ $inputs['inquiry'] }}">
  </div>
  </div>
  <div class="btn-wrapper">
    <button type="submit" class="modify-btn" name="action" value="back">入力内容修正</button>
    <button type="submit" class="form-btn" name="action" value="submit">送信する</button>
  </div>
</form>
@endsection