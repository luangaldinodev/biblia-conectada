<?php 
    include_once 'app/services/get_versos.php'; 
    
    if (!isset($response->verses)) {
?>
    <!-- trecho em HTML -->
    <section class="versosSection">
        <h1 class="versos-title">Versiculo não encontrado!</h1>
    </section>

<?php
    } //fechamento if !isset($response->verses
    elseif(isset($response->verses)){
?>
        <!-- trecho em HTML -->
        <section class="versosSection">
        <h1 class="versos-title"><?= $nameBook?> - Capítulo <?= $capitulo?></h1>
        <div class="versosContainer">
<?php
    foreach($response->verses as $verso){
?>
    <!-- trecho em HTML -->
    <p class="versos-paragrafo"><?= $verso->number?>. <?= $verso->text?></p>
            
<?php
    } //fechamento foreach($response->verses as $verso)
?>

    <!-- trecho em HTML -->
    </div>
    </section>

    <script defer>
        const elements = document.querySelectorAll(".versos-paragrafo");

        elements.forEach(element => {
            element.addEventListener("click", () => {
                elements.forEach(el => el.classList.remove("active"));
                element.classList.add("active");
            });
        });
    </script>
<?php
    } //fechamento elseif elseif(isset($response->verses))
    else{
?>
    <!-- trecho em HTML -->
    <section class="versosSection">
            <h1 class="versos-title">Resultado não encontrado!</h1>
    </section>

<?php
    } //fechamento else
?>