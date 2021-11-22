<?php 

if (isset($_POST['smb'])) {
 	$str =$_POST['str'];
 	$revstr="";
	$count=strlen($str)-1;
	for ($i=$count; $i>=0; $i--) {
		$revstr.=$str[$i];
	}
	echo $revstr;
 } 

 ?>

<form method="POST">
	Masukan kata : <input type="textbox" name="str" required/>
	<input type="submit" name="smb"/>
</form>