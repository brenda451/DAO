<?php
require_once 'config.php';


$sql = new Sql();

/CARREGA UMA LISTA
$lista = Usuario::getLista(); // pq nao cria uma instancia? pois chama direto o metodo por ser um metodo estatico. 
echo json_encode($lista);
