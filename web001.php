<!doctype html>
<html>
<body>
<form action="web002.php" method="get">

<?php
mysql_connect('localhost','root','dlgkwjd1');
mysql_select_db('unius');

$id = $_GET['id'];

$sql = "select id from user where id = '$id'";
$re = mysql_query($sql);
$cnt = mysql_num_rows($re);
mysql_close($sql);

if($cnt > 0){

}

else{

}

?>
</form>
</body>
</html>