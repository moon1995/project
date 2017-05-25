<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<script type="text/javascript" src="js/jquery-1.11.2.js" ></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript">
$(function(){
	$("#sub").click(function(){
		$.ajax({
			url:"check.php",
			type:"POST",
			data:{"username":$("#username").val(),"pwd":$("#pwd").val(),"info":$("#info").val()},
			dataType:"json",
			success:function(data){
				if(data.status==1){
					location.href="manager.php";
					}else{
						$("#tips").html(data.msg);
						}
				}
			});
		});
		var username=$.cookie("username");
		var pwd=$.cookie("pwd");
		if(username!="" && pwd!= ""){
			$.ajax({
				url:"check.php",
				type:"POST",
				data:{"username":username,"pwd":pwd},
				dataType:"json",
				success:function(data){
					if(data.status==1){
						location.href="manager.php";
						}
					}
				});
			}
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
<input type="submit" id="sub" />
</body>
</html>