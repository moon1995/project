<?php
/*
if(copy("text.php","aa.html")){
	echo "拷贝成功";
	}else{
			echo "拷贝失败";
	}
	if(unlink("aa.html")){
		echo"删除成功";
		}else{
			echo "删除失败";
			}*/
			$path = './/';//当前目录下的test目录
	if(is_dir($path)){
		$dir = scandir($path);
		foreach($dir as $value){
			echo $value."<br>";
		}
	}else{
		echo "目录路径错误！";
	}/*
	if(mkdir(".//text")){
		echo "chneg";
		}else{
			echo "fail";
			}*/

?>