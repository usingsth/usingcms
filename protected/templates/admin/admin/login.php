<!--action表示提交到何处，action没有值表示提交到本页面
method表示以何种方式提交（post,get）
post:隐藏参数的方式提交
get:参数就在url中，一般涉及到密码之类不会使用
form表单提交的其实是含有name属性的value值,name属性的值与数据库字段名一致

?:在地址栏中第一个问号表示参数的开始
&：在地址栏中表示参数与参数之间的连接
-->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simpla Admin | Sign In by www.865171.cn</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="resources/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
  <div id="login-top">
    <h1>Simpla Admin</h1>
    <!-- Logo (221px width) -->
    <a href="http://www.865171.cn"><img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /></a> </div>
  <!-- End #logn-top -->
  <div id="login-content">
    <form action=""  method="post">
      <div class="notification information png_bg">
        <div> Just click "Sign In". No password needed. </div>
      </div>
      <p>
        <label>用户名:</label>
        <input class="text-input" type="text"  name="username" />
      </p>
      <div class="clear"></div>
      <p>
        <label>密 码:</label>
        <input class="text-input" type="password"  name="password"  />
      </p>
      <div class="clear"></div>
      <p id="remember-password">
        <input type="checkbox" />
        Remember me </p>
      <div class="clear"></div>
      <p>
        <input class="button" type="submit" value="登陆" />
      </p>
    </form>
  </div>
  <!-- End #login-content -->
</div>
<!-- End #login-wrapper -->
</body>
</html>
