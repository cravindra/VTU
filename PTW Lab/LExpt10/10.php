<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.1//EN"
	"http://www.w3.org/tr/xhtml111/dtd/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>PhpTest</title>
	</head>
	<body>
		<?php
			session_start();
			if(IsSet($_SESSION['visitCount'])){
				$count=$_SESSION['visitCount'];
				$_SESSION['visitCount']=$_SESSION['visitCount']+1;
				
			}else{
				$_SESSION['visitCount']=1;
				$count=1;
			}
			echo "Visits : ".$count;
		?>
	</body>
</html>