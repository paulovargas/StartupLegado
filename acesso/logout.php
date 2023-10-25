<?
	include('config.php');
	session_destroy();

	header("location: {$_SERVER['HTTP_REFERER']}");
	header("location: ../");
?>