<?php if(!defined("ALLOW_ACCESS"))exit("not access");?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>数据库测试</title>
</head>
<body>
<table width="100%" border="1">
	<tr>
		<th>名称</th>
		<th>创建时间</th>
	</tr>
	<?php  foreach ( $list as $item) { ?> 
	<tr>
		<td><?php  echo $item['sample_name'];  ?></td>
		<td><?php  echo $item['sample_createtime'];  ?></td>
	</tr>
	<?php  }   ?>
</table>
<br />
<br />
<form action='?act=do_add' method="post">
	<div>
		<label>名称</label>
		<input name="sample_name" value="sample">
	</div>
	<div>
		<input type="submit" value="新增">
	</div>
</form>
</body>
</html>