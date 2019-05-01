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
    <div class="container mt-5 p-5">
            <div class="row justify-content-md-center shadow-lg p-3 mb-5  rounded" style="background-color: #FED502;">
                <!--start row tag #FDE600-->

                <div class="col col-2">
                    <!-- empty col -->

                </div> <!-- empty col -->

                <div class="col-md-auto">

                    <h1 class="text-center" style="font-family: cursive, sans-serif; font-size: 22px; color:#2A65CB;"><a href="routes.php?pagescs=showinsert">Ulazni podaci za proračun Maksimalnog Proticaja "Metoda SCS"</a></h1>

                </div>

                <div class="col col-2">
                    <!-- <h3><a href="routes.php?pagescs=showinsert">Unos podataka potrebnih za proracun SCS</a></h3>       -->
                </div>

            </div>
            <!--end row tag-->

            <div class="row">
                <h4>Maksimalni proticaj oderedjene verovatnoće primenom kombinovane metode</h4>
                <ul style="color:#06342D;">
                    <li>SCS postupka za razdvajanje Pe padavina od ukupnih-bruto padavina Pbr</li>
                    <li>Teorija sintetičkog jediničnog hidrograma za determinisanje vršne ordinate sintetičog jediničnog hidrograma qmax</li>
                </ul>
                <h5>Maksimalni proticaji na manjim slivnim površinama A < 1000 km2 su posledica kiša čije trajanje je kraće od 24h. </h5> <p>Zbog toga potrebno je maksimalnu dnevnu kišu svesti na merodavnu Htp, odnosno količinu padavina koja dovodi do pojave maksimalnog proticaja- model Jankovića(1994).Vrednosti "C" i "n" dobijene su na osnovu obrade hidrograma sa 93 bujična sliva u Srbiji - autor Ristić Ratko, (2000).</p>
                        <p>Postupak optimizacije metoda SCS napisana je u PHP jeziku.Metod i ulazni parametri "CN", "k", "B","C" i "n", određeni su na osnovu metodologije iz udžbenika - Hidrologija Bujičnih tokova autora Ristić Ratka i Dragana Maloševića</p>

                        <div class="col-4">
                            <p class="font-weight-bold font-italic">Unapred definisani koeficijenti - konstante:</p>
                            <ul class="font-weight-bold">
                                <li>α = 1.0</li>
                                <li>A = 0.3</li>
                                <li>C = 0.75</li>
                                <li>n = 0.336</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <p class="font-weight-bold font-italic">Klasifikacija hidroloških tipova zemljišta</p>
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Tip zemljišta</th>
                                        <th scope="col">Minimalan iznos infiltracije[mm/h]</th>
                                    </tr>
                                    <tr>
                                        <th>A</th>
                                        <th>7.62 - 11.4</th>
                                    <tr>
                                        <th>B</th>
                                        <th>3.81 - 7.61</th>
                                    </tr>
                                    <tr>
                                        <th>C</th>
                                        <th>1.27 - 3.80</th>
                                    </tr>
                                    <tr>
                                        <th>D</th>
                                        <th>0.00 - 1.26</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="col-4">
                            <p class="font-weight-bold font-italic">Sintetički jedinični trougaoni hidrogram</p>
                            <img src="../images/hidrogram.jpg" width="300" />
                        </div>
            </div>
    </div>
</div> <!-- end container fluid-->
    <div class="card text-center">
        <div class="card-header bg-dark">
            <h5 class="card-title" style="font-family: cursive, sans-serif; color: #FDE600; font-size:18px;">Estavela SCS i Gavrilovic&#174;</h5>
        </div>
        
    </div>
</body>
</html> 