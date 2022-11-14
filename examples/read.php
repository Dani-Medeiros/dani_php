<?php

require __DIR__ . "/../vendor/autoload.php";

/* ;
use CoffeeCode\DataLayer\Connect;

$conn = Connect::getInstance();
$error = Connect::getError();

if($error) {
    echo $error->getMessage();
    die();
}

$query = $conn->query("SELECT * FROM professores");
var_dump($query->fetchAll()); */

use Source\Models\Professor;

$professor = new Professor();
$list = $professor->find()->fetch(true);


/** @var $professorItem Professor */
foreach($list as $professorItem) {
    var_dump($professorItem->nome);
    foreach( $professorItem->materias() as $materias){
        var_dump($materias->data());
    } 
}