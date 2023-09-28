<?php 

if (! isset($_SESSION['admin'])){
    header('Location: /');
}

include 'connect.php';

$id = $_GET['id'];
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

$query = "update tb_cordeis set 
cor_titulo = '$titulo',
cor_autor = '$autor', 
cor_local = '$local', 
cor_data = '$data', 
cor_capa = '$capa',  
cor_pagina = '$pagina',  
cor_volume = '$volume',  
cor_origem = '$origem',  
cor_armario = '$armario',  
cor_prateleira = '$prateleira'
where cor_id = '$id'
";
$stm = $con->prepare($query);
$stm -> execute();

header('location: /lista');

?>