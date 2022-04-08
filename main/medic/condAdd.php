<?php
  //conexão com o banco
  include('../../php/banco.php');  
  
  //receber os dados por POST
  $descCond= $_POST['descCond'];
  $id_prof = $_POST['id_prof'];
  $id_pac = $_POST['id_pac'];
  
  $sql = "insert into conduta (id_conduta,id_prof_saude,id_paciente,data,desc_conduta)
							values (null,'$id_prof', '$id_pac' ,NOW(),'$descCond');";
					  
  //executando o insert
  $consulta = $conexao->query($sql);
  
  if($consulta == true){
    header('Location: infopac.php?mess=condAddOk&id_pac='.$id_pac.'');
  }else{
    header('Location: infopac.php?mess=condAddErro&id_pac='.$id_pac.'');
  }
?>