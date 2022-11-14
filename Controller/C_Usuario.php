<?php
// echo "hola";
use Model\M_Usuario;
require '../Model/M_Usuario.php';
require_once('../Model/M_Usuario.php');

$con = new M_Usuario();
$usuario = $con->getUsers();

// $username = $_POST['username'];

$usuarios = $con->getUsers();
// var_dump($usuarios);

// foreach($usuario as $user){
//     $username = $user['username'];
//     $password = $user['password'];
//     $email = $user['email'];
//     $created_on = $user['created_on'];
//     $last_login = $user['last_login'];
//     $active = $user['active'];
//     $first_name = $user['first_name'];
//     $last_name = $user['last_name'];
//     $rol = $user['rol'];
// }

$con->close();
// var_dump($usuarios);

$con->View('../View/users/user.php', $usuarios);
// require ('../View/users/user.php');

// $include_path='.;C:\xampp\php\PEAR;C:\xampp\htdocs\b2';

$con->View('../View/users/user.php', $usuario)

// require_once('../View/users/mainUuser.php');


?>