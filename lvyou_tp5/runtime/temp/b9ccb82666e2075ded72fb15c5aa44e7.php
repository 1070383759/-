<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"F:\phpStudy\WWW\11g12\lvyou_tp5\public/../application/index\view\index\login.html";i:1526255420;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>17商城</title>
<link type="text/css" href="/lvyou/css/css.css" rel="stylesheet" />
<script type="text/javascript" src="/lvyou/js/jquery.js"></script>
<script type="text/javascript" src="/lvyou/js/js.js"></script>
<script src="//cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="/lvyou/js/jquery.md5.js"></script>
</head>

<body style=" background:#FFF;">
 <div class="loginLogo">
  <div class="logoMid">
   <h1 class="logo" style="height:71px;padding-top:10px;"><a href="index.html"><img src="/lvyou/images/loginLogo.jpg" width="241" height="71" /></a></h1>
   <div class="loginReg">
    还没有会员账号?&nbsp;<a href="reg.html">免费注册</a>
   </div><!--loginReg/-->
  </div><!--logoMid/-->
 </div><!--loginLogo/-->
 <div class="loginBox">
  <div class="loginLeft">
   <img src="/lvyou/images/logoinimg.jpg" width="716" height="376" />
  </div><!--loginLeft/-->
  <form action="login_do" method="post" class="loginRight" onsubmit="return go()">
   <h2>会员登录</h2>
   <h3>用户名</h3>
   <input type="text" class="name" id="index_name" name="index_name" onblur="check_name()"/><span id="span1"></span>
   <h3>密码</h3>
   <input type="password" class="pwd" id="index_pwd" name="index_pwd" onblur="check_pwd()" /><span id="span2"></span>
   <div class="zhuangtai">
    <input type="checkbox" id="ck_rmbUser"  /> 七天免登录
   </div><!--zhuangtai/-->
   <div class="subs">
    <input type="submit"  style="width:284px; height:34px"  onclick="Save()" />
   </div>
  </form><!--loginRight/-->
  <div class="clears"></div>
 </div><!--loginBox/-->
</body>
</html>
<script>
	  $(document).ready(function () {
	    if ($.cookie("rmbUser") == "true") {
		    $("#ck_rmbUser").attr("checked", true);
		    $("#index_name").val($.cookie("index_name"));
		    $("#index_pwd").val($.cookie("index_pwd"));
	    }
		
		check_name()
		check_pwd()
		
		
	  });
	 
	  //记住用户名密码
	  function Save() {
	    if ($("#ck_rmbUser").attr("checked")) {
	      var str_index_name = $("#index_name").val();
	      
	      var str_index_pwd = $("#index_pwd").val();
//		  var str_index_pwd = $.md5(str_index_pwd)
	      $.cookie("rmbUser", "true", { expires: 7 }); //存储一个带7天期限的cookie
	      $.cookie("index_name", str_index_name, { expires: 7 });
	      $.cookie("index_pwd", str_index_pwd, { expires: 7 });
	    }
	    else {
	      $.cookie("rmbUser", "false", { expire: -1 });
	      $.cookie("index_name", "", { expires: -1 });
	      $.cookie("index_pwd", "", { expires: -1 });
	    }
	  };
	
	$("#ck_rmbUser").click(function(){
		var ck_rmbUser = $(this).attr("checked")
		if(ck_rmbUser==undefined)
		{
			$("#ck_rmbUser").attr("checked","checked")
			
		}else
		{
			$("#ck_rmbUser").removeAttr("checked")
		}
	})
	
	flag = false;
	function check_name()
	{
		var index_name = $("#index_name").val()
		if(index_name=="")
		{
			$("#span1").html("<font style='color:red'>账号不能为空</font>")
			flag=false;
		}else if(index_name.length<6)
		{
			$("#span1").html("<font style='color:red'>账号不能小于6位</font>")
			flag=false;
		}else{
			$("#span1").remove()
			flag=true;
		}
	}
	
	function check_pwd()
	{
		var index_pwd = $("#index_pwd").val()
		if(index_pwd=="")
		{
			$("#span2").html("<font style='color:red'>密码不能为空</font>")
			flag=false;
		}else{
			$("#span2").remove()
			flag=true;
		}
	}
	
	function go()
	{
		return flag;
	}
</script>
