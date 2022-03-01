<?php
  //conexão com o banco
  include('../../php/banco.php');  
  
  //receber os dados por POST
  $dataCond = $_POST['dataCond']; 
  $descCond= $_POST['descCond'];
  $id_prof = $_POST['id_prof'];
  
  $sql = "insert into conduta (id_conduta,id_prof_saude,id_paciente,data,desc_conduta)
							values (null,'$id_prof',null,'$dataCond','$descCond');";
					  
  //executando o insert
  $consulta = $conexao->query($sql);
  
  if($consulta == true){
	  header('Location: infopac.php?mess=condAddOk');
  }else{
	  header('Location: infopac.php?mess=condAddErro');
  }
?>