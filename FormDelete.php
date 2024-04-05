<?php


$id = $_GET['id'];

// echo $id;

//importa o arquivo de conexão
include_once("conect.php");

//importa o arquivo de classe Crud
include_once("Crud.php");


$obj = new Crud($conect);

$obj->delete($id);
