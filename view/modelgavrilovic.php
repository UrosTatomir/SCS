<?php
  include '../includes/header.php';
  include '../includes/nav.php';
?>
        <div class="container">
            <?php
            require_once '../controllers/gavrilovic.php';
            require_once '../model/DAO.php';
            $imesliva = $_GET['imesliva'];
            $Nsr = $_GET['Nsr'];
            $Jsr = $_GET['Jsr'];
            $t = $_GET['t'];
            $Ls = $_GET['Ls'];
            $O = $_GET['O'];
            $Nu = $_GET['Nu'];
            $Fs = $_GET['Fs'];
            $y = $_GET['y'];
            $x = $_GET['x'];
            $a = $_GET['a'];
            $f = $_GET['f'];
            $Hgod = $_GET['Hgod'];

            $gavrins = new Gavrilovic();

            ?>

            <div class="row">
                <div class="col-4">
                    <h4>Ulazni parametri</h4>
                    <?php

                    echo "Naziv sliva = $imesliva <br><br>";
                    echo "Srednja nadmorska visina sliva Nsr =  $Nsr [km] <br><br>";
                    echo "Srednji pad sliva Jsr = $Jsr [‰]<br><br>";
                    echo "Srenja godisnja temperatura podrucja t = $t [Cº] <br><br>";
                    echo "Duzina sliva po glavnom toku Ls = $Ls [km] <br><br>";
                    echo "Obim sliva O = $O [km] <br><br>";
                    echo "Nadmorska visina usca - ulivnog profila Nu = $Nu [km] <br><br>";
                    echo "Povrsina sliva Fs = $Fs [km²] <br><br>";
                    echo "Koeficijent Y = $y predstavlja reciprocnu vrednost koeficijenta otpora zemljista na eroziju, i zavisi od geoloske podloge,klimata i pedoloskih tipova zemljista <br><br>";
                    echo "Koeficijent  X = $x   predstavlja uredjenje sliva ili erozionog podrucja i odnosi se na zasticenost zemljista od uticaja padavina <br><br>";
                    echo "Koeficijent a = $a  predstavlja vestacki stvoreni uslovi, antierozionim tehnickim ili bioloskim radovima u slivu ili podrucju <br><br>";
                    echo "Koeficijent f = $f predstavlja brojni ekvivalent vidljivih i jasno izrazenih procesa erozije u slivu podrucja <br><br>";
                    echo "Srednja godisnja kolicina padavina Hgod = $Hgod [mm] <br><br>";
                    ?>
                </div>
                <div class="col-4">
                    <?php

                    $gavrins->tempKoefT($t);
                    $gavrins->koefRetenNanosa($O, $Nsr, $Nu, $Ls);
                    $gavrins->koefErozijeZ($y, $x, $a, $f, $Jsr);


                    ?>
                </div>
                <div class="col-4">
                    <?php
                    $gavrins->ukProNaUSlivu($t, $Hgod, $y, $x, $a, $f, $Jsr, $Fs);
                    $gavrins->godKolNaKoDospDoUsca($t, $Hgod, $y, $x, $a, $f, $Jsr, $Fs, $O, $Nsr, $Nu, $Ls);
                    $gavrins->kolProdNanPoKmSliva($t, $Hgod, $y, $x, $a, $f, $Jsr, $O, $Nsr, $Nu, $Ls);
                    ?>
                </div>
            </div>
        </div>
<?php
 include '../includes/footer.php';
?>