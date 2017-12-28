<?php
session_start();


include("config.php");

$email=$_POST["email"];
$password=$_POST["password"];
$account_type=$_POST['accounttype'];
$ress=mysql_query("select * from user  where email='$email' and account_type='$account_type' and confirm_code='true'") or die(mysql_error());
$rows=mysql_fetch_array($ress);


if((!$email=='') &&($rows["email"]==$email)&&($rows["password"]==$password))
{
$_SESSION['email']=$email;
$_SESSION['password']=$password;
if(isset($_POST['remember'])){
setcookie("cookname", $_SESSION['username'], time()+60*60*24*100, "/");
setcookie("cookpass", $_SESSION['password'], time()+60*60*24*100, "/");



}


$myip = $_SERVER['REMOTE_ADDR'];
$logindate = date("d:m:y");
$logintime = date("h:i:sa");

$sql="INSERT INTO login_activity(email,login_ip,login_time,login_date) VALUES ('$email','$myip','$logintime','$logindate')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }



if($account_type == 'Teacher')
{
header ("Location: teacher/homepage.php");
}

else if($account_type == 'Student')
{
header ("Location: student/homepage.php");
}




}
else 
echo "wrong username or password";

?>
<html>
<body>
<br />
<a href="login.php">Login Again</a>
</body>
</html>