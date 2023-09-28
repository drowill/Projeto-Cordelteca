<?php 

if (! isset($_SESSION['admin'])){
    header('Location: /');
}

include 'connect.php';

if(isset($_GET['id_excluir'])){
    $query = "delete from tb_cordeis where cor_id =".$_GET['id_excluir'].";";
    $stm = $con->prepare($query);
    $stm -> execute();
    header('location: /lista');
} else if ((isset($_GET['id_editar']))){
    header('location: /editar?id='.$_GET['id_editar']);
}

//header("location:index.php");
//exit();
