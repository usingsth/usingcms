
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
			<input class="text-input small-input" type="hidden" id="small-input" name="id" value="0" />
            <p>
              <label>新闻标题</label>
              <input class="text-input small-input" type="text" name="name" />
              <br />
			</p>
			
			
            <p id="cate_p">
              <label>父级id</label>
              <input class="text-input small-input" type="text" name="pid" value="0" id="hidden_input"/>
              <select class="small-input" id="pid0">
				<option value="0" status="0">顶级</option>
				<?php foreach($res as $k=>$v): ?>
                <option status="1" value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
				<?php endforeach; ?>
              </select>
            </p>
			
			
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
	$("#cate_p select").live('change',function(){
		var pid = $(this).val();
		$("#hidden_input").val(pid);
		var status = $(this).children("option:selected").attr('status');
		var num = $(this).attr('id').substr(3);
		var next_num = Number(num)+1;
		$.ajax({
			type:'get',
			url:'index.php?a=next&c=category&admin=1&pid='+pid,
			dataType:'json',
			success:function(msg){
				var temp_num = Number(num)+1;
				while($("#pid"+temp_num).length != 0){
					$("#pid"+temp_num).remove();
					temp_num++;
				}
				if(msg.length > 0 && status !=0 ){
				l = '';
				l += '<select name="pid" class="small-input" id="pid'+next_num+'">';
				l += '<option status="0" value="'+pid+'">同级</option>';
				for(i=0;i<msg.length;i++){
				l += '<option status="1"value="'+msg[i].id+'">'+msg[i].name+'</option>';
				}
				l += '</select>';
				$("#cate_p").append(l);}
			}
		});
	});
});



</script>
 