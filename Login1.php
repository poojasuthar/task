<?php
include('conn.php');
session_start();
if(isset($_REQUEST['log']))
{
$unm=$_REQUEST['unm'];
$pass=$_REQUEST['pass'];
$sel="select * from reg where unm='$unm' and pass='$pass' and status='Unblock'";
$exe=$conn->query($sel);
//session
$fetch=$exe->fetch_object();
$uid=$fetch->uid;
$chk=$exe->num_rows;
if($chk==1) // 1 means true/ 0 false
	{
		//session create	
		$_SESSION['user']=$unm;
		$_SESSION['uid']=$uid;
		if($_REQUEST['rm'])
		{
		setcookie("user",$unm,time()+15);	
		setcookie("pass",$pass,time()+15);	
		}
		header('location:Profile.php');
	}
		else
	{
		echo "Login Failed";	
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<!--  add enctype="multipart/form-data" for image upload -->
<form action="" method="post" enctype="multipart/form-data">
<table border="2" align="center">
<caption><b>User Login Form</caption>
<tr>
<td>User Name</td>
<td><input type="text" name="unm" value="<?php if(isset($_COOKIE['user'])) { echo $_COOKIE['user'];}?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" value="<?php if(isset($_COOKIE['pass'])) { echo $_COOKIE['pass'];}?>"></td>
</tr>
<tr>
<td>Remember Me</td>
<td><input type="Checkbox" name="rm"></td>
</tr>
<tr>
<td><input type="submit" name="log" value="Login1"></td>
</tr>
</table>
</form>
</body>
</html>