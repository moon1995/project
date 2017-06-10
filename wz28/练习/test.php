<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>无标题文档</title>
<style>
div{
	background:#d90;
	width:200px;
	height:200px;
	}
</style>
<script src="zepto.min.js"></script>
<script src="zepto.touch.js"></script>
<script>
	Zepto(function($){
		$("div").on("swipeLeft",function(){
			console.log("滑动了");
			});
			$("div:eq(0)")
		});
</script>
</head>

<body>
<div>
cshi</div>
<div>111</div>
</body>
</html>