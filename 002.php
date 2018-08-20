<!doctype html>
<html>
<body>

<?php
mysql_connect('localhost','root','dlgkwjd1');
mysql_select_db('unius');


$day = date("Y-m-d");
$id = $_GET['id'];
$aname = $_GET['name'];
$wname = $_GET['name1'];
$cloth = $_GET['cb'];
$color = $_GET['bb'];
$phone = $_GET['phone1']."-".$_GET['phone2']."-".$_GET['phone3'];
$image = $_FILES['load'];

if ($cloth=="cb1"){
	$cloth = "image/0101.PNG";
}elseif ($cloth=="cb2"){
	$cloth = "image/옷.PNG";
}elseif ($cloth=="cb3"){
	$cloth = "image/aaa.PNG";
}elseif ($cloth=="cb4"){
	$cloth = "image/ca.PNG";
}elseif ($cloth=="cb5"){
	$cloth = "image/n.PNG";
}

if ($color=="bb1"){
	$color = "image/red.PNG";
}elseif ($color=="bb2"){
	$color = "image/org.PNG";
}elseif ($color=="bb3"){
	$color = "image/yellow.PNG";
}elseif ($color=="bb4"){
	$color = "image/green.PNG";
}elseif ($color=="bb5"){
	$color = "image/black.PNG";
}


$sql = "insert into uni values('$no', '$day', '$id', '$aname', '$wname', '$cloth', '$color', '$phone', '$image')";

mysql_query($sql);
mysql_close($sql);

echo '제출되었습니다. -> <a href = "web001.html">돌아가기</a>';

echo "<br/>";
echo "<br/>";

echo $day = date("Y-m-d");
echo "<br/>";
echo $id = $_GET['id'];
echo "<br/>";
echo $aname = $_GET['name'];
echo "<br/>";
echo $wname = $_GET['name1'];
echo "<br/>";
echo $cloth;
echo "<br/>";
echo $color;
echo "<br/>";
echo $phone = $_GET['phone1']."-".$_GET['phone2']."-".$_GET['phone3'];
echo "<br/>";
echo $image = $_FILES['load'];

$oldfile = 'test.php';
$newfile = 'test.phps';
if(file_exists($oldfile)){
    if(!copy($oldfile, $newfile)){
        echo "실패";
    }
    elseif (file_exists($newfile)){
        echo "성공";
    }
}

?>



</body>
</html>