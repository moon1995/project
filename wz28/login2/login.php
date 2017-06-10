<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<script type="text/javascript" src="../js/jquery-1.11.2.js" ></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript">
$(function(){
	$("#sub").click(function(){
		$.ajax({
			url:"check.php",
			type:"POST",
			data:{"username":$("#username").val(),"pwd":$("#pwd").val(),"info":$("#info").prop("checked")?$("#info").val():"","yzm":$("#yzm").val()},
			dataType:"json",
			success: function(data){
				if(data.yzm==0){
					alert(data.yzmmsg);}
				if(data.status==1){
					location.href="manager.php";
					}else{
						$("#tips").html(data.msg);}
				}
			});
			
			});
			$("#usename").focus(function(){
			$("#tips").hide();
		});
			$("#pwd").focus(function(){
			$("#tips").hide();
		});
		var username=$.cookie("username");
		var pwd=$.cookie("pwd");
		var index=$.cookie("index");
		if(username!="" && pwd!=""){
			$.ajax({
				url:"check.php",
				type:"POST",
				data:{"username":username,"pwd":pwd,"index":index},
				dataType:"json",
				success:function(data){
						if(data.status==1){
							location.href="manager.php";
							}
						}
				});
			}
	$("#a1").click(function(){
		var myDate=new Date();
		$("#yzmyz").attr("src","1.php?"+myDate.getTime());
	});

	});
</script>
</head>

<body>
<span id="tips"></span>
<label for="username" >用户名：</label>
<input type="text" id="username" /><br>
<label for="pwd">密码：</label>
<input type="password" id="pwd" />
<br>
<input type="checkbox" id="info" value="yes" />十天免登陆<br>
<input type="text" id="yzm" maxlength="4" size="4"/>
<img src="1.php" id="yzmyz"/>
<a href="javascript:;" id="a1">看不清，换一张</a><br><br>
<input type="button" id="sub" value="登录" />

</body>
</html>