<?php

$hostName = 'localhost';
$username = 'root';
$password = '';
$database = 'shafest';

try {
    $db = new PDO("mysql:host=$hostName;dbname=$database", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo $e->getMessage();
    die;
}

// ID
$id = (empty($_GET['id'])) ? null : $_GET['id'];

$stmt = $db->prepare('
    SELECT *
    FROM articles
    ' . (empty($_GET['id']) ? '' : 'WHERE id = :id') . '
    ORDER BY id ASC
    LIMIT 1000
    ');

if(!empty($id)){
    $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
}

$stmt->execute();
header('Content-Type: application/json');

echo json_encode($stmt->fetch(\PDO::FETCH_ASSOC));
