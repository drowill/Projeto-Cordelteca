<?php 

if (! isset($_SESSION['admin'])){
    header('Location: /');
}

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cordeis</title>
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
        <h1>Bem vindo, <?php echo $_SESSION['admin'] ?></h1>
        <a class="btn btn-danger" href='/logout' >Logout</a>
    </div>
    
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-stripped table-hover">
                    <h3 class="">Lista de Cordeis</h3>
                    <thead class="">
                        <tr><th>Titulo</th><th>Autor</th><th>Local</th><th>Data</th><th>Artista da Capa</th><th>Pag.</th><th>Origem</th><th colspan="3">Opções</th></tr>
                    </thead>
                    <?php
                    
                    $dados = buscar($con);
                    //var_dump($dados);
                    foreach ($dados as $key => $value){
                        echo "<tr>";
                        
                        echo "<td>".$value['cor_titulo']."</td>";
                        echo "<td>".$value['cor_autor']."</td>";
                        echo "<td>".$value['cor_local']."</td>";
                        echo "<td>".$value['cor_data']."</td>";
                        echo "<td>".$value['cor_capa']."</td>";
                        echo "<td>".$value['cor_pagina']."</td>";
                        echo "<td>".$value['cor_origem']."</td>";
                        echo "<td><a class='btn btn-danger' onclick=excluir(".$value['cor_id'].") >Excluir</a></td>";
                        echo "<td><a class='btn btn-success' href='/opcao.php?id_editar=".$value['cor_id']."'>Editar</a></td>";
                        echo "<td><a class='btn btn-info' href='/visualize'>Visualizar</a></td>";
                        echo "</tr>";
                    

                        
                        
                    ?>
                    <script>
                        function excluir(id){
                            var href = "/opcao.php?id_excluir="+id;
                            if (confirm('Tem certeza que deseja excluir?')){
                                location.replace(href);
                            } else {
                                exit();
                            }
                        }
                    </script>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
    
    
    
</body>
</html>