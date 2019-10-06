<html>
<head>
        <meta charset="utf-8">
        <title>Confirm</title>
</head>
<body>
        <h1>CONFIRM</h1>




    <!-- ▽▽▽ページコンテンツ▽▽▽ -->
    <div class="contents">
      <div class="contactBOX">
      <p class="infoBOX">入力内容をご確認ください。以下の内容で送信します。</p>

	<table>
	<tr>
	<td>お問い合わせ内容</td>
	<td>{{$CheckboxGroup2}}</td>
	</tr>
	<tr>
        <td>会社名</td>
        <td>{{$name1}}</td>
        </tr>
	<tr>
        <td>URL</td>
        <td>{{$url}}</td>
        </tr>
	<tr>
        <td>お名前</td>
        <td>{{$name2}}</td>
        </tr>
	<tr>
        <td>お名前（フリガナ）</td>
        <td>{{$name3}}</td>
        </tr>
	<tr>
        <td>メールアドレス</td>
        <td>{{$mail}}</td>
        </tr>
	<tr>
        <td>メールアドレス（確認）</td>
        <td>{{$mail_confirmation}}</td>
        </tr>
	<tr>
        <td>電話番号</td>
        <td>{{$tel}}</td>
        </tr>
	<tr>
        <td>弊社からのご連絡</td>
        <td>{{$renraku}}</td>
        </tr>
	<tr>
        <td>弊社を知ったきっかけ</td>
        <td>{{$kikkake}}</td>
        </tr>
	<tr>
        <td>お問い合わせ内容</td>
        <td>{!! nl2br(e($request)) !!}</td>
        </tr>
	</table>

	<form action="thanks" method="post">
	@csrf
	<input type="hidden" name="CheckboxGroup2" value="{{$CheckboxGroup2}}"></input>
	<input type="hidden" name="name1" value="{{$name1}}"></input>
	<input type="hidden" name="url" value="{{$url}}"></input>
        <input type="hidden" name="name2" value="{{$name2}}"></input>
        <input type="hidden" name="name3" value="{{$name3}}"></input>
        <input type="hidden" name="mail" value="{{$mail}}"></input>
        <input type="hidden" name="mail_confirmation" value="{{$mail_confirmation}}"></input>
        <input type="hidden" name="tel" value="{{$tel}}"></input>
        <input type="hidden" name="renraku" value="{{$renraku}}"></input>
        <input type="hidden" name="kikkake" value="{{$kikkake}}"></input>
        <input type="hidden" name="request" value="{{$request}}"></input>
	<button type="sdumit" name="action" value="back">戻る</button>
	<button type="sdumit" name="action" value="sent">送信</button>
	</form>
      </div>
    </div>
    <!-- △△△ページコンテンツ△△△ -->

    <footer class="section">
            <div class="footer_inner">
                    <h1>CONFIRM</h1>
                    <p class="copyright">Copyright 2018 © CLOUD SMITH,Inc.</p>
            </div>
    </footer>



    </body>
    </html>

