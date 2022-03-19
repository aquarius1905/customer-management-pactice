<!DOCTYPE html>
<html lang="ja">
<head>
    @livewireStyles
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>顧客管理システム</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<style>
  .ttl {
    background-color: #006eb0;
    font-size: 36px;
    text-align: center;
    margin: 0 auto 40px;
    color: #fff;
    padding: 20px 0;
  }
  .form {
      width: 60%;
      margin: 20px auto;
  }
  .form-item {
      border-top: 1px solid #ddd;
      padding: 24px 0;
      width: 100%;
      display: flex;
      align-items: center;
  }
  .form-item-lbl {
      width: 90%;
      font-weight: bold;
      font-size: 18px;
      color: #555;
  }
  .form-item-name-lbl {
      width: 10%;
      margin-left: 20px;
      font-weight: bold;
      font-size: 18px;
      color: #555;
  }
  .form-item-lbl-required {
      border-radius: 6px;
      margin-right: 20px;
      padding: 8px 0;
      width: 48px;
      display: inline-block;
      text-align: center;
      background: #006eb0;
      color: #fff;
      font-size: 16px;
  }
  .form-item-input {
      border: 1px solid #ddd;
      border-radius: 6px;
      margin-left: 30px;
      padding: 0 10px;
      height: 48px;
      width: 100%;
      background: #eaedf2;
      font-size: 18px;
  }
  .form-item-name-input {
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 0 10px;
      height: 48px;
      width: 50%;
      background: #eaedf2;
      font-size: 18px;
  }
  .form-item-radio {
      width: 100%;
      font-size: 18px;
  }
  .sex_lbl {
      display: inline-block;
      margin-right: 30px;
  }
  .form-item-textarea {
      border: 1px solid #ddd;
      border-radius: 6px;
      margin-left: 40px;
      padding: 0 10px;
      height: 200px;
      width: 100%;
      background: #eaedf2;
      font-size: 18px;
      resize: none;
  }
  .form-btn,
  .modify-btn
   {
      border-radius: 6px;
      margin: 32px auto 0;
      padding: 20px 0;
      width: 250px;
      display: block;
      background: #006eb0;
      color: #fff;
      font-weight: bold;
      font-size: 20px;
      border: none;
      cursor: pointer;
  }
  .error {
      color: tomato;
      font-weight: bold;
      font-size: 16px;
      text-align: left;
      margin-bottom: 10px;
  }
  .btn-wrapper {
      display: flex;
      margin: 50px auto 0;
      width: 60%;
      text-align: center;
  }
</style>
<body>
  @livewireScripts
  <h1 class="ttl">@yield('title')</h1>
  <div class="content">
  @yield('content')
  </div>
</body>
</html>