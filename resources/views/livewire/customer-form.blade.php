<form class="form" action="{{ route('confirm') }}" method="POST">
  @csrf
  <div>
    <div class="form-item">
      <p class="form-item-lbl"><span class="form-item-lbl-required">必須</span>お名前</p>
      <label class="form-item-name-lbl">姓</label>
      <input type="text" wire:model="lastname" class="form-item-name-input" placeholder="例：山田" >
  
      <label class="form-item-name-lbl">名</label>
      <input type="text" wire:model="firstname" class="form-item-name-input" placeholder="例：太郎" >
    </div>
      @error('lastname')
      <p class="error">{{ $message }}</p>
      @enderror
      @error('firstname')
      <p class="error">{{ $message }}</p>
      @enderror
  </div>
  <div>
    <div class="form-item">
      <p class="form-item-lbl">
        <span class="form-item-lbl-required">必須</span>フリガナ</p>
      <label class="form-item-name-lbl">セイ</label>
      <input type="text" wire:model="lastname_furigana" class="form-item-name-input" placeholder="例：ヤマダ" value="{{old('lastname_furigana')}}">
      <label class="form-item-name-lbl">メイ</label>
      <input type="text" wire:model="firstname_furigana" class="form-item-name-input" placeholder="例：タロウ" value="{{old('firstname_furigana')}}">
    </div>
    @error('lastname_furigana')
    <p class="error">{{ $message }}</p>
    @enderror
    @error('firstname_furigana')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
<div>
    <div class="form-item">
      <p class="form-item-lbl"><span class="form-item-lbl-required">必須</span>メールアドレス</p>
      <input type="email" wire:model="email" class="form-item-input" placeholder="例：yamada@example.com" value="{{old('email')}}">
    </div>
    @error('email')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div>
    <div class="form-item">
      <p class="form-item-lbl"><span class="form-item-lbl-required">必須</span>電話番号</p>
      <input type="text" wire:model="tel" class="form-item-input" placeholder="例：09012345678" value="{{old('tel')}}" oninput="value = value.replace(/[^0-9]+/i,'');" minlength="10" maxlength="11">
    </div>
    @error('tel')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div>
    <div class="form-item">
      <p class="form-item-lbl"><span class="form-item-lbl-required">必須</span>郵便番号</p>
      <input type="text" wire:model="postcode" class="form-item-input" placeholder="例：1010047" oninput="value = value.replace(/[^0-9]+/i,'');" value="{{old('postcode')}}" maxlength="7" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
    </div>
    @error('postcode')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div>
    <div class="form-item">
      <p class="form-item-lbl"><span class="form-item-lbl-required">必須</span>住所</p>
      <input type="text" wire-model="address" class="form-item-input" placeholder="例：東京都千代田区内神田１－１－１　内神田ハイツ４０１号" value="{{old('address')}}">
    </div>
    @error('address')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div>
    <div class="form-item">
      <p class="form-item-lbl"><span class="form-item-lbl-required">必須</span>生年月日</p>
      <input type="date" wire:model="birthday" class="form-item-input"  value="{{old('birthday')}}">
    </div>
    @error('birthday')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div>
    <div class="form-item">
      <p class="form-item-lbl"><span class="form-item-lbl-required">必須</span>性別</p>
      <div class="form-item-radio">
        <input type="radio" wire:model="sex" id="mail" value="男" {{ old('sex', '男')=='男' ? 'checked' : '' }}><label for="mail" class="sex_lbl">男</label>
        <input type="radio" wire:model="sex" id="femail" value="女" {{ old('sex') == '女' ? 'checked' : '' }}><label for="femail" class="sex_lbl">女</label>
      </div>
    </div>
    @error('sex')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <div>
    <div class="form-item">
      <p class="form-item-lbl"><span class="form-item-lbl-required">必須</span>お問い合わせ内容</p>
      <textarea wire:model="inquiry" class="form-item-textarea" placeholder="お問い合わせ内容をご入力ください">{{ old('inquiry') }}</textarea>
    </div>
    @error('inquiry')
    <p class="error">{{ $message }}</p>
    @enderror
  </div>
  <button type="submit" class="form-btn" wire:dirty.attr="disabled">入力内容確認</button>
</form>