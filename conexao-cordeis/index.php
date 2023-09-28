<?php 

session_start();

include 'rotear.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

rotear($uri, $rotas);