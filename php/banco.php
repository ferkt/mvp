<?php
  $conexao = new mysqli('185.211.7.102','u789179617_fer','Meuhubsaude1.','u789179617_bd_alpha');
   
   //verificando conexão com a base de dados
   if(mysqli_connect_errno()) 
	  trigger_error(mysqli_connect_error());
      echo mysqli_connect_error();
?>