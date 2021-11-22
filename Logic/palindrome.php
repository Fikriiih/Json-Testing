<?php 
if (isset($_POST['smb'])) {
	$pali = ($_POST['str']);
	$rev = strrev($pali);	

	if ($pali == $rev ) {
		echo "$pali is palindrome";
	}else{
		echo "$pali is not palindrome";
	}
}
 
?>
<form method="POST">
	Masukan kata : <input type="textbox" name="str" required/>
	<input type="submit" name="smb"/>
</form>