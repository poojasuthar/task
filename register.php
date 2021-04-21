<?php
include('conn.php');

if(isset($_REQUEST['reg']))
{
$unm=$_REQUEST['unm'];
$pass=$_REQUEST['pass'];	
$gen=$_REQUEST['gen'];	
$lag_arr=$_REQUEST['lag'];	
$lag=implode(",",$lag_arr);
$cid=$_REQUEST['cid'];
//img
$file1=$_FILES['file1']['name'];		
$path="upload/".$file1;
$tem_file=$_FILES['file1']['tmp_name'];
move_uploaded_file($tem_file,$path);


$ins="insert into reg(unm,pass,gen,lag,cid,file1) values('$unm','$pass','$gen','$lag','$cid','$file1')";
$exe=$conn->query($ins);// queru run $conn
if($exe)
{
	header('location:Login1.php');	
}
else
{
	echo "Not success";	
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
<caption><b>Registration Form</caption>

<tr>
<td>User Name</td>
<td><input type="text" name="unm"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass"></td>
</tr>
<tr>
<td>Gender</td>
<td>
Male:<input type="radio" name="gen" value="Male">
Female:<input type="radio" name="gen" value="Female">
</td>
</tr>
<tr>
<td>Laungages</td>
<td>
Hindi:<input type="checkbox" name="lag[]" value="Hindi">
Gujarati:<input type="checkbox" name="lag[]" value="Gujarati">
English:<input type="checkbox" name="lag[]" value="English">
</td>
</tr>
<tr>
<td>Upload Images</td>
<td><input type="file" name="file1"></td>
</tr>

      
<tr>
<td>Country</td>
<td>
<select name="cid">
<option value="">--Select Country--</option>
<?php
$sel="select * from country";
$exe=$conn->query($sel);// queru run $conn 
while($fetch=$exe->fetch_object())
{
?>
<option value="<?php echo $fetch->cid?>">
				<?php echo $fetch->cnm?>
</option>
<?php
}
?>
</select>
</td>
</tr>
<tr>
<td><input type="submit" name="reg" value="Submit"></td>
</tr>
</table>
</form>
</body>
</html>