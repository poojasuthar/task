<html>
<head>
<title>PHP fgetc() Example</title>
<style type="text/css">
	body{
		  background: url('image/p1.jpg');
		align-content: center;
		justify-content: center;
		text-align: center;
	}
	form{
		margin-top: 250px;
		justify-content: center;
	}
	input{
			width: 300px;
			border:1px solid #ddd;
			border-radius: 3px;
			outline: 0;
			padding: 7px;
			background-color: #fff;
			box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3);
		}
		input#submit{
			width: 200px;
			padding: 7px;
			font-size: 16px;
			font-family: sans-serif;
			font-weight: 600;
			border:none;
			border-radius: 3px;
			background-color: gray; 
			color: #fff;
			cursor: pointer;
			border: 1px solid rgba(255,255,255,0.3);
			box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
		}
</style>
</head> 
<body>
<form method="post" style="color:white;">
<div style="text-align:center;">
        <h1 style="display:inline-block;color:white; font-weight: bold;margin-bottom:2%;text-decoration: underline overline;">File Handling</h1>  </div>
Enter String : <input type="text" name="str"> <br/> <br/>
<input type="submit" name="Submit1" value="Create File" id="submit">
<input type="submit" name="Submit2" value="Read File - getc()" id="submit">
<input type="submit" name="Submit3" value="Read File - gets()" id="submit">
<input type="submit" name="Submit4" value="feof()" id="submit">
<input type="submit" name="Submit4" value="fread()" id="submit">
</form>
<?php
if(isset($_POST['Submit1']))
{
//open file abc.txt in append mode
$myfile = fopen("abc.txt", "a");
$text = $_POST["str"];
fwrite($myfile, $text);
fclose($myfile); 
echo "file created !!";
}
if(isset($_POST['Submit2']))
{
$file=fopen("abc.txt","r");
$readfile=fgetc($file);
echo $readfile;
fclose($file);
}

if(isset($_POST['Submit3']))
{
	$file2=fopen("abc.txt", "r");

	$readfile2=fgets($file2);
	echo $readfile2;

	fclose($file2);
}
if(isset($_POST['Submit4']))
{
	$file3=fopen("abc.txt", "r");
	while(!feof($file3))
	{
		echo fgets($file3)."<br>";
	}
	fclose($file3);
}
if(isset($_POST['Submit4']))
{
	$file4=fopen("abc.txt", "r");
	fread($file4, "10");
	fclose($file4);
}
?>