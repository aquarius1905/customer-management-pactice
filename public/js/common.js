document.addEventListener('DOMContentLoaded', function () {
  {//姓
    let lastname = document.getElementById('lastname');
    lastname.oninput = function () {
      let error = document.getElementById('lastname-error');
      error.innerHTML = '';
      if (this.value == '') {
        error.innerHTML = '姓は必須項目です';
      } else if (this.value.length > 10) {
        error.innerHTML = '姓は10文字以内で入力してください';
      }
    }
  }
  {//名
    let firstname = document.getElementById('firstname');
    firstname.oninput = function () {
      let error = document.getElementById('firstname-error');
      error.innerHTML = '';
      if (this.value == '') {
        error.innerHTML = '名は必須項目です';
      } else if (this.value.length > 10) {
        error.innerHTML = '名は10文字以内で入力してください';
      }
    }
  }
  {//セイ
    let lastname_furigana = document.getElementById('lastname_furigana');
    lastname_furigana.oninput = function () {
      let error = document.getElementById('lastname_furigana-error');
      error.innerHTML = '';
      if (this.value == '') {
        error.innerHTML = 'セイは必須項目です';
      } else if (this.value.match(/[^ァ-ヶー　]+$/)) {
        error.innerHTML = "セイは全角カタカナで入力してください";
      } else if (this.value.length > 25) {
        error.innerHTML = 'セイは25文字以内で入力してください';
      }
    }
  }
  {//メイ
    let firstname_furigana = document.getElementById('firstname_furigana');
    firstname_furigana.oninput = function () {
      let error = document.getElementById('firstname_furigana-error');
      error.innerHTML = '';
      if (this.value == '') {
        error.innerHTML = 'セイは必須項目です';
      } else if (this.value.match(/[^ァ-ヶー　]+$/)) {
        error.innerHTML = "セイは全角カタカナで入力してください";
      } else if (this.value.length > 25) {
        error.innerHTML = 'セイは25文字以内で入力してください';
      }
    }
  }
  {//メールアドレス
    let email = document.getElementById('email');
    email.oninput = function () {
      this.value = this.value.replace(/[^0-9a-z_@-]+$/,'');
      let error = document.getElementById('email-error');
      error.innerHTML = '';
      if (this.value == '') {
        error.innerHTML = 'メールアドレスは必須項目です';
      } else if (!this.value.match(/.+@.+\..+/)) {
        error.innerHTML = 'メールアドレスの形式で入力してください';
      }
    }
  }
  {//電話番号
    let tel = document.getElementById('tel');
    tel.oninput = function () {
      this.value = this.value.replace(/[^0-9]+/,'');
      let error = document.getElementById('tel-error');
      error.innerHTML = '';
      if (this.value == '') {
        error.innerHTML = '電話番号は必須項目です';
      } else if (this.value.length < 10 || !this.value.length > 11) {
        error.innerHTML = '電話番号は10桁、または11桁で入力してください';
      }
    }
  }
  {//郵便番号
    let postcode = document.getElementById('postcode');
    postcode.oninput = function () {
      this.value = this.value.replace(/[^0-9]+/,'');
      let error = document.getElementById('postcode-error');
      error.innerHTML = '';
      if (this.value == '') {
        error.innerHTML = '郵便番号は必須項目です';
      } else if (this.value.length != 7) {
        error.innerHTML = '郵便番号は7桁で入力してください';
      }
    }
  }
  {//住所
    let address = document.getElementById('address');
    address.oninput = function () {
      let error = document.getElementById('address-error');
      error.innerHTML = (this.value == '') ? '住所は必須項目です' : '';
    }
  }
  {//お問い合わせ内容
    let inquiry = document.getElementById('inquiry');
    inquiry.oninput = function () {
      let error = document.getElementById('inquiry-error');
      error.innerHTML = (this.value != '' && this.value.length > 1000) ? 'お問い合わせ内容は1000文字以内で入力してください' : '';
    }
  }
});

window.onload = function () {
  let today = new Date();
  let dd = today.getDate();
  let mm = today.getMonth() + 1;
  const yyyy = today.getFullYear();
  if(dd < 10) {
    dd ='0'+ dd
  } 
  if(mm < 10){
    mm ='0'+ mm
  } 

  today = yyyy + '-' + mm + '-' + dd;
  document.getElementById("birthday").setAttribute("max", today);
}
{
  function resetSearchCondition() {
    let name = document.getElementById('name');
    name.value = '';
    let furigana = document.getElementById('furigana');
    furigana.value = '';
    let tel = document.getElementById('tel');
    tel.value = '';
    let email = document.getElementById('email');
    email.value = '';
    let postcode = document.getElementById('postcode');
    postcode.value = '';
    let address = document.getElementById('address');
    address.value = '';
    let birthday_at_from = document.getElementById('birthday_at_from');
    birthday_at_from.value = '';
    let birthday_at_to = document.getElementById('birthday_at_to');
    birthday_at_to.value = '';
    let mail = document.getElementById('mail');
    mail.checked = false;
    let femail = document.getElementById('femail');
    femail.checked = false;
    let inquiry = document.getElementById('inquiry');
    inquiry.value = '';
  }
}