<!DOCTYPE html>
<html>
<head>
<title>Difference betweeen two input dates</title>
<style type="text/css">
</style>
</head>
<?php 
extract($_POST);
if(isset($findDiff))
{
$Datediff = abs(strtotime($date1) - strtotime($date2));
$years = floor($Datediff / (365*60*60*24) / (365*60*60*24));
$months = floor(($Datediff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($Datediff - $years * 365*60*60*24 - $months * 30*60*60*24) / (60*60*24));
if($days%2==0){
$style="background:blue;color:black";
echo "<body style=$style colspan=2 align=center name=tab>";
}
else{
$style2="background:red;color:black";
echo "<body style=$style2 colspan=2 align=center name=tab>";
 
}
echo "</tr>";
}
?>
<div style="height:100%; width:100%; background-color:#DAF7A6;text-align:center; ">
		<h1 style="display:inline-block;color:orange; font-weight: bold;margin-bottom:2%;">php code to calculate the number of days between to two input dates if the difference is
even number then render background color as blue or red.</h1>
</div>
<form method="post" >
<table width="500" border="1" cellspacing="5" cellpadding="5" align="center" style="margin-top: 
150px;">
<tr>
<th>Select First Date</th>
<td><input type="date" name="date1" placeholder="Select Date1"/></td>
</tr>
<tr>
<th>Select Second Date</th>
<td><input type="date" name="date2" placeholder="Select Date2"/></td>
</tr>
<tr>
<th colspan="2" scope="row">
<input type="submit" name="findDiff" value="Find Difference" />
</th>
</tr>
<tr>
<th  colspan="2" scope="row">
The Difference is shown below:
</th>
</tr>
<tr>
<th colspan="2" scope="row">
<?php echo $days;?>
</th>
</tr>
 
</table>
</form>

</body>
</html>