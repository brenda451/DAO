<?php

require_once 'config.php';

$sql = new Sql();

$usuario = $sql->select("SELECT * FROM user_cadastro");


echo json_encode($usuario);