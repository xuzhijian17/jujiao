<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />

		<title>Admin Login</title>

		<link rel="stylesheet" href="__PUBLIC__/styles/bootstrap/css/bootstrap.min.css" />
	</head>

	<body>
		<header class="container">
			<h1>Admin Login</h1>
		</header>

		<div class="container">
		<!--data-required="true"-->
			<form id="form" action="__ROOT__/Admin/Login/verify" method="POST">
				<div class="control-group input-append">
					<input type="text" name="name" id="name" form="form" data-required data-pattern="^[a-z0-9_-]{3,16}$" />

					<label for="name" class="add-on"><span class="icon-asterisk"></span> Name   <span>3-16 Characters</span></label>
				</div>

				<div class="control-group input-append">
					<input type="password" name="password" id="password" data-required data-pattern="^[a-z0-9_-]{5,18}$" />

					<label for="password" class="add-on"><span class="icon-asterisk"></span> Password <span>5-18 Characters</span></label>
				</div>

				<div class="btn-group">
					<button type="submit" class="btn btn-primary">Send</button>

					<button type="reset" class="btn">Reset</button>
				</div>
			</form>
		</div>

		<script src="__PUBLIC__/scripts/jquery-1.9.0.min.js"></script>

		<script src="__PUBLIC__/scripts/jquery-validate.js"></script>

		<script>
			$('form').validate({
				onKeyup : true,
				eachValidField : function() {

					$(this).closest('div').removeClass('error').addClass('success');
				},
				eachInvalidField : function() {

					$(this).closest('div').removeClass('success').addClass('error');
				},
				conditional : {
					confirm : function() {

						return $(this).val() == $('#password').val();
					}
				}
			});


		</script>
	</body>
</html>