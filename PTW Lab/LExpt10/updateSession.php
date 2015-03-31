<?php
	if(IsSet($_SESSION['visitCount'])){
		$count=$_SESSION['visitCount'];
		$_SESSION['visitCount']=$_SESSION['visitCount']+1;
		echo "Updating Value..";
	}
	else{
		$_SESSION['visitCount']=1;
		$count=1;
		echo "Setting Value..";
	}
	print "<a href='10.php'>Back</a>"
?>
