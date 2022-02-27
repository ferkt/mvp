<?php
  //conexão com o banco
  include('../../php/banco.php');  
  
  //receber os dados por POST
  $dataQ = $_POST['dataQ']; 
  $descQ = $_POST['descQ'];
  $tipoS = $_POST['tipoS'];
  $dataS = $_POST['dataS'];
  $descS = $_POST['descS'];
  $dataM = $_POST['dataM'];
  $descM = $_POST['descM'];
  $dataD = $_POST['dataD'];
  $descD = $_POST['descD'];
  $dataMed = $_POST['dataMed'];
  $descMed = $_POST['descMed'];
  $tipoH = $_POST['tipoH'];
  $dataH = $_POST['dataH'];
  $descH = $_POST['descH'];
  $dataDm = $_POST['dataDm'];
  $descDm = $_POST['descDm'];
  $tipoAi = $_POST['tipoAi'];
  $dataAi = $_POST['dataAi'];
  $dataHf = $_POST['dataHf'];
  $descHf = $_POST['descHf'];
  $tipoHo = $_POST['tipoHo'];
  $dataHo = $_POST['dataHf'];
  $descHo = $_POST['descHo'];
  $id_prof = $_POST['id_prof']
  
  //insert's
  $sql = "insert into tb_aluno (cod_aluno,cod_escola,nome,email,matricula,senha)
					  values (null,'$escola','$nome','$email','$matricula','$senha');";
					  
  //executando o insert
  $consulta = $conexao->query($sql);
  
  if($consulta == true){
	  header('Location: aluno.php?mess=ok');
  }else{
	  header('Location: aluno.php?mess=erro');
  }
?>