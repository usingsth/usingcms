<div class="mainRight">
	<div class="rightTOP"></div>
	<div class="rightMid">
		<div class="breadCrumb">您现在的位置是：退出界面</div>
		<div class="con">
			<p>还有<font id="number_time" style="color:red">2</font>秒退出</p><br/>
			<span><a href="index.php">直接退出</a></span>
			
		</div>
	</div>
	<div class="rightBtm"></div>
</div>
<script>
	$(function(){
		var i = 2;
		setInterval(function(){
			i--;
			if(i<=0){
				window.location.href = "http://localhost/cms/index.php";
			}
			$("#number_time").html(i);
		},1000);
	})
</script>