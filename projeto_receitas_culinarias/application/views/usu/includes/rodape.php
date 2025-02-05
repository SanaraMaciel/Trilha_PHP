<div class="row">
    <div class="container marketing">
      
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-12">
                <footer class="rodape">
                    <p class="link"><a href="#">voltar ao topo</a></p>
                    <br/>
                    <p>&copy; 2017 Sanara Felício, Inc. &middot; Todos os direitos reservados <a href="#"></a> &middot; <a href="#"></a></p>
                </footer>
            </div>

        </div>

    </div>
</section>

</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../../assets/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?= base_url(); ?>/dist/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/dist/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        // $('#dataTable').DataTable();
        $('#dataTable').DataTable({
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ ate _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 at� 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por Pagina",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Proximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Ultio"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"

                }
            }
        }
        );
    });
</script>
</body>
</html>