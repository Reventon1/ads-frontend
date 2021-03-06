<?php

$pdo = new PDO('mysql:host=localhost;dbname=testdb', 'root', 'root');

$prepare = $pdo -> prepare('INSERT INTO test (id) values (:id)');
$prepare -> bindvalue(':id', 132422);
$prepare -> execute();

if (isset($_GET['add'])) {
    echo 'Добавить объявление';
}

elseif (isset($_GET['id'])) {
    echo 'Показать объявление';
}

elseif (isset($_GET['all'])) {
    echo 'Показть все объявления';
}