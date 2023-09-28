<?php 

// function connection() : PDO {
//     return new PDO('mysql:host=localhost;dbname=db_cordelteca;localhost','root','');
// }

$con = new PDO('mysql:host=localhost;dbname=db_cordelteca;localhost','root','');

function buscar($con){
    $stm = $con -> prepare('select * from tb_cordeis order by cor_id desc;');
    $stm -> execute();
    $dados = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}
