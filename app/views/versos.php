<?php 
    include_once 'app/services/get_versos.php'; 
?>

    <section class="versosSection">
        <h1 class="versos-title">Livro Capitulo 2</h1>
        <div class="versosContainer">
        <?php
            if (curl_errno($curl)) {
                echo "<script>alert('Erro ao buscar capitulos!')</script";
                header('Location: capitulos.php');
            } else {
                foreach(json_decode($response)->verses as $verso){
        ?>
            <p class="versos-paragrafo"><?= $verso->number?>. <?= $verso->text?></p>
            <?php
            }
                }
        ?>
        </div>
    </section>

    <script>
        const elements = document.querySelectorAll(".versos-paragrafo");

        elements.forEach(element => {
            element.addEventListener("click", () => {
                elements.forEach(el => el.classList.remove("active"));
                element.classList.add("active");
            });
        });
    </script>
