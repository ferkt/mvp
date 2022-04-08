<?php
  //conexão com o banco
  include('../../php/banco.php');  
  
  //receber os dados por POST
  $dataCond = $_POST['dataPresc']; 
  $descCond= $_POST['descPresc'];
  $id_prof = $_POST['id_prof'];
  $id_pac = $_POST['id_pac'];
  
  $sql = "insert into prescricao (id_prescricao,id_prof_saude,id_paciente,data,desc_prescricao)
							values (null,'$id_prof', '$id_pac' ,NOW(),'$descCond');";
					  
  //executando o insert
  $consulta = $conexao->query($sql);
  
  if($consulta == true){
    header('Location: infopac.php?mess=prescAddOk&id_pac='.$id_pac.'');
  }else{
    header('Location: infopac.php?mess=prescAddErro&id_pac='.$id_pac.'');
  }
?>