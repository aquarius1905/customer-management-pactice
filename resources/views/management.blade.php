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
    margin-bottom: 50px;
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
  .search-item-label {
      width: 60%;
      font-weight: bold;
      font-size: 18px;
      color: #555;
  }
  .search-item-input {
    border: 1px solid #ddd;
    border-radius: 6px;
    margin-left: 40px;
    padding: 0 10px;
    height: 40px;
    background: #eaedf2;
    font-size: 18px;
    width: 100%;
  }
  .search-item-radio {
      width: 100%;
      margin-left: 40px;
      font-size: 18px;
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
.management-table {
  width: 90%;
  margin: 0 auto;
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

/* 偶数行　１行ごとの色変えが不要なら削除 */
.management-table tr:nth-child(2n) td  {
  background: #eee;
}
</style>

@section('content')
<div class="search">
  <h2 class="sub_ttl">顧客検索</h2>
  <form class="search-form" action="{{ route('confirm') }}" method="get">
    @csrf
    <div class="search-item-wrapper">
      <div class="search-item-left">
        <div class="search-item">
          <p class="search-item-label">名前</p>
          <input type="text" name="name" class="search-item-input">
        </div>
        <div class="search-item">
          <p class="search-item-label">フリガナ</p>
          <input type="text" name="furigana" class="search-item-input">
        </div>
        <div class="search-item">
          <p class="search-item-label">電話番号</p>
          <input type="text" name="tel" class="search-item-input">
        </div>
        <div class="search-item">
          <p class="search-item-label">メールアドレス</p>
          <input type="email" name="email" class="search-item-input">
        </div>
      </div>
      <div class="search-item-right">
        <div class="search-item">
          <p class="search-item-label">郵便番号</p>
          <input type="text" name="postcode" class="search-item-input">
        </div>
        <div class="search-item">
          <p class="search-item-label">住所</p>
          <input type="text" name="address" class="search-item-input">
        </div>
        <div class="search-item">
          <p class="search-item-label">生年月日</p>
          <input type="date" name="birthday" class="search-item-input">
        </div>
        <div class="search-item">
          <p class="search-item-label">性別</p>
          <div class="search-item-radio">
            <input type="radio" name="sex" id="mail" value="男"><label for="mail" class="sex_lbl">男</label>
            <input type="radio" name="sex" id="femail" value="女"><label for="femail" class="sex_lbl">女</label>
          </div>
        </div>
        <div class="search-item">
          <p class="search-item-label">お問い合わせ内容</p>
          <input name="inquiry" class="search-item-input">
        </div>
      </div>
    </div>
    <button type="submit" class="search-btn">検索</button>
  </form>
</div>
<div class="management_form">
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