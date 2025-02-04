<?php 
    include_once 'app/services/get_capitulos.php';
?>    
    <section class="livros">
        <h1 class="livros-title"><?= $nameBook?></h1>
        <div class="livros-nomes">
        <?php 
            for ($i=1; $i <= $chaptersBook; $i++) {
        ?>
            <a class="livros-link" href="versos.php?livro=<?= $abbrevBook?>&capitulo=<?= $i?>&name=<?= $nameBook?>">Capitulo<?= $i?></a>
        <?php
            }
        ?>
        </div>
    </section>
