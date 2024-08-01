<?php
    //Importando a conexao
    require 'conexao.php';

    //adicionando os valores do metodo post em variaveis
    $id = $_POST['inputid'];

    //Excluindo dados no banco do SQL
    $sql = "DELETE FROM aula WHERE id_usuario = " . $id;

    //Verificar se não ocorreu nenhum erro na exclusão de dado
    if($conn->query($sql) === TRUE){
        echo "Excluido com Sucesso";
    } else{//Caso de Erro aparecera uma mensagem de erro
        echo "Erro " . $conn->error;
    }
    //Finalizando a sessão
    $conn->close();
?>