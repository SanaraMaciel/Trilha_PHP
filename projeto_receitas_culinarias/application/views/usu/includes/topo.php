<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Receitas Culinárias</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <link href="<?= base_url(); ?>dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>dist/css/main.css" rel="stylesheet">
        <link href="<?= base_url(); ?>dist/css/carousel.css" rel="stylesheet">
        <link href="<?= base_url(); ?>dist/css/jquery.dataTables.min.css" rel="stylesheet">
        <link rel="icon" href="<?= base_url(); ?>dist/img/fork.ico">

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="padding-top: 50px;">
        <div class="navbar-wrapper">
            <div class="container">

                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?= base_url() ?>">Receitas Culinárias</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="<?= base_url() ?>">Ínicio</a></li>                        
                                <li><a href="<?= base_url('receitas') ?>">Receitas</a></li>
                                <li><a href="<?= base_url('contato') ?>">Contato</a></li>
                                <li><a href="<?= base_url('sobre') ?>">Sobre</a></li>
                                <li><a href="<?= base_url('admin') ?>">Acesso Administrativo</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>


        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="<?= base_url() ?>dist/img/prato1.jpg" alt="Primeiro slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Receitas Deliciosas</h1>
        <!--                         <p>experimente receitas deliciosas <code></code> URL, </p>-->
                            <p class="carrossel">Receitas rápidas e suculentas</p>
        <!--                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="<?= base_url() ?>dist/img/prato2.jpg" alt="Segundo slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Receitas Práticas</h1>
                            <p class="carrossel"> receitas simples e ingredientes fáceis de encontrar</p>
        <!--                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="<?= base_url() ?>dist/img/prato3.jpg" alt="Terceiro slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Receitas Divertidas</h1>
                            <p class="carrossel"> receitas de filmes geeks e animados</p>
        <!--                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- /.carousel -->
