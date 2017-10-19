<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>ADD PRODUCT</h2>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <?php
            $user = $_SESSION['user'];
            $msage = $_SESSION['msje'];

            foreach ($user as $indice => $valor) {
                if ($indice == 'opciones') {
                    echo "<br>Opciones:<br>";
                    $opciones = $user['opciones'];
                    foreach ($opciones as $indice => $valor) {
                        echo "$indice: $valor<br>";
                    }
                } else {
                    echo "<br>$indice: $valor";
                }
            }
            echo "<br>" . "<b style='color:green'>" . $msage;
            ?>
        </div>
    </div>
</section>
