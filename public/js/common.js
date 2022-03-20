document.addEventListener('DOMContentLoaded', function () {
  //姓
  let lastname = document.getElementById('lastname');
  lastname.oninput = function () {
    let error = document.getElementById('lastname-error');
    error.innerHTML = (this.value != '' && this.value.length > 10) ? '姓は10文字以内で入力してください' : '';
  }
  //名
  let firstname = document.getElementById('firstname');
  firstname.oninput = function () {
    let error = document.getElementsById('firstname-error');
    error.innerHTML = (this.value != '' && this.value.length > 10) ? '名は10文字以内で入力してください' : '';
  }
  //セイ
  let lastname_furigana = document.getElementById('lastname_furigana');
  lastname_furigana.oninput = function () {
    let error = document.getElementById('lastname_furigana-error');
    if (this.value != '' && this.value.match(/[^ァ-ヶー　]+$/)) {
      error.innerHTML = "セイは全角カタカナで入力してください";
    } else if (this.value != '' && this.value.length > 25) {
      error.innerHTML = 'セイは25文字以内で入力してください';
    } else {
      error.innerHTML = '';
    }
  }
  //メイ
  let firstname_furigana = document.getElementById('firstname_furigana');
  firstname_furigana.oninput = function () {
    let error = document.getElementById('firstname_furigana-error');
    if (this.value != '' && this.value.match(/[^ァ-ヶー　]+$/)) {
      error.innerHTML = "メイは全角カタカナで入力してください";
    } else if (this.value != '' && this.value.length > 25) {
      error.innerHTML = 'メイは25文字以内で入力してください';
    } else {
      error.innerHTML = '';
    }
  }
  //メールアドレス
  let email = document.getElementById('email');
  email.oninput = function () {
    let error = document.getElementById('email-error');
    error.innerHTML = (this.value != '' && !this.value.match(/.+@.+\..+/)) ? 'メールアドレスの形式で入力してください' : '';
  }
  //電話番号
  let tel = document.getElementById('tel');
  tel.oninput = function () {
    let error = document.getElementById('tel-error');
    error.innerHTML = (this.value != '' && (this.value.length < 10 || !this.value.length > 11)) ? '電話番号は10桁又は11桁で入力してください' : '';
  }
  //郵便番号
  let postcode = document.getElementById('postcode');
  postcode.oninput = function () {
    let error = document.getElementById('postcode-error');
    error.innerHTML = (this.value != '' && this.value.length != 7) ? '郵便番号は7桁で入力してください' : '';
  }
  //生年月日
  let birthday = document.getElementById('birthday');
  birthday.onchange = function () {
    console.log(this);
    // let error = document.getElementById('birthday-error');
    // error.innerHTML = (this.value != '' && this.value.length != 7) ? '郵便番号は7桁で入力してください' : '';
  }
  //お問い合わせ内容
  let inquiry = document.getElementById('inquiry');
  inquiry.oninput = function () {
    let error = document.getElementById('inquiry-error');
    error.innerHTML = (this.value != '' && this.value.length > 1000) ? 'お問い合わせ内容は1000文字以内で入力してください' : '';
  }
});