<?php
header("Content-Type:text/html;charset=utf-8");
//echo doctype('xhtml1-trans');

if (isset($titulo)) {
    $tituloPagina = $titulo . " - ";
} else {
    $tituloPagina = "";
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?= $tituloPagina ?>Receitas Culinárias</title>      
    </head>
    <body>        
        <div id="site">
            <div id="cabecalho">                
                <?php if (isset($titulo)) { ?>
                    <h1 class="centralizado"><?= $titulo ?></h1>
                    <?php
                }
                ?>
            </div>                        
            <div id="conteudo">                
                <?php echo $contents ?>
            </div>            
        </div>        
    </body>
</html>