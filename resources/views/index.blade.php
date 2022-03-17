@extends('layouts.default')
@section('title', 'お問い合わせ')

@section('content')
<form class="form" action="{{ route('confirm') }}" method="POST">
  @csrf
  <div>
    <div class="form-item">
      <p class="form-item-label"><span class="form-item-label-required">必須</span>お名前</p>
      <input type="text" name="name" class="form-item-input" placeholder="例：山田　太郎" value="{{old('name')}}">
    </div>
    @error('name')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div>
    <div class="form-item">
      <p class="form-item-label">
        <span class="form-item-label-required">必須</span>フリガナ</p>
      <input type="text" name="furigana" class="form-item-input" placeholder="例：ヤマダ　タロウ" value="{{old('furigana')}}" >
    </div>
    @error('furigana')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div>
    <div class="form-item">
      <p class="form-item-label"><span class="form-item-label-required">必須</span>メールアドレス</p>
      <input type="email" name="email" class="form-item-input" placeholder="例：yamada@example.com" value="{{old('email')}}">
    </div>
    @error('email')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div>
    <div class="form-item">
      <p class="form-item-label"><span class="form-item-label-required">必須</span>電話番号</p>
      <input type="text" name="tel" class="form-item-input" placeholder="例：09012345678" value="{{old('tel')}}" oninput="value = value.replace(/[^0-9]+/i,'');" minlength="10" maxlength="11">
    </div>
    @error('tel')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div>
    <div class="form-item">
      <p class="form-item-label"><span class="form-item-label-required">必須</span>郵便番号</p>
      <input type="text" name="postcode" class="form-item-input" placeholder="例：1010047" oninput="value = value.replace(/[^0-9]+/i,'');" value="{{old('postcode')}}" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
    </div>
    @error('postcode')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div>
    <div class="form-item">
      <p class="form-item-label"><span class="form-item-label-required">必須</span>住所</p>
      <input type="text" name="address" class="form-item-input" placeholder="例：東京都千代田区内神田１－１－１　内神田ハイツ４０１号" value="{{old('address')}}">
    </div>
    @error('address')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div>
    <div class="form-item">
      <p class="form-item-label"><span class="form-item-label-required">必須</span>生年月日</p>
      <input type="date" name="birthday" class="form-item-input"  value="{{old('birthday')}}">
    </div>
    @error('birthday')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div>
    <div class="form-item">
      <p class="form-item-label"><span class="form-item-label-required">必須</span>性別</p>
      <div class="form-item-radio">
        <input type="radio" name="sex" id="mail" value="男" {{ old('sex', '男')=='男' ? 'checked' : '' }}><label for="mail" class="sex_lbl">男</label>
        <input type="radio" name="sex" id="femail" value="女" {{ old('sex') == '女' ? 'checked' : '' }}><label for="femail" class="sex_lbl">女</label>
      </div>
    </div>
    @error('sex')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div>
    <div class="form-item">
      <p class="form-item-label"><span class="form-item-label-required">必須</span>お問い合わせ内容</p>
      <textarea name="inquiry" class="form-item-textarea" placeholder="お問い合わせ内容をご入力ください">{{ old('inquiry') }}</textarea>
    </div>
    @error('inquiry')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <button type="submit" class="form-btn">入力内容確認</button>
</form>
@endsection