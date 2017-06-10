<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style>
span{
	font-size:32px;
	color:#f00;}
</style>
</head>


<body>
<?php
//索引数组：
$arr=array("a","b","c");
//打印数组结构
print_r($arr);
echo "</br>";
foreach($arr as $value){
	echo $value."</br>";
	};
//关联数组：
$arr_2=array("name"=>"tom","age"=>34,"sex"=>"男");
print_r($arr_2);
echo '<br>';
/*foreach($arr_2 as $value){
	echo $value."<br>";
	};
	*/
//遍历关联数组方法二：
echo "<br>****<br>";
/*while(list($name,$value)=each($arr_2)){
	echo $arr_2."=".$value."<br>";
}*/
echo "<br>输出json<br>";
$str="{";
while(list($name,$value)=each($arr_2)){
	$str=$str.'"'.$name.'"'.':'.'"'.$value.'",';
	}
	echo $str."<br>******<br>";
	echo __FILE__."<BR>";
	echo substr($str,0,strlen($str)-1)."}";
	echo "<br>";
$i="renmin";
$j=&$i;
echo $j;
echo "<br>";
echo $i;
echo "<br>";
$j="shuaige";
echo $i;
echo "<br>";
echo $j;
$x=10;
function test(){
	echo $x;
	}
	test();
//健壮性:系统的容错性
echo '**************trim********************<br>';
echo '#ankdmd#'."<br>";
echo trim('#ankdmd#','#')."<br>";
echo "#";
echo '  sno  ';
echo "#"."<br>";
echo trim('  sno  ')."<br>";
echo '***********************substr*******************';
$z="abcdefg";
echo substr($z,3,3)."<br>";
echo substr($z,-4,3);
echo '**************************************验证码******************<br>';
$str="abcdefghigklmnopqrstuvwxyz0123456789";
$yzm="";
for($i=1;$i<=4;$i++){
  $yzm.=substr($str,rand(0,35),1);
  }
echo "<span>".$yzm."</span><br>";	
echo '**************************************替换******************<br>';
$str2="李四爱学习，张三不爱学习";
echo str_replace("李四","tom",$str2)."<br>";
//md5,单向加密算法:只能通过原文产生密文，不能通过密文计算原文
$pwd1="225";
echo md5($pwd1);
$pwd1=md5($pwd1);
echo "<br>";
include("mm.php");
echo jm($pwd1);
echo "<br>";
echo "*******二维数组*******<BR>";
$STR=array(
"数组一"=>array("文学","历史","地理"),
"体育用品" => array("m"=>"篮球","n"=>"羽毛球"),
"水果"=>array("橘子",8=>"葡萄","苹果")
);
print_r($STR);
echo "<br>";
echo $STR["数组一"][0]."<br>";
$arr=array("苹果","鸭梨","橙子");
foreach($arr as $key=>$value){
	echo $key.":".$value."<br>";
	};
$arr_1=implode(" ",$arr);
echo $arr_1."<br>";
$string="h,b,k,l,p";
$string_1=explode(",",$string);
foreach($string_1 as $value){
	echo $value."<br>";
	}
$str_1=array("一号"=>"张三","二号"=>"李艾","三号"=>"牛娜");
while(list($name,$value)=each($str_1)){
	echo "$name:$value<br>";
	}
echo count($str_1)."<br>";
echo array_search("张三",$str_1)."<br>";
//array_push($str_1,"李艾");
print_r($str_1);
echo "<br>";
print_r( array_unique($str_1));
echo "<br>";
$str_2=array_pop($str_1);
print_r($str_2);
echo "<br>";
print_r($str_1);
?>
<form name="myform" action="check.php" method="get">
用户名：
<input type="text" name="user" />
密码：
<input type="password" name="pwd" />
<input type="radio" name="sex" value="nan"/>男
<input type="radio" name="sex"  value="nv"/>女
<input type="hidden" name="bookId" value="10001" />
<select name="city">
<option value="hz">杭州</option>
<option value="bj">北京</option>
<option value="sh">上海</option>
</select>
<!--以数组形式提交的数据-->
<input type="checkbox" name="kemu[]" value="yw" />语文
<input type="checkbox" name="kemu[]" value="sx" />数学
<input type="checkbox" name="kemu[]" value="yy" />英语
<input type="checkbox" name="kemu[]" value="ls" />历史
<input type="submit" name="sub" value="提交" />

</form>
</body>
</html>
