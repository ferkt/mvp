<?php
  //conexão com o banco
  include('../../php/banco.php');  
  
  //receber os dados por POST
  $dataDiag = $_POST['dataDiag']; 
  $descDiag= $_POST['descDiag'];
  $obsDiag= $_POST['obsDiag'];
  $id_prof = $_POST['id_prof'];
  $id_pac = $_POST['id_pac'];
  
  $sql = "insert into diagnostico (id_diagnostico,id_prof_saude,id_paciente,data,desc_diagnostico,obs)
							values (null,'$id_prof','$id_pac','$dataDiag','$descDiag','$obsDiag');";
					  
  //executando o insert
  $consulta = $conexao->query($sql);
  
  if($consulta == true){
	  header('Location: infopac.php?mess=atestAddOk&id_pac='.$id_pac.'');
  }else{
	  header('Location: infopac.php?mess=atestAddErro');
  }
?>