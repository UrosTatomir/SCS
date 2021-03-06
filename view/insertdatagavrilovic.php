
<?php 
// session_start();
if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    $id_user=$user['id_user'];
    
    $dao = new DAO();
    $koeficijenty = $dao->getAllKoefY();
    $koeficijentxa = $dao->getAllKoefXA();
    $koeficijentf = $dao->getAllKoefF();
    $image = $dao->getImageId($id_user);
    
    $errors = isset($errors) ? $errors : array();
    $msg = isset($msg) ? $msg : "";
?>

<nav aria-label="breadcrumb" class="col-md-5 offset-md-1">
          <ol class="breadcrumb bg-transparent font-weight-light">
            <li class="breadcrumb-item"><a href="https://estavela.in.rs">Estavela</a></li>
            <li class="breadcrumb-item"><a href="https://scs.estavela.in.rs">Home</a></li>
            <!--<li class="breadcrumb-item active"><a href="https://scs.estavela.in.rs/view/routes.php?pagescs=showscs">SCS Metoda</a></li>-->
            <li class="breadcrumb-item active"><a href="https://scs.estavela.in.rs/view/routes.php?pagescs=showinsertgavrilovic"> Insert data metoda Gavrilovic</a></li>
          </ol>
</nav>    
<div class="container mt-3">
  <div class="container col-12  bg-light text-dark">
        <h1 class="text-center text-dark" style="font-family: cursive, sans-serif; font-size: 20px;">Proračun vučenog i suspendovanog nanosa po metodi prof.Gavrilovića</h1>
    
    <form action="routes.php" id="gavrilovic_form" role="form" style="display: block;">
        <div class="form-group"><input type="hidden" name="id_user" value="<?php echo $id_user;  ?>">
        </div>
        <div class="form-row">
            <div class="form-group col">
                <input type="text" name="imesliva" id="imesliva" tabindex="1" class="form-control form-control-sm" placeholder="Naziv sliva" required>
                <span style="color:red" ;>
                    <?php 
                    if (array_key_exists('imesliva', $errors)) {
                      echo $errors['imesliva'];
                    } ?></span>
            </div>
            <div class="form-group col">
                <input type="number" name="Nsr" step="any" tabindex="2" class="form-control form-control-sm" id="Nsr" placeholder="Nsr [km](npr x.y)" required>
                <span style="color:red" ;>
                    <?php if (array_key_exists('Nsr', $errors)) {
                      echo $errors['Nsr'];
                    } ?></span>
            </div>
            <div class="form-group col">
                <input type="number" name="Jsr" step="any" tabindex="3" class="form-control form-control-sm" id="Jsr" placeholder="Jsr (npr x.y)" required>
                <span style="color:red" ;>
                    <?php if (array_key_exists('Jsr', $errors)) {
                      echo $errors['Jsr'];
                    } ?></span>
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col">
            <input type="number" name="t" step="any" tabindex="4" class="form-control form-control-sm" id="t" placeholder="t Srednja god. temp. vazduha (npr x.y)" required>
            <span style="color:red" ;>
                <?php if (array_key_exists('t', $errors)) {
                  echo $errors['t'];
                } ?></span>
        </div>
        <div class="form-group col">
            <input type="number" name="Ls" step="any" tabindex="5" class="form-control form-control-sm" id="Ls" placeholder="Ls Dužina sliva [km] (npr x.y)" required>
            <span style="color:red" ;>
                <?php if (array_key_exists('Ls', $errors)) {
                  echo $errors['Ls'];
                } ?></span>
        </div>
        <div class="form-group col">
            <input type="number" name="O" step="any" tabindex="6" class="form-control form-control-sm" id="O" placeholder="O Obim sliva [km] x.y" required>
            <span style="color:red" ;>
                <?php if (array_key_exists('O', $errors)) {
                  echo $errors['O'];
                } ?></span>
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col">
            <input type="number" name="Nu" step="any" tabindex="7" class="form-control form-control-sm" id="Nu" placeholder="Nu  visina usca [km] x.y" required>
            <span style="color:red" ;>
                <?php if (array_key_exists('Nu', $errors)) {
                  echo $errors['Nu'];
                } ?></span>
        </div>
        <div class="form-group col">
            <input type="number" name="Fs" step="any" tabindex="8" class="form-control form-control-sm" id="Fs" placeholder="Fs Povrsina sliva [km2]" required>
            <span style="color:red" ;>
                <?php if (array_key_exists('Fs', $errors)) {
                  echo $errors['Fs'];
                } ?></span>
        </div>
        <div class="form-group col">
            <input type="number" name="Hgod" step="any" tabindex="13" class="form-control form-control-sm" id="Hgod" placeholder="Hgod Sred. god. kol. padavina [mm]" required>
            <span style="color:red" ;>
                <?php if (array_key_exists('Hgod', $errors)) {
                  echo $errors['Hgod'];
                } ?></span>
        </div>
        </div>
        <!--koeef Y-->
        <div class="form-row">
            <div class="form-group col-2 form-control-sm">
            
                <select class="custom-select custom-select-sm" type="number" name="y1" >
                    <option value="">Koef. Y[1]</option>
                    <?php
                    foreach ($koeficijenty as $value) {
                      echo "<option value='$value[y]'> $value[y],$value[tipzemljista],$value[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('y1', $errors)) {
                      echo $errors['y1'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm">
                <input type="number" name="py1" step="any" class="form-control form-control-sm" id="py1" placeholder=" P [%]"> 
            </div>
            <div class="form-group col-2 form-control-sm">
                
                <select class="custom-select custom-select-sm" type="number" name="y2">
                    <option value="">Koef. Y[2]</option>
                    <?php
                    foreach ($koeficijenty as $value) {
                      echo "<option value='$value[y]'> $value[y],$value[tipzemljista],$value[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('y2', $errors)) {
                      echo $errors['y2'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm">
                <input type="number" name="py2" step="any" class="form-control form-control-sm" id="py2" placeholder=" P [%]"> 
            </div>
            <div class="form-group col-2 form-control-sm">
                
                <select class="custom-select custom-select-sm" type="number" name="y3">
                    <option value="">Koef. Y[3]</option>
                    <?php
                    foreach ($koeficijenty as $value) {
                      echo "<option value='$value[y]'>$value[y],$value[tipzemljista], $value[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('y3', $errors)) {
                      echo $errors['y3'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm">
                <input type="number" name="py3" step="any" class="form-control form-control-sm" id="py3" placeholder=" P [%]"> 
            </div>
        </div>
        <!-- end koeef Y-->
        <!-- koef. f-->
        <div class="form-row">
            <div class="form-group col-2 form-control-sm">
                <select class="custom-select custom-select-sm" type="number" name="f1">
                    <option value="">Koef. f[1]</option>
                    <?php
                    foreach ($koeficijentf as $value) {
                      echo "<option value='$value[f]'>$value[f],$value[uslovi],$value[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('f1', $errors)) {
                      echo $errors['f1'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm">
                <input type="number" name="pf1" step="any" class="form-control form-control-sm" id="pf1" placeholder=" P [%]" > 
            </div>
            <div class="form-group col-2 form-control-sm">
                <select class="custom-select custom-select-sm" type="number" name="f2">
                    <option value="">Koef. f[2]</option>
                    <?php
                    foreach ($koeficijentf as $value) {
                      echo "<option value='$value[f]'>$value[f],$value[uslovi],$value[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('f2', $errors)) {
                      echo $errors['f2'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm">
                <input type="number" name="pf2" step="any" class="form-control form-control-sm" id="pf2" placeholder=" P [%]" > 
            </div>
            <div class="form-group col-2 form-control-sm">
                <select class="custom-select custom-select-sm" type="number" name="f3">
                    <option value="">Koef. f[3]</option>
                    <?php
                    foreach ($koeficijentf as $value) {
                      echo "<option value='$value[f]'>$value[f],$value[uslovi],$value[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('f3', $errors)) {
                      echo $errors['f3'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm">
                <input type="number" name="pf3" step="any" class="form-control form-control-sm" id="pf3" placeholder=" P [%]" > 
            </div>
        </div>
        <!--end koef. f-->
        <!-- koef. Xa-->
        <div class="form-row">
            <div class="form-group col-2 form-control-sm">
                <select class="custom-select custom-select-sm" type="number" name="xa1">
                    <option  value="">Koef.Xa[1]</option>
                    <?php
                    foreach ($koeficijentxa as $value) {
                      echo "<option value='$value[xa]'>$value[xa],$value[uslovi],$value[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('xa1', $errors)) {
                      echo $errors['xa1'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm">
                <input type="number" name="pxa1" step="any" class="form-control form-control-sm" id="pxa1" placeholder=" P [%]"> 
            </div>
            <div class="form-group col-2 form-control-sm">
                <select class="custom-select custom-select-sm" type="number" name="xa2">
                    <option  value="">Koef.Xa[2]</option>
                    <?php
                    foreach ($koeficijentxa as $value) {
                      echo "<option value='$value[xa]'>$value[xa],$value[uslovi],$value[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('xa2', $errors)) {
                      echo $errors['xa2'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm">
                <input type="number" name="pxa2" step="any" class="form-control form-control-sm" id="pxa2" placeholder=" P [%]"> 
            </div>
            <div class="form-group col-2 form-control-sm">
                <select class="custom-select custom-select-sm" type="number" name="xa3">
                    <option  value="">Koef.Xa[3]</option>
                    <?php
                    foreach ($koeficijentxa as $value) {
                      echo "<option value='$value[xa]'>$value[xa],$value[uslovi],$value[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('xa3', $errors)) {
                      echo $errors['xa3'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm">
                <input type="number" name="pxa3" step="any" class="form-control form-control-sm" id="pxa3" placeholder=" P [%]"> 
            </div>
<<<<<<< HEAD
        </div>
        <!-- end koef. Xa-->
        <div class="form-group col-4 ml-n3">
                Odaberite mapu sliva:
                <select type="text" name="image_name">
                    <option value=""></option>
                    <?php
                    foreach ($image as $value) {
                        echo "<option value='$value[image_name]'>$value[ime_sliva] : $value[image_name]</option>";
                    }
                    ?>
                </select>
        </div>
        <div class="form-group text-center py-4">
            <input type="submit" class="btn btn-primary" name="pagescs" value="Result Gavrilovic">
        </div>
        <?php
        echo "<span style=color:red;>$msg</span>";
        ?>
    </form>
  </div><!--end panel-login-->
</div><!--end container-->

<?php }else{
    
   include 'login.php'; 
} ?>
=======
            <div class="form-group text-center">
                <input type="submit" class="btn btn-primary" name="pagescs" value="Result Gavrilovic" class="btn btn-login">
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
>>>>>>> 6525f9a11d9645b090759bb9d0d8f0e10712b7ac
