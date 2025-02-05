<section>
<div class="container">
    <h1>Usuários</h1>
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
                    <th>Usuário</th> 
                    <th>
                        <div class="pull-right">
                            <a href="<?= base_url('admin/usuarios/cadastro') ?>" class="btn btn-info">Novo usuário</a>   
                        </div>
                    </th>
                </tr> 
            </thead> 
            <tbody> 
                <?php
                if (!empty($resultado)) {
                    foreach ($resultado as $res):
                        ?>
                        <tr> 
                            <th scope="res"><?= $res->id_usuario; ?></th> 
                            <td><?= $res->usuario_nome; ?></td> 
                            <td>
                                <div class="pull-right">                                
                                    <a href="<?= base_url('admin/usuarios/atualizacao/' . $res->id_usuario) ?>" class="btn btn-default btn-block">Atualizar</a>
                                    <a href="<?= base_url('admin/usuarios/deletar/' . $res->id_usuario) ?>" class="btn btn-danger btn-block"  onclick="return confirm('Deseja realmente apagar este usuário?')">Deletar</a>
                                </div>
                            </td>
                        </tr> 
         <?php endforeach;
        } ?>

            </tbody> 
        </table> 
    </div>
</div>


