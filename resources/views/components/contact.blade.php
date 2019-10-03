      <!-- ▽▽▽ページコンテンツ▽▽▽ -->
      <div class="contents">
        <div class="contactBOX">

          <form action="/" name="search" method="get">
            <dl>
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

              <dt>お問合せ内容<span>必須</span></dt>
              <dd id="form_select">
                <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group1_1" class="checkbox01" /><label for="Group1_1" class="check_label">システム開発</label>
                <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group1_2" class="checkbox01" /><label for="Group1_2" class="check_label">WEBサイト構築</label>
                <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group1_3" class="checkbox01" /><label for="Group1_3" class="check_label">RPAサービス</label>
                <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group1_4" class="checkbox01" /><label for="Group1_4" class="check_label">サーバー構築</label>
                <input type="checkbox" name="CheckboxGroup2" value="チェックボックス" id="Group1_5" class="checkbox01" /><label for="Group1_5" class="check_label">その他</label>
              </dd>
              <dt>会社名<span>必須</span></dt>
              <dd><input type="text" name="name1" id="name1" class="inqTYPE01 error" maxlength="50" value="" placeholder="株式会社クラウドスミス" required>
                <p class="errorTXT">会社名を入力してください</p>
              </dd>
              <dt>URL</dt>
              <dd><input type="url" name="url" id="url" class="inqTYPE01" maxlength="50" value="" placeholder="cloud@〇〇〇.jp" required></dd>
              <dt>お名前<span>必須</span></dt>
              <dd><input type="text" name="name2" id="name2" class="inqTYPE01" maxlength="50" value="" placeholder="蔵人　スミス" required></dd>
              <dt>お名前(フリガナ)<span>必須</span></dt>
              <dd><input type="text" name="name3" id="name3" class="inqTYPE01" maxlength="50" value="" placeholder="クラウド　スミス" required></dd>
              <dt>メールアドレス<span>必須</span></dt>
              <dd><input type="email" name="mail" id="mail" class="inqTYPE01" maxlength="50" value="" placeholder="kuraudo@〇〇〇.jp" required></dd>
              <dt>メールアドレス(確認)<span>必須</span></dt>
              <dd><input type="text" name="mail2" id="mail2" class="inqTYPE01" maxlength="50" value="" placeholder="kuraudo@〇〇〇.jp" required></dd>
              <dt>電話番号<span>必須</span></dt>
              <dd><input type="tel" name="tel" id="tel" class="inqTYPE01" maxlength="50" value="" placeholder="0000-456-7890" required></dd>
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
              <dd><textarea name="request" id="request" class="inqTYPE01 mgb05" cols="40" rows="4"></textarea></dd>
            </dl>
            <p class="mgb15px">当社の<a href="../privacy-policy.html" class="animsition-link">「プライバシーポリシー」</a>に同意の上ご利用ください。同意していただける場合は下の[同意する]をクリックしてください。</p>
            <div class="position_radio">
              <input type="radio" name="radio1" value="1" onclick="" id="formDisagree" checked />
              <label for="formDisagree">&nbsp;同意しない</label>
              <input type="radio" name="radio1" value="0" onclick="" id="formAgree" />
              <label for="formAgree">&nbsp;同意する</label>
            </div>
          </form>

          <div class="inqBTN">
            <ul>
              <li><a href="#" class="inqBTN02">リセット</a></li>
              <li><a href="#" class="inqBTN01">確認画面へ</a></li>
            </ul>
          </div>

        </div>



      </div>
      <!-- △△△ページコンテンツ△△△ -->

