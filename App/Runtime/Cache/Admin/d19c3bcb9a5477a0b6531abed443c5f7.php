<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="__PUBLIC__/styles/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="__PUBLIC__/styles/admin.css" />
</head>
<body>
<h1>Admin Page</h1>

<nav id="menu">
	<ul>
		<li><a href="">Create</a></li>
		<li><a href="">Update</a></li>
		<li><a href="">Read</a></li>
		<li><a href="">Delete</a></li>
	</ul>
</nav>
<article id="warp">
	<table id="acticle_manager">
      	<thead>
      		<tr id="t_header">
      			<th id="id">ID</th>
      			<th id="title">Title</th>
      			<th id="category">Category</th>
      			<th id="browser">Browser</th>
      			<th id="date">Date</th>
      		</tr>
      	</thead>

	    <tbody>
	    	<?php if(is_array($acticles)): $i = 0; $__LIST__ = $acticles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$acticle): $mod = ($i % 2 );++$i;?><tr class="t_content">
	    		<td class="id"><input type="checkbox" name="id" value="1" />&nbsp;<span class="num"><?php echo ($acticle['id']); ?></span></td>
	    		<td class="title"><a href=""><?php echo ($acticle['title']); ?></a></td>
	    		<td class="category"><a href=""><?php echo ($acticle['category']); ?></a></td>
	    		<td class="browser"><a href=""><?php echo ($acticle['browser']); ?></a></td>
	    		<td class="date"><a href=""><?php echo ($acticle['date']); ?></a></td>
	    	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	    </tbody>
	</table>
</article>
</body>
</html>