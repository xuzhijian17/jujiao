<?php if (!defined('THINK_PATH')) exit();?><table id="tab">
	<thead>
		<tr align="center" bgcolor="#799AE1">
			<td width="6%" align="center">编号</td>
			<td width="7%" align="center">类别名称</td>
			<td width="9%" align="center">标题</td>
			<td width="9%" align="center">作者</td>
			<td width="9%" align="center">来源</td>
			<td width="8%" align="center">点击率</td>
			<td width="8%" align="center">发表时间</td>
		</tr>
	</thead>
	<tbody id="showrecords"></tbody>
</table>

<div>
	<a href="javascript:void(0)" id="begin">Begin</a>&nbsp;&nbsp;
	<a href="javascript:void(0)" id="preblock">&lt;&lt;PreviousBlock</a>&nbsp;&nbsp;
	<a href="javascript:void(0)" id="pre">&lt;Previous</a>&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<div id="num" style="display: inline-block"></div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:void(0)" id="next">Next&gt;</a>&nbsp;&nbsp;
	<a href="javascript:void(0)" id="nextblock">NextBlock&gt;&gt;</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="javascript:void(0)" id="end">End</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<div style="display: inline-block">
		<p>跳转到:<input type="text" id="jump_num" size="5px" maxlength="1000" />页<input type="button" value="Go" id="jump_btn" /></p>
	</div>&nbsp;&nbsp;&nbsp;&nbsp;
	<div id="info" style="display: inline-block"></div>
</div>

<script type="text/javascript" src="__PUBLIC__/scripts/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
	var pubAjax = {
		    types: 'POST',
			url: '__ROOT__/Admin/Products/ajaxDo',
		    dataType: 'json',
			async: true,
			dynamicCreate: true
		}
</script>
<script type="text/javascript" src="__PUBLIC__/scripts/ajaxPaging.ini.js"></script>
<script type="text/javascript" src="__PUBLIC__/scripts/ajaxPaging.js"></script>
<script type="text/javascript">
	$(function(){

		myAjaxPaging();
	});
</script>