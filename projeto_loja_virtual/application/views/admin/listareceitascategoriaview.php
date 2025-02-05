<section>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="col-sm-12">
                    <h1 class="page-header">Receitas </h1>  
                </div>
                <?php
                if ($receitas == null) {
                    echo '<div class="col-sm-12">
                     Não há receitas cadastradas nessa categoria</div>';
                } else
                    foreach ($receitas as $row):
                        ?>      
                        <div class="col-sm-6" >
                            <div class="caixa-receita">
                                <div class="row">
                                    <a href="<?= base_url('admin/receitas/receitas_ver/' . $row->slug_receita) ?>">
                                        <div class="col-sm-12">
                                            <img class="img-responsive" src="<?= base_url('imagens/receitas/' . $row->foto) ?>"/>
                                        </div>
                                        <div class="col-sm-12">
                                            <h4 class="nome"><?= $row->receita; ?></h4>
                                            <h5><?= $row->nome; ?></h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>


