
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
              <label>新闻标题</label>
              <input class="text-input small-input" type="text" id="small-input" name="title" value="<?php echo $res['title']; ?>" />
              <br />
			</p>
            <p>
              <label>新闻内容</label>
              <textarea class="text-input textarea wysiwyg" id="textarea" name="content" cols="79" rows="15"><?php echo $res['content']; ?></textarea>
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
 