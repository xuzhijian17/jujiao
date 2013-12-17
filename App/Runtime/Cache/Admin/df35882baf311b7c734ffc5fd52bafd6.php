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
			<form id="form" action="__ROOT__/Admin/User/login" method="POST">
				<div class="control-group input-append">
					<input type="text" name="name" id="name" form="form" data-required data-pattern="^[a-z0-9_-]{3,16}$" />

					<label for="name" class="add-on"><span class="icon-asterisk"></span> Name   <span>3-16 Character</span></label>
				</div>

				<div class="control-group input-append">
					<input type="text" name="nickname" id="nickname"  />

					<label for="nickname" class="add-on"> Nickname</label>
				</div>

				<div class="control-group input-append">
					<input type="password" name="password" id="password" data-required data-pattern="^[a-z0-9_-]{6,18}$" />

					<label for="password" class="add-on"><span class="icon-asterisk"></span> Password</label>
				</div>

				<div class="control-group input-append">
					<input type="password" name="confirm" id="confirm" data-required data-conditional="confirm" />

					<label for="confirm" class="add-on"><span class="icon-asterisk"></span> Confirm</label>
				</div>

				<div class="control-group input-append">
					<input type="text" name="email" id="email" data-required="true" data-pattern="^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$" />

					<label for="email" class="add-on"><span class="icon-asterisk"></span>email</label>
				</div>

				<div class="control-group input-append">
					<input type="text" name="age" id="age" data-required data-pattern="^[0-9]+$" />

					<label for="age" class="add-on"><span class="icon-asterisk"></span> Age</label>
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