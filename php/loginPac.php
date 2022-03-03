<?php
   
   include('banco.php');
    
   //criando uma variável para
   //receber o valor do email   
   $cpf = $_POST['cpf'];
   $senha = $_POST['senha'];
      
     
   //criando consulta para verificar a existencia 	  
   //do usuário
   $sql = "select * from paciente where cpf = '$cpf'
		   and password = '$senha'";
   
   //executando a consulta no banco
   $consulta = $conexao->query($sql);
   
   //verificar se a consulta deu certo
   if($consulta == true){
	   if($consulta->num_rows > 0){
		   $linha = $consulta->fetch_array(MYSQLI_ASSOC);
		   session_start();
		   $_SESSION['login'] = 'ok';
		   $_SESSION['id_pac'] = $linha['id_paciente'];
		   header('Location: ../main/pacient/index.php?mess=ok&id_pac='.$linha['id_paciente']);
	   }else{
		   header('Location: ../landing/loginPac.php?mess=erro');
	   }
   }
   

?>