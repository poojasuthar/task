<html>  
<head>  
    <title>PHP login system</title>  
    <style>
	body{   
    background: #DAF7A6 ;  
}  
#frm{  
    border: solid #337ab7 1px;  
    width:25%;  
    border-radius: 0.5px;  
    margin: 120px auto;  
    background: orange;  
    padding: 50px;  
}  
#btn{  
    color: #fff;  
    background: #337ab7;  
    padding: 7px;  
    margin-left: 70%;  
} 
#p{color: #fff}
	
	</style>
</head>  
<body>  
       <div id = "frm">  
	<div style="text-align:center;">
        <h1 style="display:inline-block;color:white; font-weight: bold;margin-bottom:2%;text-decoration: underline overline;">Login</h1>  </div>
        <form name="f1"  onsubmit = "return validation()" method = "POST">  
            <p id = "p">  
                <label> UserName: </label>  
                <input type="text" name="unm" value=""  placeholder="username">
            </p>  
            <p id = "p">  
                <label> Password: </label>  
               <input type="password" name="pass" value="" placeholder="password" ></p>
            </p>  
           <p class="remember_me">
			<label style="color:white;">
				<input type="checkbox" name="rm" id="remember_me">
				Remember me on this computer
			</label>
			</p>
			<p class="btn"><input type="submit" name="log" value="Login"></p>
        </form>
</body>     
</html>  
<?php
if(isset($_REQUEST['log']))
{
$unm=$_REQUEST['unm'];
$pass=$_REQUEST['pass'];

if($unm=="poojasuthar" && $pass="190023107009")
{
   echo '<script>alert("Login Successful!!")</script>';
  }
    else
  {
   echo '<script>alert("Login Failed!!")</script>';
  }	
		if($_REQUEST['rm'])
		{
		setcookie("user",$unm,time()+15);	
		setcookie("pass",$pass,time()+15);	
		}
}
?>
  
