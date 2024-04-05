<?php

//importa o arquivo de conexão
include_once("conect.php");

//importa o arquivo de classe Crud
include_once("Crud.php");

// echo $conect;
$obj = new Crud($conect);

// $obj->readInfo();
$dados = $obj->getAll();

echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";

echo "<main>
        
<header>Selecione a operação com o Banco de Dados</header>";

// var_dump($dados);

echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Idade</th><th>E-mail</th><th>Data</th><th>Editar</th></tr>";

foreach($dados as $info){

    echo "<tr><td>".$info['nome']."</td>
    <td>".$info['idade']."</td>
    <td>".$info['email']."</td>
    <td>".$info['data_now']."</td>
    <td><a href=formEdit.php?id=".$info['id'].">Editar</a></td>
    </tr>";
    

}  
echo "</table>";
echo "</main>"



?>