<?php

//instacia da nossa conexao com banco de dados
include('../conexao/conn.php');

try{
//gerar a query de inserçao de dados no banco de dados
$sql = "INSERT INTO CONTATO (NOME, TELEFONE, CELULAR, EMAIL) VALUES (?, ?, ?, ?)";
//iremos preparar a nossa query para gerar o objeto ded inserção ao banco de dados
$stmt = $pdo->prepare($sql);
$stmt->execute([
      $_REQUEST['NOME'],
      $_REQUEST['TELEFONE'],
      $_REQUEST['CELULAR'],
      $_REQUEST['EMAIL']
]);
$dados = array(
       'type' = 'sucess',
       'mensagem' = 'registro salvo com sucesso!'
);

}catch (PDOException $e) {
    $dados = array(
        'type' = 'error',
        'mensagem' = 'erro ao salvar o registro: ' .$e
    );   

}