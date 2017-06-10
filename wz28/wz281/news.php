<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>新闻资讯</title>
<style>
div{
	border:1px solid #f00;
	margin-bottom:10px;
}
div ul{
	margin:0px;
	padding:0px;
	list-style:none;
}

</style>
<script type="text/javascript" src="js/addevent.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script>
addEvent(window,"load",function(){
   var industry=document.getElementById("industry");
   //ajax过程
   var ajax1=new Ajax();
   //创建ajax对象，现在已经创建好了，因为ajax1.xmlHttp就是ajax对象
   //第二步:准备要发送给服务器数据
   var post_data="category=industry";
   //第三步:设置请求方法及VC地址
   ajax1.ajaxOpen("POST","info.php");
   //第四步:设置请求数据编码（form表单编码）
   ajax1.setHeader();
   //第五步:绑定ajax事件
   ajax1.ajaxBind(function(){
	  if(ajax1.xmlHttp.readyState==4 && ajax1.xmlHttp.status==200){
		 var data=eval("("+ajax1.xmlHttp.responseText+")");
		 var str="<h3>行业资讯</3><ul>";
		 for(var i in data){
			str+="<li><img src=images/"+data[i].imgpath+" width=150>"+data[i].title+data[i].content+"</li>" 
			 }
			 industry.innerHTML=str+"</ul>";
		  }   
   });
   ajax1.ajaxSend(post_data);
   

   //企业资讯
   //ajax过程
   var ajax2=new Ajax();
   //创建ajax对象，现在已经创建好了，因为ajax1.xmlHttp就是ajax对象
   //第二步:准备要发送给服务器数据
   var post_data2="category=company";
   //第三步:设置请求方法及地址
   ajax2.ajaxOpen("POST","info.php");
   //第四步:设置请求数据编码（form表单编码）
   ajax2.setHeader();
   //第五步:绑定ajax事件
   ajax2.ajaxBind(function(){
	  if(ajax2.xmlHttp.readyState==4 && ajax2.xmlHttp.status==200){
		 var data=eval("("+ajax2.xmlHttp.responseText+")");

		 var str="<h3>企业资讯</3><ul>";
		 for(var i in data){
			str+="<li><img src=images/"+data[i].imgpath+" width=150>"+data[i].title+data[i].content+"</li>" 
			 }
			 company.innerHTML=str+"</ul>";
		  }   
   });
   ajax2.ajaxSend(post_data2);
});
</script>
</head>

<body>
<div id="industry"> 
  <h3>行业资讯:</h3>
  <ul>
      <li><img src="images/loading.gif"></li>
      <li><img src="images/loading.gif"></li>
      <li><img src="images/loading.gif"></li>
  </ul>
</div>
<div id="company">
<h3>企业资讯</h3>
 <ul>
      <li><img src="images/loading.gif"></li>
      <li><img src="images/loading.gif"></li>
  </ul>
</div>
</body>
</html>
