<?php
   
   include('banco.php');
    
   //criando uma variável para
   //receber o valor do email   
   $cpf = $_POST['cpf'];
   $senha = $_POST['senha'];
      
     
   //criando consulta para verificar a existencia 	  
   //do usuário
   $sql = "select * from prof_saude where cpf = '$cpf'
		   and password = '$senha'";
   
   //executando a consulta no banco
   $consulta = $conexao->query($sql);
   
   //verificar se a consulta deu certo
   if($consulta == true){
	   if($consulta->num_rows > 0){
		   $linha = $consulta->fetch_array(MYSQLI_ASSOC);
		   session_start();
		   $_SESSION['login'] = 'ok';
		   $_SESSION['id_prof'] = $linha['id_prof_saude'];
		   header('Location: ../main/medic/index.php?mess=ok');
	   }else{
		   header('Location: ../landing/loginPro.php?mess=erro');
	   }
   }
   

?>