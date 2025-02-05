<div id="content" class="span9">
    <section id="content-section">
        <span class="hide">Início do conteúdo da página</span>

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
                    <img class="first-slide" src="<?= base_url() ?>dist/img/carrossel1.jpg" alt="Roupas">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Decoração</h1>         
                            <p class="carrossel">Deixe sua casa do jeito que sempre sonhou</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="<?= base_url() ?>dist/img/carrossel2.jpg" alt="Compras">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Roupas</h1>
                            <p class="carrossel"> Tudo em moda feminina, masculina e infantil</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="<?= base_url() ?>dist/img/carrossel3.jpg" alt="Casa Geek">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Qualidade</h1>
                            <p class="carrossel">Site totalmente acessível para todos</p>
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


        <div class="container">
            <div class="row">
                <div class="card-deck mb-3 text-center">
                    <?php foreach ($produtos as $row): ?>                    
                        <div class="col col-md-4">
                            <br/><br/>
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal"><?= $row->nome; ?></h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-sm-12">
                                        <img class="imagem-responsive imagem-produto" src="<?= base_url('imagens/produtos/' . $row->imagem_produto) ?>" alt="imagem do produto"/>
                                    </div>
                                    <h3 class="card-title pricing-card-title">R$<?= $row->preco; ?></h3>

                                    <button type="button" class="btn btn-lg btn-block btn-primary">Comprar</button>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>                
                </div> 
            </div>
            <br/><br/><br>
            <a class="btn btn-default" href="<?= base_url('receitas') ?>">Mais produtos...</a>
        </div>

    </section>
</div>