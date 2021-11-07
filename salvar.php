<?php 
    include "conexao.php";
 
    $s1_rec = $_GET['temperatura'];
    $s2_rec = $_GET['umidade'];
    $s3_rec = $_GET['sensorumi'];
    $s4_rec = $_GET['sensortemp'];
    $s5_rec = $_GET['idunidade'];
    $s6_rec = $_GET['sinalwifi'];
    $SQL_INSERT = "INSERT INTO monitoramento (temperatura,umidade,sensorumi,sensortemp,idunidade,sinalwifi) 
    VALUES (:TEMPERATURA, :UMIDADE, :SENSORUMI, :SERSORTEMP,:IDUNIDADE,:SINALWIFI)";
 
    $stmt = $conexao->prepare($SQL_INSERT);
 
    $stmt->bindParam(":TEMPERATURA", $s1_rec);
    $stmt->bindParam(":UMIDADE", $s2_rec);
    $stmt->bindParam(":SENSORUMI", $s3_rec);
    $stmt->bindParam(":SERSORTEMP", $s4_rec);
    $stmt->bindParam(":IDUNIDADE", $s5_rec);
    $stmt->bindParam(":SINALWIFI", $s6_rec);
    $conexao = NULL;
    if($stmt->execute()) {
 
        echo "insert_ok";
        $conexao = NULL;
    } else {
 
        echo "insert_erro";
        $conexao = NULL; 
    }
    $conexao = NULL;
?>