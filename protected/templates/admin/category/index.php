   <div class="content-box">
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>Content box</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1" class="default-tab">Table</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
          <!-- This is the target div. id must match the href of this div's tab -->
          <div class="notification attention png_bg"> <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
            <div> This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross. </div>
          </div>
          <table>
            <thead>
              <tr>
                <th>
                  <input class="check-all" type="checkbox" />
                </th>
                <th>id</th>
                <th>新闻标题</th>
				<th>新闻内容</th>
                <th>发表时间</th>
                <th>操作</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="6">
                  <div class="bulk-actions align-left">
                    <select name="dropdown">
                      <option value="option1">Choose an action...</option>
                      <option value="option2">Edit</option>
                      <option value="option3">Delete</option>
                    </select>
                    <a class="button" href="#">Apply to selected</a> </div>
                  <div class="pagination" id="page_btn"> 
				  
				  <?php //echo $page; ?>
				  
				  <form action="" method="get">
				  <input type="text" style="width:20px" name="p" />
				  <input type="submit" value="跳转" />
				  </form>
				  <!--<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a> <a href="index.php?p=1" class="number" title="1">1</a> <a href="index.php?p=2" class="number" title="2">2</a> <a href="index.php?p=3" class="number current" title="3">3</a> <a href="index.php?p=4" class="number" title="4">4</a> <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>-->
				  </div>
                  <!-- End .pagination -->
                  <div class="clear"></div>
                </td>
              </tr>
            </tfoot>
            <tbody id="list">
			<?php foreach($res as $k=>$v): ?>
              <tr>
                <td>
                  <input type="checkbox" />
                </td>
                <td><?php echo $v['id'];?></td>
                <td><?php echo $v['str_name']; ?></td>
				<td><?php echo $v['pid']; ?></td>
                
                <td>
                  <!-- Icons -->
                  <a href="index.php?c=category&a=update&admin=1&id=<?php echo $v['id'];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a> 
				  <a href="index.php?c=category&a=delete&admin=1&id=<?php echo $v['id'];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> </td>
              </tr>
			  <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- End #tab1 -->
		

		
		
		
		
