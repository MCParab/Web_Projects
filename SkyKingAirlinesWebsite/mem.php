<html>
<head>
<title>faq</title>
<link rel=stylesheet href="css/stylle.css" type="text/css" media=screen />
<style type="text/css">
#alertmsg{
margin:0 auto;
display:block;
background-color:#d0d0d0;
width:500px;
padding:30px;
color:#333;
border:1 solid#333;
border-radius:10px;
}</style>
</head>
<body >
<div id="divone">
<h1 style="color:#FFF;" ><center> SKY KING AIRLINES</center></h1></div>
<div id="divwrapper"> 
   <div id="divlinks">
      <div id="divnav" >
         <ul>
<li><a href="homepage.html"  >Home</a></li>
        <li><a href="fa.html" >FlyAccount</a></li>
         <li><a href="abtus.html" >About us</a></li>
        <li><a href="contact.html" >Contact us</a></li>
        <li><a href="sm.html" >Site Map </a></li>
       </ul>
     </div >
   </div >
</div>
<div id="divfive">

<div id="divsix">

<?php
 $f=$_POST['fname'];
 $l=$_POST['lname'];
 $d=$_POST['dob'];
 $e=$_POST['email'];
 $c=$_POST['con'];
 $p1=$_POST['pwd1'];
 $p2=$_POST['pwd2'];
$flag="ok";
$msg="";
if(!$_POST['fname']){
$msg="Please enter your First Name";
$flag="notok";
}
else
if(!$_POST['lname']){
$msg="Please enter your Last Name";
$flag="notok";
}
else
if(!$_POST['dob']){
$msg="Please enter your Date_Of_Birth";
$flag="notok";
}
else
if(!$_POST['email']){
$msg="Please enter your Email Id";
$flag="notok";
}
else
if(!$_POST['con']){
$msg="Please enter your Contact Number";
$flag="notok";
}
else
if(!$p1){
$msg="Please enter your Password";
$flag="notok";
}
else
if(!$p2){
$msg="Please enter your Password";
$flag="notok";
}
else
if($p2!=$p1){
$msg="Password don't match . Please re-Enter";
$flag="notok";
}
if($flag=="notok"){
echo"<div id='alertmsg'>";
echo "<h1> $msg </h1>";
echo "<input type='button' value='back' id='a' onClick='history.go(-1)' >";echo"</div>";
}
if($flag=="ok"){
$host="localhost";
$user="root";
$pass="";
$database="skyking";
$query="insert into member values('$p1','$f','$l','$d','$c','$e');";
@mysql_connect("$host","$user","$pass") or  die("connection failed");
@mysql_select_db($database) or die("connection failed");
@mysql_query($query) or die("efef");
echo "<div id='alertmsg'><h1>Congratulations ! you have successfully registered as a member </h1> 
<br>
<a href='log.html' id='a'>Sign_in</a></div>";

}
?>
</div></div>
</body>
</html>