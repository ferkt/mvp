<?php
  //conexão com o banco
  include('../../php/banco.php');  
  
  //receber os dados por POST
  $dataAtest = $_POST['dataAtest']; 
  $descAtest= $_POST['descAtest'];
  $tipoAtest= $_POST['tipoAtest'];
  $id_prof = $_POST['id_prof'];
  $id_pac = $_POST['id_pac'];
  
  $sql = "insert into atestado (id_atestado,id_prof_saude,id_paciente,data,tipo,desc_atestado)
							values (null,'$id_prof','$id_pac',NOW(),'$tipoAtest','$descAtest');";
					  
  //executando o insert
  $consulta = $conexao->query($sql);
  
  if($consulta == true){
    header('Location: infopac.php?mess=atestAddOk&id_pac='.$id_pac.'');
  }else{
    header('Location: infopac.php?mess=atestAddErro&id_pac='.$id_pac.'');
  }
?>