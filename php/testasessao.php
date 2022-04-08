<?php
  header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
  session_start();
  if(!isset($_SESSION['login'])){
	header('Location: ../../landing/loginPro.php?mess=logout'); 
  } 
?>