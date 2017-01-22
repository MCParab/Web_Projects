<html>
<body>
<?php
$org=$_POST['origin'];
$des=$_POST['dest'];
$type=$_POST['rb1'];
$arr=$_POST['arr'];
$dep=$_POST['dep'];
$chi=$_POST['children'];
$adu=$_POST['adult'];
$old=$_POST['old'];
$clas=$_POST['clas'];
if($org==""){
echo"please fill origin<br>";
}
if($des==""){
echo"please fill Destination<br>";
}
if($arr==""){
echo"please fill arrival date<br>";
}
if($dep==""){
echo"please fill departure<br>";
}
if($chi=="children"){
echo"please fill number of children<br>";
}
if($adu=="Adults"){
echo"please fill number of adults<br>";
}
if($old=="Old_Aged"){
echo"please fill number of old aged<br>";
}
if($class==""){
echo"please fill number of class<br>";
}
?>
</body>
</html>



