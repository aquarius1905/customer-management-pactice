@extends('layouts.default')
@section('title', '送信内容確認')

@section('content')
<form class="form" action="{{ route('send') }}" method="POST">
  @csrf
  <div class="form-item">
    <p class="form-item-label">お名前</p>
    <p  class="form-item-content">{{ $inputs['name'] }}</p>
    <input type="hidden" name="name" value="{{ $inputs['name'] }}" >
  </div>
  <div class="form-item">
    <p class="form-item-label">フリガナ</p>
    <p class="form-item-content">{{ $inputs['furigana'] }}</p>
    <input type="hidden" name="furigana" value="{{ $inputs['furigana'] }}">
  </div>
  <div class="form-item">
    <p class="form-item-label">電話番号</p>
    <p class="form-item-content">{{ $inputs['tel'] }}</p>
    <input type="hidden" name="tel" value="{{ $inputs['tel'] }}">
  </div>
  <div class="form-item">
    <p class="form-item-label">メールアドレス</p>
    <p class="form-item-content">{{ $inputs['email'] }}</p>
    <input type="hidden" name="email" value="{{ $inputs['email'] }}">
  </div>
  <div class="form-item">
    <p class="form-item-label">郵便番号</p>
    <p class="form-item-content">{{ $inputs['postcode'] }}</p>
    <input type="hidden" name="postcode" value="{{ $inputs['postcode'] }}">
  </div>
  <div class="form-item">
    <p class="form-item-label">住所</p>
    <p class="form-item-content">{{ $inputs['address'] }}</p>
    <input type="hidden" name="address" value="{{ $inputs['address'] }}">
  </div>
  <div class="form-item">
    <p class="form-item-label">生年月日</p>
    <p class="form-item-content">{{ $inputs['birthday'] }}</p>
    <input type="hidden" name="birthday" value="{{ $inputs['birthday'] }}">
  </div>
  <div class="form-item">
    <p class="form-item-label">性別</p>
    <p class="form-item-content">{{ $inputs['sex'] }}</p>
    <input type="hidden" name="sex" value="{{ $inputs['sex'] }}">
  </div>
  <div class="form-item">
    <p class="form-item-label">お問い合わせ内容</p>
    <p class="form-item-content">{{ $inputs['inquiry'] }}</p>
    <input type="hidden" name="inquiry" value="{{ $inputs['inquiry'] }}">
  </div>
  </div>
  <div class="btn-wrapper">
    <button type="submit" class="form-btn" name="action" value="back">入力内容修正</button>
    <button type="submit" class="form-btn" name="action" value="submit">送信する</button>
  </div>
</form>
@endsection