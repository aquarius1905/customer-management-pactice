const form = document.getElementById('form');
console.log(form);

function update(e) {
  console.log(e);
  let type = e.target.type;
  let validationMessage = e.target.validationMessage;
  console.log(type, validationMessage);
}

// 親要素(form)にイベントをつけると子要素のイベントが拾える
form.addEventListener('change', function (e) {
  update(e);
});
form.addEventListener('input', function (e) {
  update(e);
});