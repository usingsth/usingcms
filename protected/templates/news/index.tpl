	<{include file="header.tpl"}>
	<table>
            <tfoot>
              <tr>
                <td colspan="6">
                  <div class="bulk-actions align-left">
                  <div class="pagination" id="page_btn"> 
				  <{$page}>
				  </div>
                  <!-- End .pagination -->
                  <div class="clear"></div>
                </td>
              </tr>
            </tfoot>
            <tbody id="list">
			<{foreach from=$res key=k item=v}>
              <tr>
                <td><{$v.id}></td><td>&nbsp;</td>
				<td><{$v.title}></td><td>&nbsp;</td>
				<td><{$v.mtime|date_format:"%Y-%m-%d"}></td><td>&nbsp;</td>
              </tr><br />
			  <{/foreach}>
            </tbody>
          </table>
<{include file="footer.tpl"}>