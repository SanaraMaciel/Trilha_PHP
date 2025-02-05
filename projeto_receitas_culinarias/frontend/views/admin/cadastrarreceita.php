<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <section>
            <div class="container-fluid">
                <div class="col-sm-12">
                    <h1 class="page-header">Receita</h1>  
                </div>
                <div class="col col-md-4">
                    <p>Os campos com * são obrigatórios.</p>
                    <div class="form-group">
                        <label for="nome">Nome*:</label>
                        <input type="text" class="form-control" id="nome"name="nome" required="true"/>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria*:</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" required/>
                    </div>
                    <div class="form-group">
                        <label for="slug_receita">Slug_receita*:</label>
                        <input type="text" class="form-control" id="slug_receita" name="slug_receita"required/>
                    </div>
                    <div class="form-group">
                        <label for="texto">Texto*:</label>
                        <input placeholder="digite aqui a sua receita" style="width: 500px; height: 200px"  type="text" class="form-control" id="texto" name="texto"required/>
                    </div>
                    <div class="form-group">
                        <label for="imagem">Imagem:</label>
                        <input type="file" class="form-control" id="texto" name="texto"required/>
                    </div>                    
                    <div class="botoes_edicao">
                        <input name="enviar" type="button" id="enviar" class="btn btn-lg btn-success" type="button" value="enviar"></a>
                    </div>


                </div>

            </div>
        </section>

        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>