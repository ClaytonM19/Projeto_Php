<?php

include_once("conect.php");

include_once("Crud.php");

// $obj = new Crud($conect);

// $dado = $obj->getAll();

// // var_dump($dado);

// foreach ($dado as $info) {
//     echo $info['id']." - ".$info['nome']." - ".$info['idade']." - ".$info['email']." - ".$info['data_now']."<br>";
// }

// echo "<table border='1'>";
// echo "<tr><th>Nome</th><th>Idade</th><th>E-mail</th><th>Data</th></tr>";
// foreach($dado as $info){

//     echo "<tr><td>".$info['nome']."</td>
//     <td>".$info['idade']."</td>
//     <td>".$info['email']."</td>
//     <td>".$info['data_now']."</td></tr>";

// }  
// echo "</table>";

$nome = $_POST['nome'];



$obj = new Crud($conect);

$dado = $obj->readInfoAll($nome);

// var_dump($dado);

// echo $dado["nome"];
echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";

echo "<main>
        
<header>Registros   </header>";

echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Idade</th><th>E-mail</th><th>Data</th></tr>";

foreach($dado as $info){

    echo "<tr><td>".$info['nome']."</td>
    <td>".$info['idade']."</td>
    <td>".$info['email']."</td>
    <td>".$info['data_now']."</td>
    </tr>";
    

}  
echo "</table>";
echo "</main>";
