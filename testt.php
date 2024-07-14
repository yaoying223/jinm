

html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php 
$q=$_REQUEST['q'];
echo "$q";
if ($q=='baidu') {
	echo "www.baidu.com";
}elseif ($q=='google') {
	echo "www.google.com";
}elseif ($q=='taobao') {
	echo "www.taobao.com";
}else{
	echo "不知道";
}
?>

<form action="" method="post">
<select name="q">
<option value="">选择一个站点:</option>
<option value="baidu">baidu</option>
<option value="google">Google</option>
<option value="taobao">Taobao</option>
</select>
<input type="submit"value="提交">
</form>
</body>
</html>


 <?php 

$a='';
echo empty($a);

?>