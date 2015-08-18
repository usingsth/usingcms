
    <div class="content-box">
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>Content box</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab2"  class="default-tab">Forms</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">
        <div class="tab-content  default-tab" id="tab2">
          <form action="" method="post">
            <fieldset>
            <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
			<input class="text-input small-input" type="hidden" id="small-input" name="id" value="<?php echo $res['id']; ?>" />
           <p>
              <label>权限组</label>
              <input class="text-input small-input" type="text" id="small-input" name="name" value="<?php echo $res['name']; ?>" />
              <br />
			</p>
            <p id="checkbox">
              <label>权限名称</label>
              <?php $i=1;foreach($xml->mhead as $key=>$val): ?>
				<input type="checkbox" name="modeid[]" <?php if(in_array($val->name->attributes()->id,$res['modeid'])): ?>checked="checked"<?php endif ?> value="<?php echo $val->name->attributes()->id; ?>" id="level<?php echo $i  ?>" ><b><?php echo $val->name ?></b><br />
				<?php foreach($val->action as $k=>$v): ?>
					<input type="checkbox" name="modeid[]" <?php if(in_array($v->name->attributes()->id,$res['modeid'])): ?>checked="checked"<?php endif ?> value="<?php echo $v->name->attributes()->id; ?>" class="level<?php echo $i  ?>"><?php echo $v->name ?>
				<?php endforeach ?><br />
			  <?php $i++;endforeach ?>
            </p>
			<a href="javascript:void(0);" id="check_all">全选</a>&nbsp;&nbsp;
			<a href="javascript:void(0);" id="check_del">全不选</a>&nbsp;&nbsp;
			<a href="javascript:void(0);" id="check_other">反选</a>
            <p>
              <input class="button" type="submit" value="Submit" />
            </p>
            </fieldset>
            <div class="clear"></div>
            <!-- End .clear -->
          </form>
        </div>
        <!-- End #tab2 -->
      </div>
      <!-- End .content-box-content -->
    </div>
    <!-- End .content-box -->
	
<script>

$(function(){
	$("#check_all").click(function(){
		$("#checkbox").find('input[name="modeid[]"]').attr('checked',true);
	});
	$("#check_del").click(function(){
		$("#checkbox").find('input[name="modeid[]"]').attr('checked',false);
	});
	$("#check_other").click(function(){
		var chk = $("#checkbox").find('input[name="modeid[]"]');
		//alert (chk.length);
		for(var i =0;i<=chk.length;i++){
			if(chk.eq(i).is(":checked")){
				chk.eq(i).attr('checked',false);
			}
			else{
				chk.eq(i).attr('checked',true);
			}
		}
	});
	
	var len = $("#checkbox input[id^=level]").length;
	for(var i=1;i<=len;i++){
		$(".level"+i).attr("temp",i);
		$(".level"+i).click(function(){
			var temp = $(this).attr("temp");
			if($(".level"+temp).is(":checked")){
				$("#level"+temp).attr('checked',true);
			}
			else{
				$("#level"+temp).attr('checked',false);
			}
		});
	}
	
	for(var i=1;i<=len;i++){
		$("#level"+i).attr("temp",i);
		$("#level"+i).click(function(){
			var temp = $(this).attr("temp");
			if($("#level"+temp).is(":checked")){
				$(".level"+temp).attr('checked',true);
			}
			else{
				$(".level"+temp).attr('checked',false);
			}
		});
	}
	
		
		
		
		
});
	
	




</script>
	
	
	
 