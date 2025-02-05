<section>
    <h1>Cadastro de Usuários</h1>
    <p>Os campos com (*) são obrigatórios</p>
    <div class="col col-md-8">
        <form action="<?= base_url('admin/usuarios/salvar') ?>"  method="post" enctype="multipart/form-data">
            <div class="row form-group">
                <div class="col-sm-5">
                    <label for="exampleInputEmail1">Usuario*</label>
                    <input type="text" class="form-control" placeholder="usuario" name="usuario_nome" required="true">
                </div>
                <div class="col-sm-5">
                    <label for="exampleInputEmail1">Senha*</label>
                    <input type="password" class="form-control" placeholder="senha" name="senha" required="true">
                </div>
            </div>
            <br/>
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-danger" onclick="return confirm('Deseja realmente limpar o formulário?')">Limpar</button>
            <br/>
        </form>
    </div>

