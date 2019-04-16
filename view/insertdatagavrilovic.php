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
    <?php
    $dao = new DAO();
    $koeficijenty = $dao->getAllKoefY();
    $koeficijentxa = $dao->getAllKoefXA();
    $koeficijentf = $dao->getAllKoefF();
    $errors = isset($errors) ? $errors : array();
    $msg = isset($msg) ? $msg : "";
    ?>
    <div class="container mt-5 p-5">
      <div class="container col-12 p-3 bg-dark text-white">
            <h1 class="text-center text-warning" style="font-family: cursive, sans-serif; font-size: 22px;">Proračun vučenog i suspendovanog nanosa po metodi prof.Gavrilovića</h1>
        <form class="" action="routes.php" id="gavrilovic_form" role="form" style="display: block;">
            <div class="form-group"> Naziv rečnog sliva:<input type="text" name="imesliva" id="imesliva" tabindex="1" class="form-control" placeholder="name" required>
                <span style="color:red" ;>
                    <?php 
                    if (array_key_exists('imesliva', $errors)) {
                      echo $errors['imesliva'];
                    } ?></span>
            </div>
            <div class="form-group">Srednja nadmorska visina sliva [km] (celi broj ili npr x.y):<input type="number" name="Nsr" step="any" tabindex="2" class="form-control" id="Nsr" placeholder="Nsr" required>
                <span style="color:red" ;>
                    <?php if (array_key_exists('Nsr', $errors)) {
                      echo $errors['Nsr'];
                    } ?></span>
            </div>
            <div class="form-group">
                Srednji pad sliva dato u promilima (celi broj ili npr x.y):<input type="number" name="Jsr" step="any" tabindex="3" class="form-control" id="Jsr" placeholder="Jsr" required>
                <span style="color:red" ;>
                    <?php if (array_key_exists('Jsr', $errors)) {
                      echo $errors['Jsr'];
                    } ?></span>
            </div>
            <div class="form-group">
                Srednja godisnja temperatura vazduha (celi broj ili npr x.y):<input type="number" name="t" step="any" tabindex="4" class="form-control" id="t" placeholder="t" required>
                <span style="color:red" ;>
                    <?php if (array_key_exists('t', $errors)) {
                      echo $errors['t'];
                    } ?></span>
            </div>
            <div class="form-group">
                Dužina sliva po glavnom toku unos podataka [km] (celi broj ili npr x.y):<input type="number" name="Ls" step="any" tabindex="5" class="form-control" id="Ls" placeholder="Ls" required>
                <span style="color:red" ;>
                    <?php if (array_key_exists('Ls', $errors)) {
                      echo $errors['Ls'];
                    } ?></span>
            </div>
            <div class="form-group">
                Obim sliva [km] unos podataka (celi broj ili npr x.y):<input type="number" name="O" step="any" tabindex="6" class="form-control" id="O" placeholder="O" required>
                <span style="color:red" ;>
                    <?php if (array_key_exists('O', $errors)) {
                      echo $errors['O'];
                    } ?></span>
            </div>
            <div class="form-group">
                Nadmorska visina [km] unos podataka (celi broj ili npr x.y):<input type="number" name="Nu" step="any" tabindex="7" class="form-control" id="Nu" placeholder="Nu" required>
                <span style="color:red" ;>
                    <?php if (array_key_exists('Nu', $errors)) {
                      echo $errors['Nu'];
                    } ?></span>
            </div>
            <div class="form-group">
                Povrsina sliva [km2] unos podataka (celi broj ili npr x.y):<input type="number" name="Fs" step="any" tabindex="8" class="form-control" id="Fs" placeholder="Fs" required>
                <span style="color:red" ;>
                    <?php if (array_key_exists('Fs', $errors)) {
                      echo $errors['Fs'];
                    } ?></span>
            </div>
            <div class="form-group">
                Koeficijent "Y" predstavlja reciprocnu vrednost koeficijenta otpora zemljista na eroziju, i zavisi od geoloske podloge,klimata i pedoloskih tipova zemljista:
                <select type="number" name="y">
                    <option value=""></option>
                    <?php
                    foreach ($koeficijenty as $value) {
                      echo "<option value='$value[y]'>$value[tipzemljista], $value[y]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('y', $errors)) {
                      echo $errors['y'];
                    } ?></span>
            </div>
            <div class="form-group">
                Koeficijent "X" predstavlja uredjenje sliva ili erozionog podrucja i odnosi se na zasticenost zemljista od uticaja padavina:
                <select type="number" name="x">
                    <option class="text-wrap" value=""></option>
                    <?php
                    foreach ($koeficijentxa as $value) {
                      echo "<option value='$value[x]'>$value[uslovi],$value[x]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('x', $errors)) {
                      echo $errors['x'];
                    } ?></span>
            </div>
            <div class="form-group">
                Koeficijent "a" predstavlja vestacki stvoreni uslovi, antierozionim tehnickim ili bioloskim radovima u slivu ili podrucju:
                <select type="number" name="a">
                    <option value=""></option>
                    <?php
                    foreach ($koeficijentxa as $value) {
                      echo "<option value='$value[a]'>$value[uslovi],$value[a]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('a', $errors)) {
                      echo $errors['a'];
                    } ?></span>
            </div>
            <div class="form-group">
                Koeficijent "f" predstavlja brojni ekvivalent vidljivih i jasno izrazenih procesa erozije u slivu podrucja:
                <select type="number" name="f">
                    <option value=""></option>
                    <?php
                    foreach ($koeficijentf as $value) {
                      echo "<option value='$value[f]'>$value[uslovi],$value[f]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('f', $errors)) {
                      echo $errors['f'];
                    } ?></span>
            </div>
            <div class="form-group">
                Srednja godisnja kolicina padavina [mm](celi broj ili npr x.y):<input type="number" name="Hgod" step="any" tabindex="13" class="form-control" id="Hgod" placeholder="Hgod" required>
                <span style="color:red" ;>
                    <?php if (array_key_exists('Hgod', $errors)) {
                      echo $errors['Hgod'];
                    } ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="pagescs" value="resultGavrilovic" class="btn btn-login">
            </div>
            <?php
            echo "<span style=color:red;>$msg</span>";
            ?>
        </form>
      </div><!--end panel-login-->
    </div><!--end container-->
</div><!--end container fluid-->
<footer class=" bg-dark fixed-bottom">
    <div class="container text-center">
        <p><a class="text-white" href="#">Copyright by PHP DEVLOPERS 2019</a></p>
    </div>
</footer>
</body>
</html> 