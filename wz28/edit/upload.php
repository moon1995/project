<?php
header("content-type:text/html;charset=utf-8");
include("conn.php");
$filename=$_FILES['file']['name'];
$filehz=strstr($filename,".");
$filesize=$_FILES['file']['size'];
if($filesize<=512000){
	if(strstr(".jpg.gif.png",$filehz)){
		$upload_filename=time().rand(1,10000).$filehz;
		move_uploaded_file($_FILES['file']['tmp_name'],'.\\upload\\'.$upload_filename);
		echo "上传成功";
		$num=mysql_query("insert into img(imgsrc,addTime) values($upload_filename,now())");
		}else{
			echo "上传失败 文件格式必须是.jpg.gif.png";
			}
	}else{
		echo "文件超过五百k";
		}
?>