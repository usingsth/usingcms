
	<table>
            <tfoot>
              <tr>
                <td colspan="6">
                  <div class="bulk-actions align-left">
                  <div class="pagination" id="page_btn"> 
				  <?php echo $page; ?>
				  </div>
                  <!-- End .pagination -->
                  <div class="clear"></div>
                </td>
              </tr>
            </tfoot>
            <tbody id="list">
			<?php foreach($res as $k=>$v): ?>
              <tr>
                <td><?php echo $v['id'] ;?></td><td>&nbsp;</td>
				<td><?php echo $v['title'] ;?></td><td>&nbsp;</td>
				<td><?php echo $v['mtime'] ;?></td> 
              </tr><br />
			  <?php endforeach; ?>
            </tbody>
          </table>
       
