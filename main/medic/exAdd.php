<?php
  //conexão com o banco
  include('../../php/banco.php');  
  
  //receber os dados por POST
  $tipoEx = $_POST['tipoEx']; 
  $dataEx = $_POST['dataEx']; 
  $descEx= $_POST['descEx'];
  $id_prof = $_POST['id_prof'];
  
  $sql = "insert into exame_fisico (id_exame,id_prof_saude,id_paciente,data,tipo,desc_exame)
							values (null,'$id_prof',null,NOW(),'$tipoEx','$descEx');";
					  
  //executando o insert
  $consulta = $conexao->query($sql);
  
  if($consulta == true){
    header('Location: infopac.php?mess=exAddOk&id_pac='.$id_pac.'');
  }else{
    header('Location: infopac.php?mess=exAddErro&id_pac='.$id_pac.'');
  }
?>