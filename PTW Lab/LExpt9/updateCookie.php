<?php
	function setCookies(){
		$day=date('h-i-s, j-m-y');
		setcookie("lastSet",$day,time()+10000);
	}
	setCookies();
	print "<a href='9.php'>Back</a>";
?>
