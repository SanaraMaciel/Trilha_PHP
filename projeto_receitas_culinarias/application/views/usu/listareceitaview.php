<section>
    <div class="col-md-10">
        <h1 class="page-header"><?= $receita[0]->slug_receita; ?></h1>  

        <div class="col-sm-4">
            <img class="img-responsive" src="<?= base_url('imagens/receitas/' . $receita[0]->foto) ?>"/>          
        </div>
        <div class="col-sm-8">
            <h3><?= $receita[0]->slug_receita; ?> <br><small>Em <?= date('d/m/Y', strtotime($receita[0]->adicionada_quando)); ?></small></h3>
            <p class="link"><a href="<?= base_url('usu/usuario/imprimir/'. $receita[0]->slug_receita) ?>" target="_blank">Imprimir Receita</a></p>

            <p>
                <br/>
                <?= nl2br($receita[0]->texto); ?>
            </p>

        </div>

    </div>


