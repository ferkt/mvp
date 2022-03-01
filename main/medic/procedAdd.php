<?php
  //conexão com o banco
  include('../../php/banco.php');  
  
  //receber os dados por POST
  $dataProced = $_POST['dataProced']; 
  $descProced= $_POST['descProced'];
  $obsProced= $_POST['obsProced'];
  $id_prof = $_POST['id_prof'];
  $id_pac = $_POST['id_pac'];
  
  $sql = "insert into procedimento(id_procedimento,id_prof_saude,id_paciente,data,desc_procedimento,obs)
							values (null,'$id_prof', '$id_pac','$dataProced','$descProced','$obsProced');";
					  
  //executando o insert
  $consulta = $conexao->query($sql);
  
  if($consulta == true){
    header('Location: infopac.php?mess=procedAddOk&id_pac='.$id_pac.'');
  }else{
    header('Location: infopac.php?mess=procedAddErro&id_pac='.$id_pac.'');
  }
?>