<?php
    include 'admin/error.php';
	session_start();
	session_destroy();
	//session_unset($_SESSION['USERNAME']);
	//session_unset($_SESSION['ROLE']);
	//session_unset($_SESSION['ID']);
	header("Location:/project/project_test.php/index.php");
	die();
?>
