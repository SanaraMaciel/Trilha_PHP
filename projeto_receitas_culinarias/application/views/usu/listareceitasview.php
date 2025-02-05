<section>
    <div class="col-md-8">
        <h1 class="page-header">Últimas Receitas</h1>  
        <?php foreach ($receitas as $row): ?>
            <div class="col-sm-3">
                <div class="caixa-receita">
                    <div class="row">
                        <a href="<?= base_url('receitas/' . $row->slug_receita) ?>">
                            <div class="col-sm-12">
                                <img class="img-responsive" src="<?= base_url('imagens/receitas/' . $row->foto) ?>"/>
                            </div>
                            <div class="col-sm-12">
                                <h4 class="titulo_receita"><?= $row->receita; ?></h4>
                                <h5><?= $row->nome; ?></h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


                                 