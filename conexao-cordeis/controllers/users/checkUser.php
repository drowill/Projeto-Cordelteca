<?php 

include __DIR__ . '\..\..\connect.php';

if (isset ($_POST['user'], $_POST['senha'])){
    $user = $_POST['user'];
    $senha = $_POST['senha'];

    $query = "select * from tb_admins where adm_user=:user and adm_senha=:senha";
    $stm = $con->prepare($query);
    $stm->bindValue(':user', $user);
    $stm->bindValue(':senha', $senha);
    $stm->execute();
    $dados = $stm->fetch(PDO::FETCH_ASSOC);

    if ($dados == null){
        header('Location: /login');
    } else {
        $_SESSION['admin'] = $dados['adm_nome'];
        header('Location: /admin/dashboard');
    }
}


?>