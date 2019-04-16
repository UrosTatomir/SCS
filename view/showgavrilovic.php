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
                <div class="col col-2">
                    <!-- empty col -->

                </div> <!-- empty col -->

                <div class="col-md-auto">

                    <h1 class="text-center" style="font-family: cursive, sans-serif; font-size: 22px; color:#2A65CB;"><a href="routes.php?pagescs=showinsertgavrilovic">Unos podataka za Proračuna vučenog i suspendovanog nanosa Metod prof.Gavrilovića</a></h1>

                </div>
                <div class="col col-2">
                    <!-- <h3><a href="routes.php?pagescs=showinsert">Unos podataka potrebnih za proracun SCS</a></h3>       -->
                </div>

            </div>
            <div class="row">
                <div class="col-10">
                    <h4>Ovom metodom obuhvaćene su sledeće celine </h4>
                    <ul style="color:#06342D;">
                        <ol>Proračun količina nanosa (srednjegodišnji i sundni proticaji).</ol>
                        <ol>Odredjivanje koeficijenta erozije Z</ol>
                        <ol>Na osnovu višegodišnjeg istraživanja na terenu, u područjima Južne, Zapadne i Velike Morave, Ibra, Timoka i Vardara,</ol>
                        <ol>a proverom određenih postavki u laboratoriji za bujice i eroziju Šumarskog fakulteta u Beogradu,</ol>
                        <ol>prof.Gavrilović uspeo je da dobije analitički izraz za određivanje srednjegodišnjih zapremina nanosa,</ol>
                        <ol>za prirodni sliv, deo sliva ili gravitaciono područje - odvojenu parcelu.</ol>
                        <ol>Svi analitički obrasci u metodi prof.Gavrilovića, predstavljaju analitičke izraze za proračune količina nanosa po potencijalu erozije</ol>
                    </ul>

                    <h4 class="font-weight-bold font-italic">Vrednosti koeficijenta erozije Z</h4>
                    <table class="table">
                        <thead>
                        </thead>
                        <tr>
                            <th scope="col">Kategorija razornosti</th>
                            <th scope="col">Jacina erozionih procesa u koritu i slivu</th>
                            <th scope="col">Tip vladajuce erozije</th>
                            <th scope="col">Koeficijent erozije "Z"</th>
                            <th scope="col">Srednja vrednost koeficijenta "Z"</th>
                        </tr>
                        <tr>
                            <th> I </th>
                            <th>Ekscesivna (preterana) erozija</th>
                            <th>
                                <ul>
                                    <li>dubinska</li>
                                    <li>mesovita</li>
                                    <li>povrsinska</li>
                                </ul>
                            </th>
                            <th>
                                <ul>
                                    <li>1,51 < vise</li> <li>1,21 - 1,50</li>
                                    <li>1,01 - 1,20</li>
                                </ul>
                            </th>
                            <th> 1,25 </th>
                        </tr>
                        <tr>
                            <th> II </th>
                            <th>Jaka erozija</th>
                            <th>
                                <ul>
                                    <li>dubinska</li>
                                    <li>mesovita</li>
                                    <li>povrsinska</li>
                                </ul>
                            </th>
                            <th>
                                <ul>
                                    <li>0,91 - 1,00</li>
                                    <li>0,81 - 0,90</li>
                                    <li>0,71 - 0,80</li>
                                </ul>
                            </th>
                            <th> 0,85 </th>
                        </tr>
                        <tr>
                            <th> III </th>
                            <th>Osrednja erozija</th>
                            <th>
                                <ul>
                                    <li>dubinska</li>
                                    <li>mesovita</li>
                                    <li>povrsinska</li>
                                </ul>
                            </th>
                            <th>
                                <ul>
                                    <li>0,61 - 0,70</li>
                                    <li>0,51 - 0,60</li>
                                    <li>0,41 - 0,50</li>
                                </ul>
                            </th>
                            <th> 0,55 </th>
                        </tr>
                        <tr>
                            <th> IV </th>
                            <th>Slaba erozija</th>
                            <th>
                                <ul>
                                    <li>dubinska</li>
                                    <li>mesovita</li>
                                    <li>povrsinska</li>
                                </ul>
                            </th>
                            <th>
                                <ul>
                                    <li>0,31 - 0,40</li>
                                    <li>0,21 - 0,30</li>
                                    <li>0,11 - 0,20</li>
                                </ul>
                            </th>
                            <th> 0,30 </th>
                        </tr>
                        <tr>
                            <th> V </th>
                            <th>Vrlo slaba erozija</th>
                            <th>tragovi erozije</th>
                            <th>
                                <ul>
                                    <li>0,01 - 0,19</li>
                                    <li> i manje</li>

                                </ul>
                            </th>
                            <th> 0,10 </th>
                        </tr>
                    </table>
                </div>
                <div class="col-4">


                </div>
            </div>
            <!--end row-->
        </div>
    </div> <!-- end container fluid-->
    <div class="card text-center">
        <div class="card-header bg-dark">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item ">
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