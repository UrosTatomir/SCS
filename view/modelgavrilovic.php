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
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
        </form>
    </div>
</nav>
    <div class="container-fluid">
        <div class="container mt-5 p-5">
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
            ?>
            <div class="row">
                <div class="col-6">
                    <h5 class="text-primary">Ulazni parametri</h5>
                    <?php
                    echo "<h3 class='text-dark'>Naziv sliva = $imesliva</h3> <br>";
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
                <div class="col-6">
                    <?php
                    $gavrilovic = new Gavrilovic();
                    $gavrilovic->metodProracunaGavrilovic($imesliva, $t, $Hgod, $y, $x, $a, $f, $Jsr, $Fs, $O, $Nsr, $Nu, $Ls);
                    ?>
                </div>
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