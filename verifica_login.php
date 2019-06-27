<?php
session_start();
if(!$_SESSION['usuario']) {
	echo "teste";
	header('Location: index.php');
	exit();
}
?>
