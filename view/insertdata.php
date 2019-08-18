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
            Metode SCS i Gavrilovic</a>
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
        require_once '../model/DAO.php';
        $dao = new DAO();
        $koeficijentK = $dao->getAllKoefK();
        $koeficijentB = $dao->getAllKoefB();

        $msg = isset($msg) ? $msg : "";
        $errors = isset($errors) ? $errors : array();
        // var_dump($errors); 
        ?>
    <div class="container mt-5 p-5">
      <div class="container p-5 col-8 bg-dark text-white">
           <h1 class="text-center text-white" style="font-family: cursive, sans-serif; font-size: 22px;">Proračun Maksimalnog Proticaja "Metoda SCS"</h1>
        <form action="routes.php" id="scs-form" role="form" style="display: block;">
            <div class="form-group">
                Naziv rečnog sliva:<input type="text" name="ime" id="ime" tabindex="1" class="form-control" placeholder="name" required>
                <span style="color:red" ;><?php if (array_key_exists('ime', $errors)) {
                                                echo $errors['ime'];
                                            }  ?></span>
            </div>
            <div class="form-group">
                Merodavno vreme trajanja kiše npr.(10,11,13,14,15,16,...):<input type="text" name="Tkh" id="Tkh" tabindex="2" class="form-control" placeholder="Tkh" required>
                <span style="color:red" ;><?php if (array_key_exists('Tkh', $errors)) {
                                                echo $errors['Tkh'];
                                            } ?></span>
            </div>
            <div class="form-group">
                Koeficijent oblika hidrograma k-(unos podataka celi broj ili x.y):
                <!-- <input type="number" name="k" step="any" id="k" tabindex="3" class="form-control" placeholder="k" required> -->
                <select type="number" name="k">
                    <option value=""></option>
                    <?php
                    foreach ($koeficijentK as $value) {
                        echo "<option value='$value[k]'>$value[k]</option>";
                    }
                    ?>
                </select>
                <span style="color:red" ;><?php if (array_key_exists('k', $errors)) {
                                                echo $errors['k'];
                                            } ?></span>
            </div>
            <div class="form-group">
                Dužina sliva po glavnom toku unos podataka (celi broj ili npr x.y):<input type="number" name="L" step="any" tabindex="4" class="form-control" id="L" placeholder="L" required>
                <span style="color:red" ;><?php if (array_key_exists('L', $errors)) {
                                                echo $errors['L'];
                                            } ?></span>
            </div>
            <div class="form-group">
                Rastojanje od težišta sliva do izlaznog profila (celi broj ili npr x.y):<input type="number" name="Lc" step="any" tabindex="5" class="form-control" id="Lc" placeholder="Lc" required> <span style="color:red" ;><?php if (array_key_exists('Lc', $errors)) {
                                            echo $errors['Lc'];
                                         } ?></span>
            </div>
            <div class="form-group">
                Uravnati pad toka (celi broj ili npr x.y):<input type="number" name="Iu" step="any" tabindex="6" class="form-control" id="Iu" placeholder="Iu" required> <span style="color:red" ;>
                <?php if (array_key_exists('Iu', $errors)) {
                            echo $errors['Iu'];
                       } ?></span>
            </div>
            <div class="form-group">
                Površina sliva (celi broj ili npr x.y):<input type="number" name="F" step="any" tabindex="7" class="form-control" id="F" placeholder="F" required>
                <span style="color:red" ;><?php if (array_key_exists('F', $errors)) {
                                                echo $errors['F'];
                                            } ?></span>
            </div>
            <div class="form-group">
                Koeficijent B -dobija se na osnovu karte izolinija (celi broj ili npr x.y):
                <!-- <input type="number"name="Bm" step="any"tabindex="8" class="form-control"id="Bm"placeholder="B" required> -->
                <select type="number" name="Bm">
                    <option value=""></option>
                    <?php
                    foreach ($koeficijentB as $value) {
                        echo "<option value='$value[Bm]'>$value[Bm]</option>";
                    }
                    ?>
                </select>
                <span style="color:red" ;><?php if (array_key_exists('Bm', $errors)) {
                                                echo $errors['Bm'];
                                            } ?></span>
            </div>
            <div class="form-group">
                Maksimalna dnevna kiša verovatnoće pojave 1% (celi broj ili npr x.y):<input type="number" name="H24h" step="any" tabindex="9" class="form-control" id="H24h" placeholder="H24h" required>
                <span style="color:red" ;><?php if (array_key_exists('H24h', $errors)) {
                                                echo $errors['H24h'];
                                            } ?></span>
            </div>
            <div class="form-group">
                Broj krive oticaja (celi broj ili npr x.y):<input type="number" name="CN" step="any" tabindex="10" class="form-control" id="CN" placeholder="CN" required> <span style="color:red" ;><?php if (array_key_exists('CN', $errors)) {
                         echo $errors['CN'];
                       } ?></span>
            </div>
            <div class="form-group">
                <input type="submit" name="pagescs" id="result" tabindex="11" value="result" class="btn btn-primary">
            </div>
            <?php echo "<span style=color:red;>$msg</span>"; ?>
        </form>

            </div>
        </div>
    </div> <!--end container fluid-->
    <footer class=" bg-dark fixed-bottom">
        <div class="container text-center">
            <p><a class="text-white" href="#">Copyright by PHP DEVLOPERS 2019</a></p>
        </div>
    </footer>
</body>
</html> 