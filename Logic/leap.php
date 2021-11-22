<?php 
if($_POST){
	$year = $_POST['year'];{
		if($year % 4 == 0 and $year % 100 !=0 or $year % 400 == 0){
			echo "$year leap year";
		}else {
			echo "$year not a leap year";
		}
	}
 }
 ?>
<form method="POST">
	Masukan tahun : 
	<input type="number" name='year' required/>
	<input type="submit" />
</form>