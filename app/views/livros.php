    <section class="livros">
        <h1 class="livros-title">Livros</h1>
        <div class="livros-nomes">
        <?php
            include_once 'app/services/get_books.php';

            if (curl_errno($curl)) {
                    echo "<script>alert('Erro ao buscar livros!')</script";
                    header('Location: index.php');
                } else {
                    foreach(json_decode($response) as $livro){
        ?>
            <a class="livros-link" href="capitulos.php?livro=<?= $livro->abbrev->pt?>&chapters=<?= $livro->chapters?>&name=<?= $livro->name?>"><?= $livro->name?></a>
        <?php     
                }
            }
        ?>
        </div>
    </section>

    <?php
    
        if(isset($_SESSION['mensagem'])){
            echo $_SESSION['mensagem'];
            unset($_SESSION['mensagem']);
        }
    
    ?>
