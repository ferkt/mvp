<?php
  $conexao = new mysqli('localhost','escol964_sasv','bizu231200','escol964_dbsasv');
   
   //verificando conexão com a base de dados
   if(mysqli_connect_errno()) 
	  trigger_error(mysqli_connect_error());
      echo mysqli_connect_error();
?>