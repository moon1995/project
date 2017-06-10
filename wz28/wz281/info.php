<?php
header("content-type:text/html;charset=utf-8");
$category=$_POST['category'];
sleep(3);
switch($category){
  case "industry":
     echo '[{"id":"1","imgpath":"h1.jpg","title":"网站前端很火爆","content":"入职薪资高，待遇好。。。。"},{"id":"2","imgpath":"h2.jpg","title":"全栈很火爆","content":"入职薪资高，待遇好。。。。"},{"id":"3","imgpath":"h3.jpg","title":"网站前端很火爆","content":"入职薪资高，待遇好。。。。"}]';	
	 break;
  case "company":
     echo '[{"id":"1","imgpath":"q1.jpg","title":"网站前不很火爆","content":"入职薪资高，待遇好。。。。"},{"id":"2","imgpath":"q2.jpg","title":"全栈很火爆","content":"入职薪资高，待遇好。。。。"}]';	
	 break;
	 	
}


?>