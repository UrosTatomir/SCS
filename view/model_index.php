<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estavela SCS i Gavrilovic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>

    <!-- <script src="../canvasjs/canvasjs.min.js"></script> -->
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>

<body style="background:linear-gradient(to top,gray,white) no-repeat fixed center;">
    <nav class="navbar fixed-top navbar-expand-lg bg-dark navbar-dark">
        <a class="navbar-brand" href="../view/routes.php?pagescs=showhome" style="font-family: cursive, sans-serif; font-size:18px; color: #FDE600;">
            Estavela SCS i Gavrilovic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../view/routes.php?pagescs=showhome">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="routes.php?pagescs=showscs"> SCS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="routes.php?pagescs=showgavrilovic"> Gavrilovic</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../view/routes.php?pagescs=showinsert">Insert Data SCS</a>
                        <a class="dropdown-item" href="../view/routes.php?pagescs=showinsertgavrilovic">Insert Data Gavrilovic</a>
                        <!-- <a class="dropdown-item" href="../view/routes.php?page=showassign">Assigning a vehicle to the driver</a>
                    <a class="dropdown-item" href="../view/routes.php?page=showdrivers">Show Drivers</a> -->

                        <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
    </nav>
    <div class="container-fluid">
        <?php
        require_once '../controllers/hidrogram.php';
        require_once '../model/DAO.php';
        ?>

        <div class="container mt-5 p-5">


            <div class="row text-center shadow-lg p-3 mb-5  rounded">

            <h4 class="text-center" style="font-family: cursive, sans-serif; color:#2A65CB;">Proračun Maksimalnog Proticaja "Metoda SCS"</h4>
            <?php echo "<h4> Rečni sliv  $ime </h4>"; ?>
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
</div> <!-- end container fluid-->
<div class="card text-center">
    <div class="card-header bg-dark">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="row no-gutters">
            <div class="col-md-3">
                <h5 class="card-title" style="font-family: cursive, sans-serif; color: #2A65CB; font-size:22px;">Estavela SCS i Gavrilovic</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="col-md-3">
                <h5 class="card-title">Useful links</h5>
                <p>
                    <a class="dark-grey-text" href="#">Admin</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#">Login</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#">Logout</a>
                </p>
            </div>
            <div class="col-md-3">
                <h5 class="card-title">Social networks links</h5>

                <p><a href="https://www.facebook.com/bootsnipp"><i>facebook.com</i></a></p>
                <!-- Twitter -->
                <p><a href="https://twitter.com/bootsnipp">
                        <i>twitter.com</i>
                    </a></p>
                <p><a href="https://www.instagram.com">
                        <i>instagram.com </i>
                    </a></p>
            </div>
            <div class="col-md-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44046.34778673461!2d20.373595703090647!3d44.81842912563373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6ac98796b9b4098e!2sEstavela!5e0!3m2!1ssr!2srs!4v1540830623478" width="170" height="170" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
</body>
</html> 