<?php 
function connect() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "php_crud";
    try {
    $pdo = new PDO ("mysql:host=" .$host. ";dbname=" .$bd, $user, $pass);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}catch(PDOException $e) {
    die($e -> getMessage());

};
   
}
?>