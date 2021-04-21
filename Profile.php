<?php
include('conn.php');
//use session
session_start();
if(!(isset($_SESSION['uid'])))
{
	header('location:Login1.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h1 align="center"><?php echo "Welcome :".$_SESSION['user'];?></h1>
<table align="center" border="2">
<caption>User Profile</caption>
<tr>
	<td>User Id</td>
    <td>User Name</td>
    <td>User Pass</td>
    <td>User Gen</td>
    <td>User Lag</td>
    <td>User Country</td>
     <td>User Photo</td>
    <td>Manage User</td>
</tr>
<?php
$uid=$_SESSION['uid'];
$sel="select * from reg join country on reg.cid=country.cid where uid='$uid'";
$exe=$conn->query($sel);// queru run $conn 
while($fetch=$exe->fetch_object())
{
?>
<tr>
	<td><?php echo $fetch->uid;?></td>
    <td><?php echo $fetch->unm;?></td>
    <td><?php echo $fetch->pass;?></td>
    <td><?php echo $fetch->gen;?></td>
    <td><?php echo $fetch->lag;?></td>
    <td><?php echo $fetch->cnm;?></td>
     <td><img src="upload/<?php echo $fetch->file1;?>" height="50px" width="50px"></td>
    <td><a href="edit.php?euid=<?php echo $fetch->uid;?>">Edit</a></td>
</tr>
<?php
}
?>
<tr>
<td><a href="Logout.php">Logout</a></td>
</tr>
</table>
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
</body>
</html>