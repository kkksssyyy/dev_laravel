      <!-- ▽▽▽ページコンテンツ▽▽▽ -->
      <div class="contents">
        <div class="contactBOX">

	@if (count($errors) > 0)
	<p> 入力に問題があります。確認してください。 </p>
	@endif
          <form action="/contact/confirm" method="get">
            {{ csrf_field() }}
	     <dl>
		@if ($errors->has('jobCategory'))
			<p> {{$errors->first('jobCategory')}} </p>
		@endif
              <dt>ご希望の職種<span>必須</span></dt>
              <dd class="form-select">
                <select name="jobCategory" required="required">
                  <option value="">選択してください</option>
                  <option value="1">マネージャー、フルスタックエンジニア</option>
                  <option value="2">オープン系システムエンジニア、プログラマー</option>
                  <option value="3">WEB系エンジニア、プログラマー</option>
                  <option value="4">フロントエンドエンジニア、デザイナー</option>
                </select>
              </dd>
		@if ($errors->has('CheckboxGroup2'))
                        <p> {{$errors->first('CheckboxGroup2')}} </p>
                @endif
              <dt>お問合せ内容<span>必須</span></dt>
              <dd id="form_select">
                <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group1_1" class="checkbox01" /><label for="Group1_1" class="check_label">システム開発</label>
                <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group1_2" class="checkbox01" /><label for="Group1_2" class="check_label">WEBサイト構築</label>
                <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group1_3" class="checkbox01" /><label for="Group1_3" class="check_label">RPAサービス</label>
                <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group1_4" class="checkbox01" /><label for="Group1_4" class="check_label">サーバー構築</label>
                <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group1_5" class="checkbox01" /><label for="Group1_5" class="check_label">その他</label>
              </dd>
              <dt>会社名<span>必須</span></dt>
		@if ($errors->has('name1'))
			<p> {{$errors->first('name1')}} </p>
		@endif
              <dd><input type="text" name="name1" value="{{old('name1')}}">
              </dd>
              <dt>URL</dt>
              <dd><input type="url" name="url" value="{{old('url')}}"></dd>
		@if ($errors->has('name2'))
                        <p> {{$errors->first('name2')}} </p>
                @endif
              <dt>お名前<span>必須</span></dt>
              <dd><input type="text" name="name2" value="{{old('name2')}}"></dd>
		@if ($errors->has('name3'))
                        <p> {{$errors->first('name3')}} </p>
                @endif
              <dt>お名前(フリガナ)<span>必須</span></dt>
              <dd><input type="text" name="name3" value="{{old('name3')}}"></dd>
		@if ($errors->has('mail'))
                        <p> {{$errors->first('mail')}} </p>
                @endif
              <dt>メールアドレス<span>必須</span></dt>
              <dd><input type="email" name="mail" value="{{old('mail')}}"></dd>
		@if ($errors->has('mail2'))
                        <p> {{$errors->first('mail2')}} </p>
                @endif
              <dt>メールアドレス(確認)<span>必須</span></dt>
              <dd><input type="text" name="mail2" value="{{old('mail2')}}"></dd>
		@if ($errors->has('tel'))
                        <p> {{$errors->first('tel')}} </p>
                @endif
              <dt>電話番号<span>必須</span></dt>
              <dd><input type="tel" name="tel" value="{{old('tel')}}"></dd>
		@if ($errors->has('renraku'))
                        <p> {{$errors->first('renraku')}} </p>
                @endif
              <dt>弊社からのご連絡<span>必須</span></dt>
              <dd class="checkboxDD">
                <label><input type="checkbox" name="renraku" value="1">&nbsp;お電話でのご連絡</label><br>
                <label><input type="checkbox" name="renraku" value="2">&nbsp;メールでのご連絡</label>
              </dd>
              <dt>弊社を知ったきっかけ</dt>
              <dd class="checkboxDD">
                <label><input type="checkbox" name="kikkake" value="1">&nbsp;WEB検索</label><br>
                <label><input type="checkbox" name="kikkake" value="2">&nbsp;ブログ記事</label><br>
                <label><input type="checkbox" name="kikkake" value="2">&nbsp;ご紹介</label><br>
                <label><input type="checkbox" name="kikkake" value="2">&nbsp;その他</label>
              </dd>
              <dt>お問合せ内容</dt>
              <dd><textarea name="request" value="{{old('request')}}"></textarea></dd>
            </dl>
            <p>当社の「プライバシーポリシー」に同意の上ご利用ください。同意していただける場合は下の[同意する]をクリックしてください。</p>
            <div class="position_radio">
              <input type="radio" name="radio1" value="1" onclick="" id="formDisagree" checked />
              <label for="formDisagree">&nbsp;同意しない</label>
              <input type="radio" name="radio1" value="0" onclick="" id="formAgree" />
              <label for="formAgree">&nbsp;同意する</label>
            </div>
		<input type="submit" name="" value="送信">
          </form>

        </div>



      </div>
      <!-- △△△ページコンテンツ△△△ -->
