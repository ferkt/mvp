<?php
session_start();
include('banco.php');
    
   //criando uma variável para
   //receber o valor do email   
   $email = $_POST['email'];
   $senha = $_POST['senha'];
      
     
   //criando consulta para verificar a existencia 	  
   //do usuário
   $sql = "select * from tb_aluno where email = '$email' or matricula= '$email'
		   and senha = '$senha'";
   //echo $sql;
   //executando a consulta no banco
   $consulta = $conexao->query($sql);
   
   //verificar se a consulta deu certo
   if($consulta == true){
	   if($consulta->num_rows > 0){
		   //echo 'iei';
		   $linha = $consulta->fetch_array(MYSQLI_ASSOC);
		   
		   $_SESSION['login'] = 'ok';		   
		   $_SESSION['nome'] = $linha['nome'];
		   $_SESSION['email'] = $linha['email'];		   
		   $_SESSION['codaluno'] = $linha['cod_aluno'];
		   
		   //echo $_SESSION['codaluno'];
		   
		   
		    
		   //$_SESSION['tipousu'] = $linha['tipousu'];
		   //echo $_SESSION['tipousu'];
		   header('Location: ../aluno/dist/principal.php?mess=ok');
	   }else{
		   header('Location: ../index.php?mess=erro');
	   }
   }
   

?>