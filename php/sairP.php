<?php
  session_start();
  session_destroy();
	header('Location: ../landing/loginPac.php?mess=logout');
?>