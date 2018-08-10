<?php

// $hostName = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'shafest';

// try {
//     $db = new PDO("mysql:host=$hostName;dbname=$database", $username, $password);
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e) {
//     echo $e->getMessage();
//     die;
// }

// // ID
// $id = (empty($_GET['id'])) ? null : $_GET['id'];

// $stmt = $db->prepare('
// SELECT * FROM `articles`
    
//     ');

// if(!empty($id)){
//     $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
// }

// $stmt->execute();
// header('Content-Type: application/json');

// echo json_encode($stmt->fetch(\PDO::FETCH_ASSOC));


$host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbName = 'bk_kozara';

    $conn = new mysqli($host, $user, $pass, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
    //echo "Connected successfully";

$sqlRes = "SELECT * FROM marathon";
$result = mysqli_query($conn, $sqlRes);

while($r = mysqli_fetch_assoc($result)) {
$rows[] = $r;
}

echo json_encode($rows);

?>