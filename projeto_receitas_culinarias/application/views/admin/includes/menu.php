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
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Receitas</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li class="active"><a href="<?= base_url('admin/receitas') ?>">Adicionar Receitas</a></li>
                    <li class="active"><a href="<?= base_url('admin/receitas') ?>">Alterar Receitas</a></li>
                    <li class="active"><a href="<?= base_url('admin/receitas') ?>">Apagar Receitas</a></li>
                </ul>
            </li>
            <li class="active">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Categorias</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li class="active"><a href="<?= base_url('admin/receitas/receitas_categorias/1') ?>">Sobremesas</a></li>
                    <li class="active"><a href="<?= base_url('admin/receitas/receitas_categorias/2') ?>">Tortas e Bolos</a></li>
                    <li class="active"><a href="<?= base_url('admin/receitas/receitas_categorias/3') ?>">Massas</a></li>
                    <li class="active"><a href="<?= base_url('admin/receitas/receitas_categorias/4') ?>">Carnes</a></li>
                    <li class="active"><a href="<?= base_url('admin/receitas/receitas_categorias/5') ?>">Peixes</a></li>
                    <li class="active"><a href="<?= base_url('admin/receitas/receitas_categorias/6') ?>">Receitas Rápidas</a></li>
                    <li class="active"><a href="<?= base_url('admin/receitas/receitas_categorias/7') ?>">Receitas Light</a></li>
                    <li class="active"><a href="<?= base_url('admin/receitas/receitas_categorias/8') ?>">Sopas</a></li>
                    <li class="active"><a href="<?= base_url('admin/receitas/receitas_categorias/9') ?>">Vegetarianas</a></li>
                    <li class="active"><a href="<?= base_url('admin/receitas/receitas_categorias/11') ?>">Bebidas</a></li>
                </ul>
            </li>
            <li class="active">
                <a href="#usuarioSubmenu" data-toggle="collapse" aria-expanded="false">Usuários</a>
                <ul class="collapse list-unstyled" id="usuarioSubmenu">
                    <li class="active"><a href="<?= base_url('admin/usuarios') ?>">Adicionar Usuários</a></li>
                    <li class="active"><a href="<?= base_url('admin/usuarios') ?>">Alterar Usuários</a></li>
                    <li class="active"><a href="<?= base_url('admin/usuarios') ?>">Apagar Usuários</a></li>
                </ul>
            </li>
            <li class="active">
                <a href="<?= base_url('admin/contato') ?>">Contato</a>

            </li>
            <li class="active">
                <a href="<?= base_url('admin/sobre') ?>">Sobre</a>
            </li>
            <li class="active">
                <a href="<?= base_url() ?>">Sair</a>
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




