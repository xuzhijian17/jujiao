/**
 * 
 */
$(document).ready(function() {
	var user_preg = /^[a-z0-9_-]{3,16}$/;
	var pwd_preg = /^[a-z0-9_-]{6,18}$/;
	var email_preg = /^[a-z\d]+(\.[a-z\d]+)*@([\da-z](-[\da-z])?)+(\.{1,2}[a-z]+)+$/;

	$('#user').after('<span id="umsg">*</span>');
	$('#email').after('<span id="emsg">*</span>');
	
		$("#user").bind("blur",function(){
			var pregu = /^[a-z0-9]{4,6}$/;
			if (!pregu.test($("#user").attr("value"))) {
				$("#msgu").css({"color":"red"});
				$("#msgu").html("用户名非法");
			}else{
				$("#msgu").css("color","green");
				$("#msgu").html("用户名合法");
			}			
		});
		$("#pwd1").bind("blur",function(){
			var pregp = /^[a-z0-9]{6,8}$/;
			if (!pregp.test($("#pwd1").val())) {
				$("#msgp1").css({"color":"red"});
				$("#msgp1").html("密码非法");
			}else{
				$("#msgp1").css({"color":"green"});
				$("#msgp1").html("密码填写正确");
			}
		});
		$("#pwd2").bind("blur",function(){
			var pregp = /^[a-z0-9]{6,8}$/;
			if ($("#pwd1").val() != $("#pwd2").val()) {
				$("#msgp2").css({"color":"red"});
				$("#msgp2").html("二次密码不一致");
			}else{
				$("#msgp2").css({"color":"green"});
				$("#msgp2").html("二次密码一致");
			}
		});
		$('#email').bind('blur',function(){
			if (email_preg.test($(this).val())) {
				$('#emsg').css('color','green').html('邮箱合法').removeAttr('class');
			}else{
				$('#emsg').css('color','red').html('邮箱非法').attr('class','error');
			}
		});
		$('#frm').submit(function(){
			$('.required').trigger('blur'); //自动触发失去焦点事件
			if ($('.error').length > 0) {
				alert('表单填写错误');
				return false;
			};
			if ($('#area').val() === '') {
				alert('个人资料不能为空');
				return false;
			};
			return true;
		});
});