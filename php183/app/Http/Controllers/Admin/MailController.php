<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    //发送邮件

	public function send()
	{
		// \Mail::raw('这是一封文本邮件',function($message){

		// 	$message->to('1977315055@qq.com');
		// 	$message->subject('这是邮件的主题');
		// });

		//带有模板的邮件

		\Mail::send('mails.test',[],function($message){
			$message->to('1977315055@qq.com');
			$message->subject('这是邮件的主题');
		});


	}

}
