<?
$x=5;
$y='ab"c"def';
echo $y."</br>";
$z="mb\nxdef$y";
echo $z;
$t=<<<mark
<script type="text/javascript">
alert("测试哈哈");
</script>
mark;
echo $t;
?>