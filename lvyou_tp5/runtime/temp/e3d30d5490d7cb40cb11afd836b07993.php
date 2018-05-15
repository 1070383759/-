<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"F:\phpStudy\WWW\11g12\lvyou_tp5\public/../application/login\view\login\regist.html";i:1526285483;}*/ ?>

<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<center>
	<table border="2">
		<form action="regist_do" method="post">
			<tr>
				<td>用户名</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="text" name="pwd"></td>
			</tr>
			<tr>
				<td>邮箱</td>
				<td><input type="text" id="email" name="email"></td>
				<td></td>
				
			</tr>
			<tr>
				<td>验证码</td>
				<td><input type="text" name="code"></td>
			</tr>
			<tr>
				<td><input type="submit" value="注册"></td>
				<td></td>
			</tr>
		</form>
	</table><button id="send">发送00邮件</button>
</center>
<script>
	$("#send").click(function(){
		var email = $("#email").val()
		$.ajax({
			url:'send',
			data:{email:email},
			dataType:'json',
			type:'post',
			success:function(msg)
			{
				alert(msg)
			}
		})
	})
</script>