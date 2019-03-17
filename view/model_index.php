<?php
include '../includes/header.php';
include '../includes/nav.php';
require_once '../controllers/hidrogram.php';
require_once '../model/DAO.php';
?>

<div class="container mt-5 p-5">


    <div class="row text-center shadow-lg p-3 mb-5  rounded" style="background-color: #FED502;">

        <div class="col col-2">

            <a href="index.php"><img src="../images/estavela.logo.jpg" class="img-responsive img-circle margin" style="display:inline" width="100" /></a>
        </div>

        <div class="col col-2">
            <!-- empty col -->

        </div> <!-- empty col -->

        <div class="col-md-auto">

            <h1 class="text-center" style="font-family: cursive, sans-serif; font-size: 26px; color:#2A65CB;">Proračun Maksimalnog Proticaja "Metoda SCS"</h1>
            <?php
            echo "<h3 class=text-center style=font-family: cursive, sans-serif font-size:18px> Rečni sliv $ime </h3>";
            ?>
        </div>

    </div>
    <!--end row tag-->
    <div class="row">
        <?php	

        $ime = $_GET["ime"];
        $Tkh = $_GET["Tkh"];
        $Tk = explode(',', $Tkh);

        $a = 120; //min -> h/2;
        $b = 1440; //za 24 h p = 1% 1440 ; 12h p = 1%  770 ;
        $c = 0.3;
        $k = $_GET["k"]; //koeficijent oblika hidrograma = 1
        $L = $_GET["L"];    //km;
        $Lc = $_GET["Lc"]; //km;
        $Iu = $_GET["Iu"];  // %;
        $Ap = 0.3;
        $F = $_GET["F"]; //km2
        $Bm = $_GET["Bm"];  //koef. sa grafikona za date npr0.82 za podrucje Kotora uslove;
        $H24h = $_GET["H24h"]; // mm/24h;
        $CN = $_GET["CN"];
        // $servername = 'localhost';
        $username = 'root';
        $password = null;
        // $dbname = 'estavela_talas_db';

        $hidroscs = new Hidrogram();
        // $hidroscs->SCS($ime);
        ?>
        <div class="col-2 bg-primary text-white">
            <?php
            echo '<br>';
            echo 'Ulazni podaci :<br>';
            echo 'a = ' . $a . '<br>'; //min -> h;
            echo 'b = ' . $b . ' za 24h p = 1%<br>'; //za 24 h p = 1% 1440 ; 12h p = 1%  770 ;
            echo 'c = ' . $c . '<br>';
            echo 'k = ' . $k . '<br>';
            echo 'L = ' . $L . ' km.<br>';    //km;
            echo 'Lc= ' . $Lc . ' km.<br>'; //km;
            echo 'Iu= ' . $Iu . ' %.<br>';  // %;
            echo 'F = ' . $F . ' km2.<br>';  //km2;
            echo 'Ap= ' . $Ap . '<br>';
            echo 'Bm= ' . $Bm . 'koef. izolinije<br>'; //koef. sa grafikona za date uslove;
            echo 'H24h = ' . $H24h . '<br>'; // mm/24h;
            echo 'CN = ' . $CN . '<br>';
            echo '<br>';
            ?>
        </div>
        <div class="col-2">
            <?php
            echo 'Trajanje efektivne kise Tk [min] :';
            echo '<br>';
            echo '<br><br>';
            $tkr = $hidroscs->trKi($Tk);
            foreach ($tkr as $value) {
                echo "<table border=1px>
                <tr>
                    <td width=220> $value</td>
                </tr>
            </table>";
            }
            ?>
        </div>
        <div class="col-2 bg-success text-white">
            <?php
            $hidroscs->vKa($L, $Lc, $Iu);
            $hidroscs->vPHi($Tk, $a, $L, $Lc, $Iu);
            $hidroscs->vOHi($Tk, $k, $a, $L, $Lc, $Iu);
            $hidroscs->bazaHi($Tk, $k, $a, $L, $Lc, $Iu);
            echo 'Merodavna kiša trajanja Htp [min.]<br>';
            echo '<br><br>';
            $hidroscs->mKiTr($Tk, $Ap, $b, $c, $Bm, $H24h);

            ?>
        </div>
        <div class="col-2">
            <?php
            $hidroscs->defV($CN);
            $hidroscs->efPad($Tk, $Ap, $b, $c, $H24h, $Bm, $CN);
            echo 'Max.ordinata sintet.jedinicnog hidrograma qmax [m3/smm]';
            $hidroscs->maxO($Tk, $F, $k, $a, $L, $Lc, $Iu);
            ?>
        </div>
        <div class="col-2 bg-secondary text-white">
            <?php
            // echo 'Proticaj Qmax p= 1%[m3/s]';

            $r = $hidroscs->maxP($Tk, $F, $Ap, $k, $a, $b, $c, $L, $Lc, $Iu, $H24h, $Bm, $CN);
            foreach ($r as $Qmax) {
                echo "<table style=color:white; border=1px>
                <tr>
                    <td width=220> $Qmax</td>
                </tr>
            </table>";
            }
            ?>
        </div>
        <div class="col-2 text-danger font-weight-bold">
            <?php
            $hidroscs = new DAO();
            $hidroscs->insertScs($ime, $a, $b, $c, $k, $L, $Lc, $Iu, $Ap, $F, $Bm, $H24h, $CN, $r);
            echo "Uspesan unos podataka u bazu<br>";
            ?>
            <button class="btn"><a href="routes.php?pagescs=printresult">Select Result</a></button>
        </div>
    </div>
    
    <div class="col-md-5">
        <canvas id="myChart"></canvas>
    </div>

</div>


<?php include '../includes/footer1.php'; ?> 