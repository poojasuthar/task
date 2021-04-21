<html>
<head>
<title> Factorial Program</title>
<style>
	body{background:#DAF7A6  ;}
</style>
</head>
<body>
<div style="width:50%;">
		<h1 style="display:inline-block;color:orange; font-weight: bold;margin-bottom:2%;">Factorial Number.</h1>
</div><br><br>
<form method="POST">
<label>Enter a number</label>
<input type="text" name="number" />
<input type="submit" name="submit"  />
</form>
<?php
// example to demonstrate factorial of a number using form
 if($_POST){  
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['number'];  
        echo "Factorial of $number:<br><br>";  
        //start loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br>";  
 }
?>
</body>
</html>