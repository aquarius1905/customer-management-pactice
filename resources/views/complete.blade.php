@extends('layouts.default')
@section('title', 'お問い合わせ完了')
<style>
  .complete_form {
    width: 40%;
    margin: 0 auto;
    margin-top: 100px;
  }
  .complete_content {
      line-height: 70px;
      font-size: 20px;
      text-align: center;
  }
  .bk-btn {
      color: #fff;
      background: #006eb0;
      padding: 20px 50px;
      display: inline-block;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      font-size: 20px;
      text-decoration: none;
      width: 100%;
  }
</style>
@section('content')
<div class="complete_form">
  <p class="complete_content">この度は、お問い合わせいただき、誠にありがとうございます。</p>
  <p class="complete_content">内容につきまして確認の上、ご返信させて頂きます。</p>
  <div class="btn-wrapper">
    <a href="{{ route('index') }}" class="bk-btn">お問い合わせ入力画面に戻る</a>
  </div>
</div>
@endsection