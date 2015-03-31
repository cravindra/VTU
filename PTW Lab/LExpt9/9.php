<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.1//EN"
	"http://www.w3.org/tr/xhtml111/dtd/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>PhpTest</title>
		<?php
			if(!IsSet($_COOKIE['lastSet'])){
				$day=date('h-i-s, j-m-y');
				setcookie("lastSet",$day,time()+10000);
			}
		?>
	</head>
	<body>
		<?php
			echo "Cookie value : ".$_COOKIE['lastSet'];
		?>
		<form action="updateCookie.php">
			<input type="Submit" value="create"/>
		</form>
	</body>
</html>	
