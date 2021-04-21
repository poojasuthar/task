<html>
 <head>
  <style>
   div{
    display: inline-block;
    width: 13px;
   } 
   body{
		background:#DAF7A6  ;
	  }
  </style>
 </head>
<body>

<div style="width:40%; background-color:;text-align:; ">
		<h1 style="display:inline-block;color:orange; font-weight: bold;margin-bottom:2%;">Alphabet Triangles.</h1>
</div><br><br>
<?php
$alpha = range('A', 'Z');
for($i=0; $i<=4; $i++)
{
 for($j=4; $j>=$i; $j--)
  echo "<div>&nbsp;</div>";
 for($k=0; $k<=$i; $k++)
  echo "<div>" . $alpha[$k] . "</div>";
 $n = $k - 1;
  for($m = 0; $m < $i; $m++)
 echo "<div>" . $alpha[--$n] . "</div>";
 echo "<br>";
}
?>
</body>
</html>