@extends('layouts.default')
@section('title', 'お問い合わせ完了')

@section('content')
<div class="complete_form">
  <p class="complete_content">この度は、お問い合わせいただき、誠にありがとうございます。</p>
  <p class="complete_content">内容につきまして確認の上、ご返信させて頂きます。</p>
  <div class="btn-wrapper">
    <a href="{{ route('index') }}" class="bk-btn">お問い合わせ入力画面に戻る</a>
  </div>
</div>
@endsection