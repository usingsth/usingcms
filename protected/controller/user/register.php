<?php
require MODEL.'phpmailer/class.phpmailer.php';
if(!empty($_POST)){	
	$_POST['password'] = md5($_POST['password']);	
	$res = insert('user',$_POST);
	if(!empty($res)){
		//header('Location:'.ROOT.'index.php');
		
		
		$mail=new PHPMailer();
		//邮件正文内容，提取html文件为其内容
		//$body= $mail->getFile('test/contents.html');
		//$body= eregi_replace("[\]",'',$body);
		$body="邮件正文内容";
		$mail->IsSMTP();
		// 必填，SMTP服务器是否需要验证，true为需要，false为不需要
		$mail->SMTPAuth   = true;                  
		$mail->Host       = "smtp.qq.com";      //必填，设置SMTP服务器
		$mail->Port       = 25;                   // 设置端口
		// 必填，开通SMTP服务的邮箱；任意一个126邮箱均可
		$mail->Username   = "804064029@qq.com";  
		$mail->Password   = "qa842100";            //必填， 以上邮箱对应的密码
		$mail->From       = "804064029@qq.com";    //必填，发件人Email
		$mail->FromName   = "cms";              //必填，发件人昵称或姓名
		$mail->Subject    = "lalala";       //必填，邮件标题（主题）
		//可选，纯文本形势下用户看到的内容
		$mail->AltBody    = "This is the body when user views in plain text format"; 
		$mail->WordWrap   = 50; // 自动换行的字数
		$mail->MsgHTML($body);
		$mail->AddReplyTo("804064029@qq.com","cms");//回复邮箱地址
		//$mail->AddAttachment("/path/to/file.zip");             // 添加附件,注意路径
		//$mail->AddAttachment(“/path/to/image.jpg”, “new.jpg”); // 添加附件
		//收件人地址。参数一：收信人的邮箱地址，可添加多个。参数二：收件人称呼
		$mail->AddAddress("804064029@qq.com","First Last"); 
		$mail->IsHTML(true); // 是否以HTML形式发送，如果不是，请删除此行
		$mail->SMTPDebug  = 2;  
		$mail->Send();
		
	}	
	else{
		die('修改失败');
	}
}


view(array(),'');