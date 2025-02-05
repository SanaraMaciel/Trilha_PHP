<?php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese');
?>

<section>
    <div class="col-md-10">
        <h1 class="page-header"><?= $receitas[0]->receita; ?></h1>  
   
        <div class="col-sm-8">
           
            <p>
                <br/>
                <?= nl2br($receitas[0]->texto); ?>
            </p>

        </div>

    </div>
</section>


<?php
?>