<?php
  session_start();
  if(!isset($_SESSION['login'])){
	header('Location: ../../landing/loginPro.php?mess=logout'); 
  } 
?>