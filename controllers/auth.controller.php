
<?php
include 'db.controller.php';

$user = $_POST['usuario'];
$password = $_POST['password'];
$rows = [];
$sql = "SELECT nombre, telefono FROM persona WHERE usuario = '$user' AND contrasenia = '$password' ";
$sth = $conn->query($sql);
while( $row = $sth->fetch(PDO::FETCH_ASSOC)){
    $rows[] = $row;
    
}



if(empty($rows)){
    header('Location : ../views/login.view.php');
    die();
    
    
}else{
    header('Location: ./views/home.view.php');
    die();
}
