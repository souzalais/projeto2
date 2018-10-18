<?php
 
    $conexao = mysqli_connect("localhost","root","");


    $db = mysqli_select_db($conexao, "meusite");
    

    $query = mysqli_query($conexao, "SELECT * FROM faleconosco");

 
    while($tabela = mysqli_fetch_array($query)){
        
        echo $tabela['nome']. "<br>";
        echo $tabela['email']. "<br>" ;
        echo $tabela['telefone']. "<br>";
        echo $tabela['mensagem'];
    }
    
?>