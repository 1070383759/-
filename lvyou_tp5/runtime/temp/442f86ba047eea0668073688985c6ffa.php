<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"F:\phpStudy\WWW\11g12\lvyou_tp5\public/../application/index\view\index\reg.html";i:1526214519;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>17商城</title>
<link type="text/css" href="/lvyou/css/css.css" rel="stylesheet" />
<script type="text/javascript" src="/lvyou/js/jquery.js"></script>
<script type="text/javascript" src="/lvyou/js/js.js"></script>
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
</head>

<body style=" background:#FFF;">
 <div class="loginLogo">
  <div class="logoMid">
   <h1 class="logo" style="height:71px;padding-top:10px;"><a href="index.html"><img src="/lvyou/images/loginLogo.jpg" width="241" height="71" /></a></h1>
   <div class="loginReg">
    还没有会员账号?&nbsp;<a href="login.html">登录</a>
   </div><!--loginReg/-->
  </div><!--logoMid/-->
 </div><!--loginLogo/-->
 <div class="loginBox">
  <img src="/lvyou/images/chengnuo.jpg" width="295" height="393" class="chengnuo" />
  <form action="reg_add" method="post" class="reg" onsubmit="return go()">
   <div class="regList">
    <label><span class="red">*</span> 账户名</label>
    <input type="text" id="index_name" onblur="check_name()" name="index_name" /> <span id="span1" style="color:#999;">用户名</span>
   </div><!--regList/-->
   <div class="regList">
    <label><span class="red">*</span> 请设置密码</label>
    <input type="password" onblur="check_pwd()" id="index_pwd" name="index_pwd" /><span id="span2" style="color:#999;">密码</span>
   </div><!--regList/-->
   <div class="regList">
    <label><span class="red">*</span> 手机号</label>
    <input type="text" onblur="check_tel()" id="tel" name="index_phone"/>
    <!--<span onclick="sendemail()" id="get_code" style="color:#000000;">点击获取验证码</span>-->
     <input type="button" id="btn" style="width:120px;" value="免费获取验证码" />
     <font id="tishi" style="color:red;"></font>
   </div><!--regList/-->
   <div class="regList">
    <label><span class="red">*</span> 验证码</label>
    <input type="text" class="yanzheng" id="yanzheng" keydown="check()" /> <span style="color:#999;">输入收到的验证码</span><font id="tishi1" style="color:red;"></font>
   </div><!--regList/-->
   <div class="xieyi">
    <input type="checkbox" id="access" /> 我已经阅读并同意<a href="#">《17用户注册协议》</a><span id="span3"><font style='color:red'><——</font></span>
   </div><!--xieyi/-->
   <div class="reg">
    <input type="submit" style="width:284px; height:34px"  />
   </div><!--reg/-->
  </form><!--reg/-->
  <div class="clears"></div>
 </div><!--loginBox/-->
</body>
</html>
<script>
	
	flag = false;
//	function saveInfo()
//	{
//	 	// var span1 = document.getElementById('span1').innerHTML;
//	 	// alert(span1)
//	 	event.preventDefault();
//	 	
//	}
$("#access").click(function(){
	var status = $(this).attr("checked")

		if(status==undefined)
		{
			$(this).attr("checked","checked")
			$("#span3").remove()
			check_name()
			check_pwd()
			check_tel()
			flag = true;
		}else
		{
			$(this).removeAttr("checked")
			flag = false;
		}
})

		

	
	
	//验证用户名
	function check_name()
	{
		var index_name = $("#index_name").val()
		if(index_name.length<6)
		{
			$("#span1").html("<font style='color:red'>用户名不能少于6位</font>")
			flag = false;
		}
		
		$.ajax({
				url:"reg_do",
				data:{index_name:index_name},
				type:"post",
				dataType:"json",
				success:function(msg)
				{
					if(msg=="1")
					{
						$("#span1").html("<font style='color:red'>已被注册</font>")
						flag = false;
					}else if(msg=="0")
					{
						$("#span1").html("<font style='color:green'>√</font>")
						flag = true;
					}else if(msg=="2")
					{
						$("#span1").html("<font style='color:red'>用户名不能为空</font>")
						flag = false;
					}else if(msg=="3")
					{
						$("#span1").html("<font style='color:red'>用户名不能少于6位</font>")
						flag = false;
					}
					
				}
			})
	}
	
	//检查密码
	function check_pwd()
	{
		var index_pwd = $("#index_pwd").val()
		if(index_pwd=="")
		{
			$("#span2").html("<font style='color:red'>密码不能为空</font>")
			flag = false;
		}else if(index_pwd.length<6)
		{
			$("#span2").html("<font style='color:red'>密码不能少于6位</font>")
			flag = false;
		}else
		{
			$("#span2").html("<font style='color:green'>√</font>")
			flag = true;
		}
		
	}
	
	//检查手机号
	function check_tel()
	{
		var tel = $("#tel").val()
		$.ajax({
				url:"phone_do1",
				data:{tel:tel},
				type:"post",
				dataType:"json",
				success:function(msg)
				{
					if(msg=="1")
					{
						$("#tishi").text("手机号已被注册")
						flag = false;
					}else if(msg=="0")
					{
						$("#tishi").html("<font style='color:green'>√</font>")
						flag = true;
					}else if(msg=="3")
					{
						$("#tishi").html("<font style='color:red'>手机号不对</font>")
						flag = false;
					}
					
				}
			})
		
	}
	
	//验证手机号验证码
	$("#yanzheng").blur(function(){
		var code1 = $("#yanzheng").val()
		$.ajax({
				url:"code_do",
				data:{code1:code1},
				type:"post",
				dataType:"json",
				success:function(msg)
				{
					if(msg=="1")
					{
						$("#tishi1").text("对了")
						flag = true;
					}else
					{
						$("#tishi1").text("不对")
						flag = false;
					}
					
				}
			})
	})
	
		
	//发送手机验证码
	$("#btn").click(function(){
		
		
		var tel = $("#tel").val()
		if(tel.length!=11)
		{
			$("#tishi").text("请输入正确的手机号")
		}else
		{
			
			$.ajax({
				url:"phone_do",
				data:{tel:tel},
				type:"post",
				dataType:"json",
				success:function(msg)
				{
					if(msg==1)
					{
						$("#tishi").text("手机号已被注册")
						flag = false;
					}else
					{
						$("#tishi").remove()
						flag = true 
					}
					
				}
			})
			
			//验证码倒计时
			var obj = $("#btn");
			settime(obj);
			var countdown=60;
			function settime(obj) { //发送验证码倒计时
				    if (countdown == 0) { 
				        obj.attr('disabled',false); 
				        //obj.removeattr("disabled"); 
				        obj.val("免费获取验证码");
				        countdown = 60; 
				        return;
				    } else { 
				        obj.attr('disabled',true);
				        obj.val("重新发送(" + countdown + ")");
				        countdown--; 
				    } 
				setTimeout(function() { 
				    settime(obj) }
				    ,1000) 
				}

		}
	})
	
	function go()
	{
		return flag;
	}

</script>
