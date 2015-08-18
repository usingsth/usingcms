<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="家具,顺德家具,木材,沙发" />
<meta name="description" content="顺德家具厂" />
<title>佛山市顺德区宝源家具实业公司</title>

<script language="javascript" src="js/asd.js"></script>
<!---<script language="javascript" src="js/qq.js"></script>---->
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="container">
	<div class="header">
    	<div class="headTop">
        	<div class="logo">
            	<a href="index.html"><img src="images/logo.gif" alt="佛山市顺德区宝源家具实业公司" title="佛山市顺德区宝源家具实业公司" /></a>
            </div>
			
			<?php  echo date('Y-m-d H:i:s',time()); ?>
            <div class="headRight">
            	<div class="tool" id="tool">
					<?php if(empty($_SESSION['username'])): ?>
					<form action="" method="post" id="loginForm">
						用户名:<input type="text" name="username" style="width:70px" />
						密码:<input type="password" name="password" style="width:70px" />
						验证码:<input type="text" name="image_vcode" style="width:50px" />
						<img src="index.php?c=site&a=vcode" id="image_vcode" />
						记住我:|<input type="checkbox" name="remeber" id="remeber" />
						<input type="submit" value="登陆" />
						<a href="index.php?a=register&c=user">注册</a>
					</form>
					<?php else: ?>
						<span>欢迎您,<?php echo $_SESSION['username']; ?></span>
						<a href="index.php?c=user&a=logout" >退出</a>
					<?php endif;?>
				<!--<a onmousedown="S.Common.ns_click("homepageSet","",{stattype:"set"});S.Evt.fire("page","homepageSet",{stattype:"set"});" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://120717.1207.dodiphp.cn/index.html');_s_dhp()" href="javascript:;">设为主页</a>|<a id="setf" onClick="fa(this)" href="javascript:void(0)" onmousedown="return ns_c({'fm':'behs','tab':'favorites','pos':0})">加入收藏夹</a>--></div>
				
				
				
               <ul class="nav">
                    <li class="navLeft"></li>
                    <li class="navCenter">
                    	<a href="index.php">公司简介</a>
                        <a href="product.html">产品展示</a>
                        <a href="index.php?a=index&c=news">新闻中心</a>
                        <a href="message.html">给我留言</a>
                        <a href="links.html">友情链接</a>
                        <a href="address.html">联系我们</a>
                        <a href="login.html" class="last">会员登录</a>
                    </li>
                    <li class="navRight"></li>
                </ul><!-- 避免多DIV症 -->
            </div>
        </div>
        <div class="banner"><img src="images/banna.jpg" /></div>
    </div>
    <div class="main">
    	<div class="mainLeft">
        	<img src="images/product.gif" /><!-- 隐式块级 -->
            <ul class="cate">
            	<li class="cateTop"></li>
                <li class="cateMid">
                	<a href="#">商务会议</a>
                    <a href="#">商务会议</a>
                    <a href="#">商务会议</a>
                    <a href="#">商务会议</a>
                </li>
                <li class="cateBtm"></li>
            </ul>
            <img src="images/search.gif" />
            <div class="search">
            <form>
            	<p><input type="text" name="keyword" size="15" /></p>
            	<p>
                	<select name="cate">
                		<option value="">请选择</option>
                    	<option value="">商务会议</option>
                    	<option value="">商务会议</option>
                	</select>
                </p>
                <p><input type="image" src="images/search_left.gif" /></p>
            </form>
            </div>
        </div>
			
<script>
$(function(){
	$("#image_vcode").click(function(){
		var num = Math.round(Math.random()*1000);
		$(this).attr('src','index.php?c=site&a=vcode&num='+num);
	});


	
	$("#loginForm").live('submit',function(){  
		//var username = $("#tool .username").attr('value');
		//var password = $("#tool .password").attr('value');
		//var remeber = $("#tool .remeber").attr('value');
		//var str = "username="+username+"&password="+password;
		var username = $("input[name='username']").val();
		var password = $("input[name='password']").val();
		if($("#remeber").is(":checked")){
			var remeber = 1;
		}else{
			var remeber = 0;
		}
		//alert(remeber);
		$.ajax({
			type:'post',
			url:'',
			data:{
				'username':username,
				'password':password,
				'remeber':remeber,
			},
			dataType:'json',
			success:function(json){
				if(json.username){
					l = '<span>欢迎您,'+json.username+'</span>'
					l += '<a href="index.php?c=user&a=logout" class="logout">退出</a>'
					$("#tool").html(l);
				}
				else{
					alert("用户名或密码错误");
					$("input[name='username']").val('');
					$("input[name='password']").val('');
					
					
				}
			},
		});	
		return false;
	});
});

// $(function(){
	// $("#tool .logout").live('click',function(){
		// var url = $(this).attr('href');
		// $.ajax({
			// type:'get',
			// url:url,
			// success:function(msg){
				// l = '<form action="" method="post" id="loginForm">'
				// l += '用户名:<input type="text" name="username" style="width:70px" />'
				// l += '密码:<input type="password" name="password" style="width:70px" />'
				// l += '记住我:|<input type="checkbox" name="remeber" id="remeber" />'
				// l += '<input type="submit" value="登陆" />'
				// l += '<a href="index.php?a=register&c=user">注册</a>'
				// l += '</form>'
				// $("#tool").html(l);
			// }
		// });
		// return false;
	// });
// });
</script>





