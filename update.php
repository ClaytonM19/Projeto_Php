<?php

$nome = $_POST['pessoa'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$id = $_POST['id'];

// echo $id;

//importa o arquivo de conexão
include_once("conect.php");

//importa o arquivo de classe Crud
include_once("Crud.php");

// echo $conect;
$obj = new Crud($conect);
$obj->update($id,$nome,$idade,$email);


?>