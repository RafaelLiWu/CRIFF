<?php
date_default_timezone_set('America/Sao_Paulo');

$ufs = array("RJ", "SP", "MG", "ES", "GO", "DF", "BA", "TO", "AM");

$nome = filter_input(INPUT_POST, "textNome");
$email = filter_input(INPUT_POST, "textEmail", FILTER_SANITIZE_EMAIL);
$mensagem = filter_input(INPUT_POST, "textMensagem");
$cep = filter_input(INPUT_POST, "textCep");
$estado = filter_input(INPUT_POST, "textEstado");

if (isset($estado)) {
    switch ($estado) {
        case 0:
            $estado = "RJ";
            break;
        case 1:
            $estado = "SP";;
            break;
        case 2:
            $estado = "MG";
            break;
        case 3:
            $estado = "ES";
            break;
        case 4:
            $estado = "GO";
            break;
        case 5:
            $estado = "DF";
            break;
        case 6:
            $estado = "BA";
            break;
        case 7:
            $estado = "TO";
            break;
        case 0:
            $estado = "AM";
            break;
    }
};

if (isset($estado, $nome, $email, $mensagem, $cep)) {
    $fopen = fopen("logs/" . date("H-i-s") . ".txt", "a+");
    $str = "{$nome};{$email};{$cep};{$estado};{$mensagem}";
    fwrite($fopen, $str);
    fclose($fopen);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0, shrink-to-fit=no">
    <title>CrIFF</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <model>
        <div class="carousel-item">
            <div class="foto bg-primary">
                <div class="guy col-md-6 d-flex align-items-center p-0">
                    <div class="foto-img">
                        <img src="assets/icon.jpg">
                    </div>
                    <div class="guy-name">
                        <h6 class='mb-0 text-white'>name</h6>
                        <small class="text-white">Informática 2A</small>
                    </div>
                </div>
                <div class="guy-social col">
                    <a href="#" target="_blank" id="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank" id="github"><i class="fab fa-github"></i></a>
                    <a href="#" target="_blank" id="facebook"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div class="content bg-primary">
                <p class="text-light">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur semper tortor eu consectetur. Cras vel maximus orci, at fermentum sapien. Vivamus et blandit velit, sed viverra elit. Proin eget laoreet ex. Curabitur vel ligula lorem. Nam tortor
                    ante, fermentum sed ultrices efficitur, lacinia in ante. Curabitur bibendum quam dui, eu graa metus volutpat quis.
                </p>
            </div>
        </div>
    </model>


    <header class="header container-fluid bg-dark">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">CR<span class="iff">IFF</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-color:red;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
                <ul class="navbar-nav my-0 my-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
        </nav>
    </header>

    <section class="apresentacao container">
        <div class="apresentacao-imagem">
            <img src="assets/8266.jpg" alt="" class="img-fluid">
        </div>
        <div class="apresentacao-content">
            <p class="apresentacao-content--titulo">
                CRIFF<br>
                <small class="text-muted">Informática</small>
            </p>
            <p class="apresentacao-content--corpo">
                O Site CRIFF, é formado por 5 alunos de informática do Instituto Federal Fluminense, com a iniciativa acadêmica de mostrar os nossos projetos feito nesse período de EAD.
            </p>
            <p class="apresentacao-content--corpo">
                O Grupo CRIFF foi criado em Setembro de 2021, formado por Carlos Daniel, Carlos Sérgio, Rafael Li Wu, Rafael Soares e Ronald Oliveira.
            </p>
        </div>
    </section>

    <main>
        <section class="sobre_nos container-fluid">
            <div class="sobre_nos-container container">
                <div class="sobre_nos-texto">
                    <p class="sobre_nos-texto--titulo">
                        Sobre nós
                    </p>
                    <p class="sobre_nos-texto--corpo">
                        Somos estudantes do "IFF" (Instituto Federal Fluminense), e estamos atualmente cursando informática no ensino remoto, durante todo o tempo do ensino médio.
                    </p>
                    <p class="sobre_nos-texto--corpo">
                        Estamos no segundo ano, e adoramos a tecnologia e suas inovações.
                    </p>
                </div>

                <div class="container-carousel">
                    <div class="carousel slide" id="apresentacao-carousel" data-interval="false">
                        <ol class="carousel-indicators">
                            <li data-target="#apresentacao-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#apresentacao-carousel" data-slide-to="1"></li>
                            <li data-target="#apresentacao-carousel" data-slide-to="2"></li>
                            <li data-target="#apresentacao-carousel" data-slide-to="3"></li>
                            <li data-target="#apresentacao-carousel" data-slide-to="4"></li>
                            <li data-target="#apresentacao-carousel" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">

                        </div>
                        <a class="carousel-control-prev" href="#apresentacao-carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-button" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#apresentacao-carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-button" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="projetos container mx-auto">
                <div class="projetos--buttons bg-dark">
                    <div class="projetos--buttons--item active">
                        <div class="projetos--buttons--item--img">
                            <img src="assets/cardsfabionico.png" class="img-fluid">
                        </div>
                        <div class="projetos--buttons--item--content">
                            <span>IF-Fabiânico</span>
                        </div>
                    </div>
                    <div class="projetos--buttons--item">
                        <div class="projetos--buttons--item--img">
                            <img src="assets/win.png" class="img-fluid">
                        </div>
                        <div class="projetos--buttons--item--content">
                            <span>Windowns</span>
                        </div>
                    </div>
                    <div class="projetos--buttons--item">
                        <div class="projetos--buttons--item--img">
                            <img src="assets/logo.jpg" class="img-fluid">
                        </div>
                        <div class="projetos--buttons--item--content">
                            <span>Olimpiadas 2028</span>
                        </div>
                    </div>
                    <div class="projetos--buttons--item">
                        <div class="projetos--buttons--item--img">
                            <img src="assets/img.png" class="img-fluid">
                        </div>
                        <div class="projetos--buttons--item--content">
                            <span>Úrsula</span>
                        </div>
                    </div>
                </div>
                <div class="projetos--computer container-fluid">
                    <div class="projetos--computer--content">
                        <div class="projetos--computer--content--title bg-dark">
                            <div class="projetos--computer--content--title--menu">
                                <div class="projetos--computer--content--title--menu--menu dropdown">
                                    <div class="projetos--computer--content--title--menu--menu--toggle dropdown-toggle" role="button" id="dropdown--menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    </div>
                                    <div class="dropdown-menu bg-dark" aria-labelledby="dropdown--menu">
                                        <div class="dropdown-item">
                                            <img src="assets/image13.jpg">
                                            <span>Nathan</span>
                                        </div>
                                        <div class="dropdown-item">
                                            <img src="assets/rafaelli.jpg">
                                            <span>Rafael Li Wu</span>
                                        </div>
                                        <div class="dropdown-item">
                                            <img src="assets/rafaelsoares.jpg">
                                            <span>Rafael Soares</span>
                                        </div>
                                        <div class="dropdown-item">
                                            <img src="assets/image4.jpg">
                                            <span>Ronald Oliveira</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="projetos--computer--content--title--menu--area">
                                    <div class="projetos--computer--content--title--menu--area--img" style="z-index: 4;">
                                        <img src="assets/image13.jpg">
                                    </div>
                                    <div class="projetos--computer--content--title--menu--area--img" style="margin-left: 15px; z-index: 3;">
                                        <img src="assets/rafaelli.jpg">
                                    </div>
                                    <div class="projetos--computer--content--title--menu--area--img" style="margin-left: 30px; z-index: 2;">
                                        <img src="assets/rafaelsoares.jpg">
                                    </div>
                                    <div class="projetos--computer--content--title--menu--area--img" style="margin-left: 45px; z-index: 1;">
                                        <img src="assets/image4.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="projetos--computer--content--title--active">
                                CRIFF
                            </div>
                            <div class="projetos--computer--content--title--watch">
                                12:24:30
                            </div>
                        </div>
                        <div class="projetos--computer--content--body">
                            <p>
                                Esse foi o nosso primeiro projeto, um jogo feito na Godot Engine, onde o personagem Fabiânico deveria enfrentar os vilões Coronimati para salvar a escola. O jogo foi inspirado na situação que nós vivemos atualmente, onde o coronavírus é a principal inspiração
                                do vilão principal. E para o personagem controlado pelo jogador, a principal inspiração é o professor do IFF Campus Itaperuna, Fabiano Prado.
                            </p>
                            <p>
                                O Jogo está disponível para download no Google Drive.
                            </p>
                            <p>
                                E seu código fonte está no Github do CRIFF.
                            </p>
                            <div class="projetos--computer--content--body--social">
                                <a href="https://drive.google.com/drive/folders/1FELJSr8DxiBLaCl5b_-9zG9DWljtWRgY?usp=sharing" target="_blank">
                                    <i class="fab fa-google-drive text-success"></i>
                                </a>
                                <span style="cursor:default"> </span>
                                <a href="https://github.com/CrIFFInformatica/IF-Fabianico" class="" target="_blank">
                                    <i class="fab fa-github text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="projetos--computer--sociais">
                        <a href="#">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>





    <footer>
        <div class="container">
            <div class="footer-title d-flex flex-column align-items-center" id="contato">
                <span class="cr">CR<span class="iff">IFF</span></span>
                <small>Contato</small>
            </div>
            <div class="contato">
                <div class="container-fluid  mx-auto">

                    <form method="POST">
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <div class="form-group row">
                                    <label for="nome">Nome</label>
                                    <input type="name" id="nome" placeholder="Insira seu Nome" class="form-control" required maxlength="20" name="textNome">
                                </div>
                                <div class="form-group row">
                                    <label for="email">Email</label>
                                    <input type="Email" id="email" placeholder="Insira seu Email" class="form-control" required maxlength="40" name="textEmail">
                                </div>
                                <div class="form-group row">
                                    <label for="Cidade">Cidade</label>
                                    <input type="text" id="Cidade" placeholder="Insira sua Cidade" class="form-control" required maxlength="20" name="textCidade">
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="estado">Estado</label>
                                        <select id="estado" name="textEstado" class="form-control">
                                            <?php
                                            for ($i = 0; $i < count($ufs); $i++) {
                                            ?>

                                                <option value="<?= $i; ?>">
                                                    <?= $ufs[$i]; ?>
                                                </option>

                                            <?php
                                            };
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cep">Cep</label>
                                        <input type="text" id="cep" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control textCep" maxlength="8" name="textCep" required>
                                        <small id="helpCep" class="form-text text-muted" style="font-size: 13px;">A Sigla ' - ' não é requisitado</small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ml-auto col-md-5 d-flex justify-content-center align-items-center" id="contato-mensagem" style="box-shadow: 0 0 1em black;background-color: #333;padding: 10px;">
                                <div class="form-group row d-flex h-75">
                                    <label for="mensagem" class="mx-auto">Escreva Sua Mensagem</label>
                                    <textarea class="form-control" id="mensagem" rows="8" style="resize: none;background-color: #444;border-radius: 10px;color: white;" name="textMensagem"></textarea>
                                </div>

                            </div>
                            <div class="form-group mx-auto">
                                <button type="submit" class="btn btn-dark" style="cursor:pointer;margin-top: 10px;">Enviar mensagem</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </footer>




    <script src="js/usersJson.js"></script>
    <script src="js/contentJson.js"></script>
    <script src="js/autoCarrousel.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>