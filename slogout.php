/* CSS Document */

<?php
	session_start();
		$session=$_SESSION['s_n'];
			if($session=="")
			{
				header('location:studentlogin1.php');	
			}
		session_destroy();
		header('location:studentlogin1.php');
?>