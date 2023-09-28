<?php 

if (! isset($_SESSION['admin'])){
    header('Location: /');
}

include ('connect.php');

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$local = $_POST['local'];
$data = $_POST['data'];
$capa = $_POST['capa'];
$pagina = $_POST['pagina'];
$volume = $_POST['volume'];
$origem = $_POST['origem'];
$armario = $_POST['armario'];
$prateleira = $_POST['prateleira'];


$query = "insert into tb_cordeis
(cor_titulo, cor_autor, cor_local, cor_data, cor_capa, cor_pagina, cor_volume, cor_origem, cor_armario, cor_prateleira)
values
('$titulo', '$autor', '$local', '$data', '$capa', '$pagina', '$volume', '$origem', '$armario', '$prateleira');";
$stm = $con->prepare($query);
$stm -> execute();

header('location: /lista');