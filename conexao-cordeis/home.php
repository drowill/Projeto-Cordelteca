<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cordelteca da UFRN</title>
    <style>
        #justo{
        margin: 0;
        text-indent: 2rem;
        text-align: justify;
      }</style>
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
    <div class="container mt-5">
            <div class="align-items-center justify-content-center">
                <h1 class="text-center display-3">Bem-vindo ao Acervo</h1>
            </div>
    </div>
    <div class="container mt-5">
        <h3 class="text-center  mb-4">Cordelteca da UFRN: Poeta Djalma Mota</h3>
        <div class="row align-items-center">
            <div class=" text-center col-sm">
                <img class="img-fluid" src="https://anselmosantana.com.br/wp-content/uploads/2017/08/Memoria_e_cordel-12jun17-Wallacy_Medeiros_reduzida.jpg">
            </div>
            <div class="col-sm">
                <p class="text-justify float-md-start" id="justo">A Cordelteca da UFRN Poeta Djalma Mota criada em 2016 e situada no Centro de Ensino Superior do Seridó, com área de 25 m2, tem como objetivos reunir cordéis de diversas temporalidades e de locais de produção para que sejam utilizados como fontes de pesquisa para diversas áreas do conhecimento; fazer com que a Cordelteca seja um espaço para salvaguardar cordéis em seus diversos suportes; proporcionar um espaço de estudos e encontros para cordelistas e pesquisadores. A Cordelteca já possui um acervo de mais de dois mil folhetos e alguns muito raros, doados pelo Poeta Djalma Mota de seu acervo pessoal, pelo acervo de Monsenhor Ausônio Tércio, além de pessoas que guardaram estes folhetos durante décadas e da Academia Brasileira de Literatura de Cordel (ABLC). O acervo possui folhetos da década de 20 do século passado até a contemporaneidade. A cordelteca oferece local para pesquisa e contato direto com os folhetos do acervo. Após os folhetos serem digitalizados poderemos enviar sob pedido os folhetos para pesquisadores do Brasil e do mundo.</p>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <h3 class="text-center mb-4">Djalma Mota</h3>
        <div class="row text-center">
            <div class="col-md">
                <p class="text-justify float-md-start" id="justo">Formado em Geografia pela UFRN. Desde 1993 apresenta o programa “Violeiros do Seridó” na Rádio Rural de Caicó/RN. Atuou como membro do Clube dos Trovadores do Seridó (CTS) e da Academia de Trovas do Rio Grande do Norte (ATRN). Desde 2009 ministra a “Oficina de Cordel – Um Conto, Um Canto” pela Associação União do Sobrado, já tendo formado 80 novos cordelistas e publicado aproximadamente 500 títulos. Patrono da Cordelteca da UFRN que recebeu o seu nome. Publicou em 2017 o livro “Além das Quatro Linhas” e em 2018 “Quinze contos de cordel”. Possui mais de uma dezena de cordéis publicados, entre eles: “As proezas de Zé Carcará – O bar e o Jarro” (2011), “Caboclo apaixonado” (2012), “Festejando o mês junino” (2015), “Monsenhor Ausônio Tércio de Araújo – Um Desbravador da Cultura Popular” (2015), “O Romance de Sofia e Bento Braz” (2016), “O doutor e Brejeira” (2017), “Versejando os animais” (2017), “Meus versos feitos nas nuvens” (2017), “Lascaram Chico de Ana” (2017), “O poder do Canapu” (2017), “Trajetória de Netinho Caviloso” (2017), “Todo dia é dia” (2018), “O contador de mentiras” (2018).</p>
            </div>
            <div class="col-md">
                <img class="img-fluid" src="https://www.sneri.blog.br/wp-content/uploads/2015/03/DSC_0119.jpg" width="570px">
            </div>    
        </div>
    </div>
    <div class="container-fluid bg-info" >
        <div class="row text-center pt-1 pb-1">
            <div class="col-md">
                <i class="bi bi-envelope" style="font-size: 90px;"></i>
                <h3 class="text-center mt-3">Email</h3>
                <p class="text-center">cordeltecaufrncaico@gmail.com</p>
            </div>
            <div class="col-md link-dark">
                <i class="bi bi-youtube" style="font-size: 90px;" onclick="location.href='https://www.youtube.com/@cordeltecadaUFRN'" ></i>
                <h3 class="text-center mt-3" >Youtube</h3>
            </div>
            <div class="col-md">
                <i class="bi bi-pin-map-fill" style="font-size: 90px;"></i>
                <h3 class="text-center mt-3">Endereço</h3>
                <p class="text-center">R. Joaquim Gregório, 296 - Penedo, Caicó - RN, 59300-000</p>
            </div>
          </div>
    </div>
</body>
</html>