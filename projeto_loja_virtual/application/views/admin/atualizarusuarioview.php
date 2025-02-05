<section>
    <h1>Atualizar Usuário</h1>
      <p>Os campos com (*)são obrigatórios</p>
    <div class="col col-md-8">
        <form action="<?= base_url('admin/usuarios/salvar_update') ?>"  method="post" enctype="multipart/form-data">
            <input type="hidden" name="codigo" value="<?= $usuarios[0]->id_usuario ?>">
            <div class="row form-group">
                <div class="col-sm-5">
                    <label for="exampleInputEmail1">Usuário</label>
                    <input type="text" class="form-control" placeholder="usuario_nome" value="<?= $usuarios[0]->usuario_nome; ?>" name="usuario_nome">
                </div>
                <div class="col-sm-7">
                    <label for="exampleInputEmail1">Senha</label>
                    <input type="password" class="form-control" placeholder="senha" value="<?= $usuarios[0]->senha; ?>" name="senha">
                </div>
            </div>                               


            <div class="col col-md-4">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-danger" onclick="return confirm('Deseja realmente limpar o formulário?')">Limpar</button>
            </div>


        </form>
    </div>


