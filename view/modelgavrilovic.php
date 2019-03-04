<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Model Gavrilovic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="main.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</head>

<body>
    <div class="container-fluid">
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

            <div class="row justify-content-md shadow-lg">
                <div class="col-4 bg-primary text-white">
                    <?php
                    echo "<br";
                    echo "Ulazni podaci :<br>";
                    echo "Naziv sliva = $imesliva <br>";
                    echo "Srednja nadmorska visina sliva Nsr =  $Nsr [km] <br>";
                    echo "Srednji pad sliva Jsr = $Jsr [‰]<br>";
                    echo "Srenja godisnja temperatura podrucja t = $t [Cº] <br>";
                    echo "Duzina sliva po glavnom toku Ls = $Ls [km] <br>";
                    echo "Obim sliva O = $O [km] <br>";
                    echo "Nadmorska visina usca - ulivnog profila Nu = $Nu [km] <br>";
                    echo "Povrsina sliva Fs = $Fs [km²] <br>";
                    echo "Koeficijent Y = $y predstavlja reciprocnu vrednost koeficijenta otpora zemljista na eroziju, i zavisi od geoloske podloge,klimata i pedoloskih tipova zemljista <br>";
                    echo "Koeficijent  X = $x   predstavlja uredjenje sliva ili erozionog podrucja i odnosi se na zasticenost zemljista od uticaja padavina <br>";
                    echo "Koeficijent a = $a  predstavlja vestacki stvoreni uslovi, antierozionim tehnickim ili bioloskim radovima u slivu ili podrucju <br>";
                    echo "Koeficijent f = $f predstavlja brojni ekvivalent vidljivih i jasno izrazenih procesa erozije u slivu podrucja <br>";
                    echo "Srednja godisnja kolicina padavina Hgod = $Hgod [mm] <br>";
                    ?>
                </div>
                <div class="col-4">
                    <?php
                    $gavrins->tempKoefT($t);
                    $gavrins->koefRetenNanosa($O, $Nsr, $Nu, $Ls);
                    $gavrins->koefErozijeZ($y, $x, $a, $f, $Jsr);
                    $gavrins->ukProNaUSlivu($t, $Hgod, $y, $x, $a, $f, $Jsr, $Fs);
                    $gavrins->godKolNaKoDospDoUsca($t, $Hgod, $y, $x, $a, $f, $Jsr, $Fs, $O, $Nsr, $Nu, $Ls);
                    $gavrins->kolProdNanPoKmSliva($t, $Hgod, $y, $x, $a, $f, $Jsr, $O, $Nsr, $Nu, $Ls);

                    ?>
                </div>

            </div>
        </div>

    </div>
</body>

</html> 