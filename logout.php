<?php
	session_start();
	session_destroy();
	header("Location:login.php?reason=you are succesfully logouted");
	
?>