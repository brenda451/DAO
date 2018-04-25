<?php
require_once ("config.php");

// CARREGA UM USUARIO
$user = new Usuario();

$user->loadbyUsername('bre');
echo $user;
