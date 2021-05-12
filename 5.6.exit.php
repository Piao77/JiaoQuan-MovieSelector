<!-- 注销 -->
<?php 
	session_start();	// 清除Session
	session_destroy();
	setcookie($cookiename, '');//??
	header("location:5.0.loginIndex.php");
	mysqli_close($link);
?>