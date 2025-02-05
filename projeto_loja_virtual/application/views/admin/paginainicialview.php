<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-header">Últimas Receitas</h1>  
                    </div>
                    <?php foreach ($produtos as $row): ?>
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
                <a class="btn btn-default" href="<?=base_url('admin/receitas/receitas_ver')?>">Mais receitas...</a>
            </div>   
            <div class="col-md-4">

                <h1 class="page-header" margin-left="30px;">Sobre Nós</h1>  

                 <p>
                    O web site Receitas culinárias foi desenvolvido especialmente á você.
                </p>
                <p>Ajude-nos a melhorar ainda mais nosso sistema, entre em contato conosco e deixa suas dúvidas, reclamações, sugestões ou elogios, Você é sempre bem vindo!.
                </p>
            </div>
        </div>
    </div>
