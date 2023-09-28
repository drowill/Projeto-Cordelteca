<?php 

$rotas = [
    '/' => '/home.php',
    '/lista' => '/listar.php',
    '/criar' => '/criar.php',

    '/inserir' => '/inserir.php',
    '/opcao' => '/opcao.php',
    '/editar' => '/editar.php',
    '/update' => '/update.php',
    'entrar' => '/entrar.php',
    '/login' => '/login.php',
    '/check' => '/controllers/users/checkUser.php',
    '/admin/dashboard' => '/dashboard.php',
    '/logout' => '/logout.php',
    '/visualize' => '/visualize.php',

    // '/cordeis/store' => '/controllers/cordeis/store.php',
    // '/pages/cordeis/create' => '/pages/cordeis/create.html',

];

function rotear($uri, $rotas){
    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        header("Location: /");
    }
}


?>