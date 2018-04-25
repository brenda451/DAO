<?php
require_once 'config.php';


$sql = new Sql();

// CARREGA UM USUARIO
$user = new Usuario();
$user->loadbyUsername('bre');
echo $user;
