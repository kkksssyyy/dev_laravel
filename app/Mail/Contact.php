<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;
	
	// 引数で受け取る変数
	protected $content;

	// コンストラクタ設定
    public function __construct($content)

    {
        //引数で受け取ったデータを変数にセット
	$this->content = $content;
    }

    public function build()
    {
        return $this

		// 固定の内容やアドレスに送る場合
//		->from('example@example.com') // 送信元
//		->subject('テスト送信') // メールタイトル
//		->view('emails.test'); // メール本文のテンプレートとなるviewを設定
		//->view('emails.test')は/resources/views/配下のパスを.区切りで
		//表記する規則になっています。


		// 変数を受け取る場合
		// コントローラでも設定必要
		->from('hoge@exapmle.com') // 送信元
		->subject('[クラウドスミス]お問い合わせ受付完了のお知らせ') // メールタイトル
		->view('emails.test') // メール本文のテンプレート
		->with(['content' => $this->content]);  // withでセットしたデータをviewへ渡す



    }
}

class Thanks extends Mailable
{
    use Queueable, SerializesModels;

        // 引数で受け取る変数
        protected $content;

        // コンストラクタ設定
    public function __construct($content)

    {
        //引数で受け取ったデータを変数にセット
        $this->content = $content;
    }

    public function build()
    {
        return $this

                // 固定の内容やアドレスに送る場合
              ->from('example@example.com') // 送信元
              ->subject('[クラウドスミス]ご応募頂きありがとうございました') // メールタイトル
              ->view('emails.test2'); // メール本文のテンプレートとなるviewを設定
                //->view('emails.test')は/resources/views/配下のパスを.区切りで
                //表記する規則になっています。


                // 変数を受け取る場合
                // コントローラでも設定必要
//                ->from('hoge@exapmle.com') // 送信元
//                ->subject('[クラウドスミス]お問い合わせ受付完了のお知らせ') // メールタイトル
//                ->view('emails.test') // メール本文のテンプレート
//                ->with(['content' => $this->content]);  // withでセットしたデータをviewへ渡す



    }
}

