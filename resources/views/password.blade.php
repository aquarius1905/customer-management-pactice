<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>パスワード</title>
</head>
<style>
.lbl {
  display: block;
}
.password {
  width: 250px;
}
.error {
  font-weight: bold;
  color: tomato;
}
</style>
<body>
  <div class="password-wrapper">
    <label for="password" class="lbl">パスワード：半角英数字と記号を全て含む、8文字以上16文字以内</label>
    <input type="password" id="password" class="password">
    <p class="error" id="error"></p>
  </div>
</body>
<script>
  let password = document.getElementById('password');
    password.oninput = function () {
      let error = document.getElementById('error');
      error.innerHTML = '';
      if(this.value == '') {
        error.innerHTML = 'パスワードは必須項目です';
      } else if(!this.value.match(/(?=.*[A-Z])(?=.*[!.?/-])(?=.*[a-z])(?=.*[0-9])[a-zA-Z0-9!.?/-]{8,16}$/)) {
        error.innerHTML = 'パスワードは半角英数字と記号を全て含み、かつ8文字以上16字以内で入力してください';
      }
    }
</script>
</html>