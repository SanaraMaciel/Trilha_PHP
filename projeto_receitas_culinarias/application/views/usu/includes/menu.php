<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Receitas Culinárias</h3>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="<?= base_url('receitas')?>" >Receitas</a>                
            </li>
            <li class="active">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Categorias</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li class="active"><a href="<?= base_url('receitas_categorias/1') ?>">Sobremesas</a></li>
                    <li class="active"><a href="<?= base_url('receitas_categorias/2') ?>">Tortas e Bolos</a></li>
                    <li class="active"><a href="<?= base_url('receitas_categorias/3') ?>">Massas</a></li>
                    <li class="active"><a href="<?= base_url('receitas_categorias/4') ?>">Carnes</a></li>
                    <li class="active"><a href="<?= base_url('receitas_categorias/5') ?>">Peixes</a></li>
                    <li class="active"><a href="<?= base_url('receitas_categorias/6') ?>">Receitas Rápidas</a></li>
                    <li class="active"><a href="<?= base_url('receitas_categorias/7') ?>">Receitas Light</a></li>
                    <li class="active"><a href="<?= base_url('receitas_categorias/8') ?>">Sopas</a></li>
                    <li class="active"><a href="<?= base_url('receitas_categorias/9') ?>">Vegetarianas</a></li>
                    <li class="active"><a href="<?= base_url('receitas_categorias/11') ?>">Bebidas</a></li>
                </ul>
            </li>
            <li class="active">
                <a href="<?= base_url('contato') ?>">Contato</a>

            </li>
            <li class="active">
                <a href="<?= base_url('sobre') ?>">Sobre</a>
            </li>
            
        </ul>
    </nav>
    <div class="col-md-2">
        <div class="navbar-header">
            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                <i class="glyphicon glyphicon-align-left"></i>
                <span>Ocultar/Mostrar Menu</span>
            </button>
        </div>
    </div>



