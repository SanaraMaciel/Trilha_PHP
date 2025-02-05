<section>
<h1>Cadastro de Receitas</h1>
<p>Os campos com (*) são obrigatórios</p>
<div class="col col-md-8">
    <form action="<?= base_url('admin/receitas/salvar') ?>"  method="post" enctype="multipart/form-data">
        <div class="row form-group">
            <div class="col-sm-5">
                <label for="exampleInputEmail1">Nome*</label>
                <input type="text" class="form-control" placeholder="nome" name="receita" required="true">
            </div>
            <div class="col-sm-7">
                <label for="exampleInputEmail1">Slug_receita*</label>
                <input type="text" class="form-control" placeholder="slug_receita" name="slug_receita" required="true">
            </div>
        </div>
        <br/>
        <div class="row form-group">
            <div class="col-sm-8">
                <label for="exampleInputEmail1">Texto*</label>
                <textarea class="form-control" rows="9" name="texto" required="true"></textarea>
            </div>

            <br/>
            <div class="col-sm-4">
                <label for="exampleInputEmail1">Categoria*</label>
                <select class="form-control" name="categoria" required="true">
                <?php foreach ($categorias as $row): ?>
                    <option value="<?= $row->id_categoria ?>"><?= $row->nome ?> </option>
                <?php endforeach; ?>
            </select>
            </div>

            <div class="col-sm-4">
                <br/>
                <label for="exampleInputFile">Imagem</label>
                <input type="file" id="exampleInputFile" name="imagem">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-danger" onclick="return confirm('Deseja realmente limpar o formulário?')">Limpar</button>
    <br/>
    </form>
</div>
