<?php
  //conexão com o banco
  include('../../php/banco.php');  
  
  //receber os dados por POST
  $data = date('d/m/Y'); 
  $descQ = $_POST['descQ'];
  $tipoS = $_POST['tipoS'];
  $descS = $_POST['descS'];
  $descM = $_POST['descM'];
  $descD = $_POST['descD'];
  $descMed = $_POST['descMed'];
  $tipoH = $_POST['tipoH'];
  $descH = $_POST['descH'];
  $descDm = $_POST['descDm'];
  $tipoAi = $_POST['tipoAi'];
  $descAi = $_POST['descAi'];
  $descHf = $_POST['descHf'];
  $tipoHo = $_POST['tipoHo'];
  $descHo = $_POST['descHo'];
  $id_prof = $_POST['id_prof'];
  $id_pac = $_POST['id_pac'];
  
  $sql = [];
  //insert's
  $sql[0] = "insert into queixa (id_queixa, id_prof_saude, id_paciente, data, desc_queixa) 
            values (null, '$id_prof', '$id_pac', '$data', '$descQ')";

  $sql[1] = "insert into rev_sistema (id_rev_sistema, id_prof_saude, id_paciente, data, tipo, desc_rev_sistema) 
            values (null, '$id_prof', '$id_pac', '$tipoS', NOW(), '$descS')";

  $sql[2] = "insert into h_molestia (id_h_molestia, id_prof_saude, id_paciente, data, desc_h_molestia) 
            values (null, '$id_prof', '$id_pac', '$data', '$descM')";

  $sql[3] = "insert into h_doenca (id_h_doenca, id_prof_saude, id_paciente, data, desc_h_doenca) 
            values (null, '$id_prof', '$id_pac', '$data', '$descD')";

  $sql[4] = "insert into medic_uso (id_medic_uso, id_prof_saude, id_paciente, data, desc_medic_uso) 
            values (null, '$id_prof', '$id_pac', '$data', '$descMed')";

  $sql[5] = "insert into hospitalizacao (id_hospitalizacao, id_prof_saude, id_paciente, data, tipo, desc_hospitalizacao) 
            values (null, '$id_prof', '$id_pac', '$tipoH', '$data', '$descH')";

  $sql[6] = "insert into doenca_mental (id_doenca_mental, id_prof_saude, id_paciente, data, desc_doenca_mental) 
            values (null, '$id_prof', '$id_pac', '$data', '$descDm')";  

  $sql[7] = "insert into alergia_himunizacao (id_alergia_himunizacao, id_prof_saude, id_paciente, data, tipo, desc_alergia_himunizacao) 
            values (null, '$id_prof', '$id_pac', '$tipoAi', '$data', '$descAi')";            
 
  $sql[8] = "insert into h_familiar (id_h_familiar, id_prof_saude, id_paciente, data, desc_h_familiar) 
            values (null, '$id_prof', '$id_pac', '$data', '$descHf')";            
  
  $sql[9] = "insert into h_ocupacional (id_h_ocupacional, id_prof_saude, id_paciente, data, tipo, desc_h_ocupacional) 
  values (null, '$id_prof', '$id_pac', '$tipoHo', '', '$descHo')"; 
  
  
  //executando o insert
  $consulta = [];

  for ($i = 0; $i < 10; $i++) { 
    $consulta[$i] = $conexao->query($sql[$i]);
  
    if($consulta[$i] == true){
      $controle = true;
    }else{
      $controle = false;
      echo $controle;
      break;
    }
  }

  if($controle == true){
    header('Location: infopac.php?mess=anaAddOk&id_pac='.$id_pac.'');
  }else{
    header('Location: infopac.php?mess=anaAddErro&id_pac='.$id_pac.'');
  }
?>