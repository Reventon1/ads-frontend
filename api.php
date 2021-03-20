<?php

$pdo = new PDO('mysql:host=localhost;dbname=ads_db', 'root', 'root');

if (isset($_GET['add'])) {

    $text = $_POST['text'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $p = $pdo -> prepare(
        "INSERT INTO ads (text, name, phone) value (:text, :name, :phone)"
    );

    $p -> bindvalue(':text', $text);
    $p -> bindvalue(':name', $name);
    $p -> bindvalue(':phone', $phone);
    $p -> execute();
}

else if (isset($_GET['all'])) {

    $q = $pdo -> query('SELECT * FROM ads');

    $r = $q -> fetchAll(PDO::FETCH_ASSOC);

    header('Content-type: application/json');
    
    echo json_encode($r);
}

