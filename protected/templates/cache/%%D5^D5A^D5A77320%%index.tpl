180
a:4:{s:8:"template";a:3:{s:14:"site/index.tpl";b:1;s:10:"header.tpl";b:1;s:10:"footer.tpl";b:1;}s:9:"timestamp";i:1392964370;s:7:"expires";i:1392964670;s:13:"cache_serials";a:0:{}}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
			
			
            <div class="headRight">
            	<div class="tool" id="tool">
										<form action="" method="post" id="loginForm">
						用户名:<input type="text" name="username" style="width:70px" />
						密码:<input type="password" name="password" style="width:70px" />
						验证码:<input type="text" name="image_vcode" style="width:50px" />
						<img src="index.php?c=site&a=vcode" id="image_vcode" />
						记住我:|<input type="checkbox" name="remeber" id="remeber" />
						<input type="submit" value="登陆" />
						<a href="index.php?a=register&c=user">注册</a>
					</form>
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




<div class="mainRight">
	<div class="rightTOP"></div>
	<div class="rightMid">
		<div class="breadCrumb">您现在的位置是：公司简介</div>
		<div class="con">
			<p>佛山市顺德区宝源家具实业公司，位于中国最大的家具生产基地和材料之都的龙江镇。具有很好的地缘优势，临近中国最大的家具批发市场乐从国际家具城。北靠中国大城市广州，南靠经济特区深圳和特别行政区香港。 </p>
			<p>我司专业生产各款的高中底档沙发，以东方传统雕刻工艺为基础，与欧洲同行企业进行长期的技术交流。从中涉取西方最新设计意念和精华，再配合东方雕刻工艺精髓神韵，出产的沙发以结构合理、款式新颖，工艺精细   极具艺术创意而著称。</p>
			<p>本公司创建于上世界八十年代末，经过二十多年发展，由原来的家族式经营发展到现在的具有一定生产规模，拥有现代化办公楼及产品展厅的标准化工业厂房。培养了一批懂管理，敬业的员工队伍。我们集生产，批发，零售于一体，采用现代化先进的生产设备，根据各方需求，致力为我们的客户打造满意的产品。我司销售客户网点遍及中国的华南，华中，华北，中原，西南等大中城市及珠三角范围内，包括台湾，澳门，香港等城市。并远销澳洲，南美国家，东南亚国家和中东地区国家。长期以来深受广大客户的青睐和好评。欢迎广大新老客户来涵来电，或亲临指导。</p>
			<p>我们不甘于停留在昨天的骄傲。今天我们宝源人放眼未来，并一如既往的通过优质的原料，先进的设备，科学的管理，丰富的行业经验和技术娴熟的主人公自豪感，坚持“我们不能最好，只有更好”“客户至上，诚信求实”的精神，再创宝源明天的辉煌。</p>
			<p>联系地址：中国广东省佛山市顺德区龙江镇苏溪工业区</p>
			<p>联系电话：+86-757-23398268</p>
			<p>传真：+86-757-23224088</p>
		</div>
	</div>
	<div class="rightBtm"></div>
</div>
     <div class="clear"></div>    
    </div>
    <ul class="footer">
    	<li></li>
        <li class="footCen">版权所有&copy;佛山市顺德区宝源家具实业有限公司&nbsp;&nbsp;技术支持QQ:463022243多迪网络科技</li>
        <li class="footRig"></li>
    </ul>
<!--    1、加快显示速度
    2、提高负载承受能力
    3、保证特效的完整性
    <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>-->
</div>
</body>
</html>