<section>
<div class="container">
    <h1>Receitas</h1>
    <?php if (isset($alert)) { ?>
        <div class="col col-md-8">
            <div class="alert alert-<?php
            $a = explode('-', isset($alert) ? $alert : '');
            echo $a[0];
            ?>">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php
                $a = explode('-', isset($alert) ? $alert : '');
                echo $a[1];
                ?>
            </div>
        </div>
    <?php } ?>
    <div class="col col-md-10" data-example-id="striped-table"> 
        <table class="table table-striped" id="dataTable"> 
            <thead> 
                <tr> 
                    <th>#</th> 
                    <th>Nome</th> 
                    <th>Categoria</th>
                    <th>
                        <div class="pull-right">
                            <a href="<?= base_url('admin/receitas/cadastro') ?>" class="btn btn-info">Nova receita</a>   
                        </div>
                    </th>
                </tr> 
            </thead> 
            <tbody> 
                <?php foreach ($receitas as $row): ?>
                    <tr> 
                        <th scope="row"><?= $row->id_receita; ?></th> 
                        <td><?= $row->receita; ?></td> 
                        <td><?= $row->nome; ?></td> 
                        <td>
                            <div class="pull-right">
                                <a href="<?= base_url('admin/receitas/receitas_ver/' . $row->slug_receita) ?>" class="btn btn-default btn-block" target="_blank">Ver Receita</a>
                                <a href="<?= base_url('admin/receitas/atualizacao/' . $row->id_receita) ?>" class="btn btn-default btn-block">Atualizar</a>
                                <a href="<?= base_url('admin/receitas/deletar/' . $row->id_receita) ?>" class="btn btn-danger btn-block"  onclick="return confirm('Deseja realmente apagar a receita?')">Deletar</a>
                            </div>
                        </td>
                    </tr> 
                <?php endforeach; ?>

            </tbody> 
        </table> 
    </div>
</div>
