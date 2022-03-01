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
  $descAi = $_POST['descAi'];
  $dataHf = $_POST['dataHf'];
  $descHf = $_POST['descHf'];
  $tipoHo = $_POST['tipoHo'];
  $dataHo = $_POST['dataHo'];
  $descHo = $_POST['descHo'];
  $id_prof = $_POST['id_prof'];
  
  $sql = [];
  //insert's
  $sql[0] = "insert into queixa (id_queixa, id_prof_saude, id_paciente, data, desc_queixa) 
            values (null, '$id_prof', null, '$dataQ', '$descQ')";

  $sql[1] = "insert into rev_sistema (id_rev_sistema, id_prof_saude, id_paciente, data, tipo, desc_rev_sistema) 
            values (null, '$id_prof', null, '$tipoS', '$dataS', '$descS')";

  $sql[2] = "insert into h_molestia (id_h_molestia, id_prof_saude, id_paciente, data, desc_h_molestia) 
            values (null, '$id_prof', null, '$dataM', '$descM')";

  $sql[3] = "insert into h_doenca (id_h_doenca, id_prof_saude, id_paciente, data, desc_h_doenca) 
            values (null, '$id_prof', null, '$dataD', '$descD')";

  $sql[4] = "insert into medic_uso (id_medic_uso, id_prof_saude, id_paciente, data, desc_medic_uso) 
            values (null, '$id_prof', null, '$dataMed', '$descMed')";

  $sql[5] = "insert into hospitalizacao (id_hospitalizacao, id_prof_saude, id_paciente, data, tipo, desc_hospitalizacao) 
            values (null, '$id_prof', null, '$tipoH', '$dataH', '$descH')";

  $sql[6] = "insert into doenca_mental (id_doenca_mental, id_prof_saude, id_paciente, data, desc_doenca_mental) 
            values (null, '$id_prof', null, '$dataDm', '$descDm')";  

  $sql[7] = "insert into alergia_himunizacao (id_alergia_himunizacao, id_prof_saude, id_paciente, data, tipo, desc_alergia_himunizacao) 
            values (null, '$id_prof', null, '$tipoAi', '$dataAi', '$descAi')";            
 
  $sql[8] = "insert into h_familiar (id_h_familiar, id_prof_saude, id_paciente, data, desc_h_familiar) 
            values (null, '$id_prof', null, '$dataHf', '$descHf')";            
  
  $sql[9] = "insert into h_ocupacional (id_h_ocupacional, id_prof_saude, id_paciente, data, tipo, desc_h_ocupacional) 
  values (null, '$id_prof', null, '$tipoHo', '$dataHo', '$descHo')"; 
  
  
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
    echo 'ok';
    //header('Location: infopac.php?mess=addOk');
  }else{
    echo 'erro';
    //header('Location: infopac.php?mess=addErro');
  }
?>