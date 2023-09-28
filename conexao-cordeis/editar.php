<?php

if (! isset($_SESSION['admin'])){
    header('Location: /');
}

include 'connect.php';

$id = $_GET['id'];
$query = "select cor_id, cor_titulo, cor_autor, cor_local, cor_data, cor_capa, cor_pagina, cor_volume, cor_origem, cor_armario, cor_prateleira
from tb_cordeis where cor_id =".$_GET['id'].";";
$stm = $con->prepare($query);
$stm -> execute();  
$dados = $stm->fetchAll(PDO::FETCH_ASSOC);


//var_dump($dados);

foreach ($dados as $key => $value){
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cordel</title>
</head>
<body>
<nav class="sticky-top navbar navbar-expand-lg bg-info">
        <div class="container">
            <a class="navbar-brand" href="/">Cordelteca UFRN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php 
                
                if(!isset($_SESSION['admin'])){
                    echo '<ul class="navbar-nav">';
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" aria-current="page" href="/lista">Listar cordeis</a>';
                    echo '</ul>';
                    echo '<ul class="navbar-nav">';
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" aria-current="page" href="/login">Login</a>';
                    echo '</ul>';

                } else {
                    echo '<ul class="navbar-nav">';
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" aria-current="page" href="/admin/dashboard">Dashboard</a>';
                    echo '</ul>';
                    echo '<ul class="navbar-nav">';
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" aria-current="page" href="/criar">Criar Cordel</a>';
                    echo '</ul>';
                    echo '<ul class="navbar-nav">';
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" aria-current="page" href="/logout">Logout</a>';
                    echo '</ul>';
                }
                
                ?>
            </div>
        </div>
    </nav>
    <br>

    <div class="container">
        <h1>Editar cordel</h1>
        <div>
            <form method="post" action='/update.php?id=<?php echo $_GET['id']; ?>'>
                <div class="row">
                    <div class="col">
                        <label class="mb-2 form-label">Título:</label>
                        <input value="<?php echo $value['cor_titulo']; ?>" name="titulo" class="form-control" type="text">
                        <label class="mb-2 form-label">Autor:</label>
                        <input value="<?php echo $value['cor_autor']; ?>" name="autor" class="form-control" type="text">
                        <label class="mb-2 form-label">Local:</label>
                        <input value="<?php echo $value['cor_local']; ?>" name="local" class="form-control" type="text">
                        <label class="mb-2 form-label">Data:</label>
                        <input value="<?php echo $value['cor_data']; ?>" name="data" class="form-control" type="text">
                        <label class="mb-2 form-label">Artista da capa:</label>
                        <input value="<?php echo $value['cor_capa']; ?>" name="capa" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label class="mb-2 form-label">Numero de paginas:</label>
                        <input value="<?php echo $value['cor_pagina']; ?>" name="pagina" class="form-control" type="number">
                        <label class="mb-2 form-label">Volume:</label>
                        <input value="<?php echo $value['cor_volume']; ?>" name="volume" class="form-control" type="number">
                        <label class="mb-2 form-label">Origem:</label>
                        <input value="<?php echo $value['cor_origem']; ?>" name="origem" class="form-control" type="text">
                        <label class="mb-2 form-label">Armario:</label>
                        <input value="<?php echo $value['cor_armario']; ?>" name="armario" class="form-control" type="text">
                        <label class="mb-2 form-label">Prateleira:</label>
                        <input value="<?php echo $value['cor_prateleira'];} ?>" name="prateleira" class="form-control" type="text">
                    </div>
                    
                </div>
                <button class="mt-3 btn btn-info">Enviar</button>
            </form>
        </div>
    </div>

</body>
</html>