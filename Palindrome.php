<html> 
<head>
<title> Palindrome number  </title>
<style>
	body{background:#DAF7A6   ;}
</style>
</head> 
<body>  
<div style="width:50%;">
		<h1 style="display:inline-block;color:orange; font-weight: bold;margin-bottom:2%;">Palindrome Numbers.</h1>
</div><br><br>
<form method="post">        
Enter a Number: <input type="text" name="num"/>
<button type="submit">Check</button>  
</form>  
<?php   
    if($_POST)  
    {  
        //get the value from form  
        $num = $_POST['num'];  
        //reversing the number  
        $reverse = strrev($num);  
          
        //checking if the number and reverse is equal  
        if($num == $reverse){  
            echo "The number $num is Palindrome";     
        }else{  
            echo "The number $num is not a Palindrome";   
        }  
}     
      ?>  
</body>  
</html>  
