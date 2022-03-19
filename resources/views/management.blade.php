@extends('layouts.default')
@section('title', '顧客管理画面')

<style>
  .sub_ttl {
    color: #006eb0;
    background-color: #eaedf2;
    padding: 20px;
    font-size: 26px;
  }
  .search {
    width: 70%;
    margin: 0 auto;
    border: 1px solid #eee;
  }
  .search-form {
    padding: 20px;
  }
  .search-item-wrapper {
    display: flex;
    justify-content: space-between;
  }
  .search-item-left,
  .search-item-right {
    padding: 20px;
    width: 50%;
  }
  .search-item {
      padding: 15px 0;
      width: 100%;
      display: flex;
      align-items: center;
  }
  .search-item-lbl {
      width: 60%;
      font-weight: bold;
      font-size: 18px;
      color: #555;
  }
  .search-item-name-lbl {
      width: 15%;
      margin-left: 10px;
      font-weight: bold;
      font-size: 18px;
      color: #555;
  }
  .search-item-input{
    border: 1px solid #ddd;
    border-radius: 6px;
    margin-left: 40px;
    padding: 0 10px;
    height: 40px;
    background: #eaedf2;
    font-size: 18px;
    width: 100%;
  }
  .search-item-name-input {
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 0 10px;
    height: 40px;
    background: #eaedf2;
    font-size: 18px;
    width: 60%;
  }
  .search-item-date-lbl {
      width: 10%;
      font-weight: bold;
      font-size: 18px;
      color: #555;
      text-align: center;
  }
  .search-item-date-input {
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 0 10px;
    height: 40px;
    background: #eaedf2;
    font-size: 18px;
    width: 60%;
  }
  .search-item-radio {
      width: 100%;
      margin-left: 40px;
      font-size: 18px;
  }
  .search-btn-wrapper {
    display: flex;
    margin: 0 auto;
  }
  .search-btn {
      border-radius: 6px;
      margin: 20px auto 0;
      padding: 10px 0;
      width: 150px;
      display: block;
      background: #006eb0;
      color: #fff;
      font-weight: bold;
      font-size: 20px;
      border: none;
      cursor: pointer;
  }
  .management-form {
    width: 90%;
    margin : 50px auto;
  }
  .management-table {
    width: 100%;
    border-bottom: 1px solid #eee;
  }
  .management-table th {
    background: #006eb0;
    font-weight: bold;
    color: #eee;
    height: 50px;
    line-height: 50px;
  }
  .management-table td {
    height: 50px;
    line-height: 50px;
    text-align: center;
  }
</style>

@section('content')
<div class="search">
  <h2 class="sub_ttl">顧客検索</h2>
  <form class="search-form" action="{{ route('search') }}" method="get">
    @csrf
    <div class="search-item-wrapper">
      <div class="search-item-left">
        <div class="search-item">
          <p class="search-item-lbl">名前</p>
          <input type="text" name="name" class="search-item-name-input">
        </div>
        <div class="search-item">
          <p class="search-item-lbl">フリガナ</p>
          <input type="text" name="furigana" class="search-item-name-input">
        </div>
        <div class="search-item">
          <p class="search-item-lbl">メールアドレス</p>
          <input type="text" name="email" class="search-item-input">
        </div>
        <div class="search-item">
          <p class="search-item-lbl">電話番号</p>
          <input type="text" name="tel" class="search-item-input">
        </div>
      </div>
      <div class="search-item-right">
        <div class="search-item">
          <p class="search-item-lbl">郵便番号</p>
          <input type="text" name="postcode" class="search-item-input" oninput="value = value.replace(/[^0-9]+/i,'');" value="{{old('postcode')}}" maxlength="8">
        </div>
        <div class="search-item">
          <p class="search-item-lbl">住所</p>
          <input type="text" name="address" class="search-item-input">
        </div>
        <div class="search-item">
          <p class="search-item-lbl">生年月日</p>
          <input type="date" name="birthday_at_from" class="search-item-date-input">
          <label class="search-item-date-lbl">～</label>
          <input type="date" name="birthday_at_to" class="search-item-date-input">
        </div>
        <div class="search-item">
          <p class="search-item-lbl">性別</p>
          <div class="search-item-radio">
            <input type="radio" name="sex" id="mail" value="男" tabindex="1"><label for="mail" class="sex_lbl">男</label>
            <input type="radio" name="sex" id="femail" value="女"  tabindex="2"><label for="femail" class="sex_lbl">女</label>
          </div>
        </div>
        <div class="search-item">
          <p class="search-item-lbl">お問い合わせ内容</p>
          <input name="inquiry" class="search-item-input">
        </div>
      </div>
    </div>
    <div class="search-btn-wrapper">
      <button type="submit" class="search-btn">検索</button>
    </div>
  </form>
</div>
<div class="management-form">
  <h2 class="sub_ttl">顧客一覧</h2>
  <table class="management-table">
    <tr>
      <th>名前</th>
      <th>フリガナ</th>
      <th>メールアドレス</th>
      <th>郵便番号</th>
      <th>住所</th>
      <th>電話番号</th>
      <th>生年月日</th>
      <th>性別</th>
      <th>問い合わせ内容</th>
    </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->name}}
    </td>
    <td>
      {{$item->furigana}}
    </td>
    <td>
      {{$item->email}}
    </td>
    <td>
      {{$item->postcode}}
    </td>
    <td>
      {{$item->address}}
    </td>
    <td>
      {{$item->tel}}
    </td>
    <td>
      {{ $item->birthday->format('Y年m月d日') }}
    </td>
    <td>
      {{$item->sex}}
    </td>
    <td>
      {{$item->inquiry}}
    </td>
  </tr>
  @endforeach
</table>
  </table>
</div>
@endsection