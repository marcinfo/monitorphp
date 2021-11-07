

<?php
    
    $CON_CONEXAO = "mysql:host=monitor-umidade.mysql.database.azure.com;dbname=monitor_umidade_prototipo;charset=utf8";
    $CON_USUARIO = "marcelo";
    $CON_SENHA = "M@rcela20";
 
    try {
 
        $conexao = new PDO($CON_CONEXAO, $CON_USUARIO, $CON_SENHA);
 
        echo "Conectado com sucesso";
 
    } catch (PDOException $erro) {
 
        //echo "Erro: " . $erro->getMessage();
        echo "conexao_erro";
 
        exit;
    }
?>