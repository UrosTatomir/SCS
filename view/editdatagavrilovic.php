
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
            <li class="breadcrumb-item active"><a href="https://scs.estavela.in.rs/view/routes.php?pagescs=showinsertgavrilovic"> Edit result metoda S.Gavrilovic</a></li>
          </ol>
</nav>    
<div class="container mt-3">
  <div class="container col-12  bg-light text-dark">
        <h1 class="text-center text-dark" style="font-family: cursive, sans-serif; font-size: 20px;">Proračun vučenog i suspendovanog nanosa po metodi potencijala erozije S.Gavrilovića</h1>
   <?php foreach($editgav as $value){ ?> 
    <form action="routes.php" id="gavrilovic_form" role="form" style="display: block;">
        <div class="form-group"><input type="hidden" name="id_user" value="<?php echo $id_user;  ?>">
        </div>
        <div class="form-group"><input type="hidden" name="idgav" value="<?php echo $value['idgav'];  ?>">
        </div>
        <div class="form-row">
            <div class="form-group col">
                <input type="text" name="imesliva" id="imesliva" tabindex="1" class="form-control form-control-sm" value="<?php echo$value['imesliva'];  ?>" placeholder="Naziv sliva" readonly>
                <span style="color:red" ;>
                    <?php 
                    if (array_key_exists('imesliva', $errors)) {
                      echo $errors['imesliva'];
                    } ?></span>
            </div>
            <div class="form-group col">
                <input type="number" name="Nsr" step="any" tabindex="2" class="form-control form-control-sm" id="Nsr" value="<?php echo$value['Nsr'];  ?>" placeholder="Nsr [km](npr x.y)" required>
                <span style="color:red" ;>
                    <?php if (array_key_exists('Nsr', $errors)) {
                      echo $errors['Nsr'];
                    } ?></span>
            </div>
            <div class="form-group col">
                <input type="number" name="Jsr" step="any" tabindex="3" class="form-control form-control-sm" id="Jsr" value="<?php echo$value['Jsr'];  ?>" placeholder="Jsr (npr x.y)" required>
                <span style="color:red" ;>
                    <?php if (array_key_exists('Jsr', $errors)) {
                      echo $errors['Jsr'];
                    } ?></span>
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col">
            <input type="number" name="t" step="any" tabindex="4" class="form-control form-control-sm" id="t" value="<?php echo$value['t'];  ?>" placeholder="t Srednja god. temp. vazduha (npr x.y)" required>
            <span style="color:red" ;>
                <?php if (array_key_exists('t', $errors)) {
                  echo $errors['t'];
                } ?></span>
        </div>
        <div class="form-group col">
            <input type="number" name="Ls" step="any" tabindex="5" class="form-control form-control-sm" id="Ls" value="<?php echo$value['Ls'];  ?>" placeholder="Ls Dužina sliva [km] (npr x.y)" required>
            <span style="color:red" ;>
                <?php if (array_key_exists('Ls', $errors)) {
                  echo $errors['Ls'];
                } ?></span>
        </div>
        <div class="form-group col">
            <input type="number" name="O" step="any" tabindex="6" class="form-control form-control-sm" id="O" value="<?php echo$value['O'];  ?>" placeholder="O Obim sliva [km] x.y" required>
            <span style="color:red" ;>
                <?php if (array_key_exists('O', $errors)) {
                  echo $errors['O'];
                } ?></span>
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col">
            <input type="number" name="Nu" step="any" tabindex="7" class="form-control form-control-sm" id="Nu" value="<?php echo$value['Nu'];  ?>" placeholder="Nu  visina usca [km] x.y" required>
            <span style="color:red" ;>
                <?php if (array_key_exists('Nu', $errors)) {
                  echo $errors['Nu'];
                } ?></span>
        </div>
        <div class="form-group col">
            <input type="number" name="Fs" step="any" tabindex="8" class="form-control form-control-sm" id="Fs" value="<?php echo$value['Fs'];  ?>" placeholder="Fs Povrsina sliva [km2]" required>
            <span style="color:red" ;>
                <?php if (array_key_exists('Fs', $errors)) {
                  echo $errors['Fs'];
                } ?></span>
        </div>
        <div class="form-group col">
            <input type="number" name="Hgod" step="any" tabindex="13" class="form-control form-control-sm" id="Hgod" value="<?php echo$value['Hgod'];  ?>" placeholder="Hgod Sred. god. kol. padavina [mm]" required>
            <span style="color:red" ;>
                <?php if (array_key_exists('Hgod', $errors)) {
                  echo $errors['Hgod'];
                } ?></span>
        </div>
        </div>
        <!--Koef. Y-->
        <div class="form-row">
            <div class="form-group col-2 form-control-sm">Koef. y1 :
                <select class="custom-select custom-select-sm" type="number" name="y1">
                
                    <option  value="<?php echo$value['y1']; ?>" selected="selected"><?php  echo$value['y1'];  ?></option>
                    <?php
                    foreach ($koeficijenty as $v) {
                      echo "<option value='$v[y]'> $v[y],$v[tipzemljista],$v[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('y1', $errors)) {
                      echo $errors['y1'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm">P [%]:
                    <input type="number" name="py1" step="any" class="form-control form-control-sm" id="py1" value="<?php echo$value['py1']; ?>" placeholder=" P [%]"> 
            </div>
            <div class="form-group col-2 form-control-sm">y2 :
                <select class="custom-select custom-select-sm" type="number" name="y2">
                
                    <option  value="<?php echo$value['y2']; ?>" selected="selected"><?php  echo$value['y2'];  ?></option>
                    <?php
                    foreach ($koeficijenty as $v) {
                      echo "<option value='$v[y]'> $v[y],$v[tipzemljista],$v[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('y2', $errors)) {
                      echo $errors['y2'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm">P [%]:
                    <input type="number" name="py2" step="any" class="form-control form-control-sm" id="py2" value="<?php echo$value['py2']; ?>" placeholder=" P [%]"> 
            </div>
            <div class="form-group col-2 form-control-sm">y3 :
                <select class="custom-select custom-select-sm" type="number" name="y3">
                
                    <option  value="<?php echo$value['y3']; ?>" selected="selected"><?php  echo$value['y3'];  ?></option>
                    <?php
                    foreach ($koeficijenty as $v) {
                      echo "<option value='$v[y]'> $v[y],$v[tipzemljista],$v[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('y3', $errors)) {
                      echo $errors['y3'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm">P [%]:
                    <input type="number" name="py3" step="any" class="form-control form-control-sm" id="py3" value="<?php echo$value['py3']; ?>" placeholder=" P [%]"> 
            </div>
        </div>
        <!--end Koef. Y-->
        <!--Koef. f-->
        <div class="form-row">
            <div class="form-group col-2 form-control-sm py-4">Koef.f1 :
                <select class="custom-select  custom-select-sm" type="number" name="f1">
                    <option value="<?php echo$value['f1']; ?>"><?php echo $value['f1']; ?></option>
                    <?php
                    foreach ($koeficijentf as $v) {
                      echo "<option value='$v[f]'>$v[f],$v[uslovi],$v[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('f', $errors)) {
                      echo $errors['f'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm py-4">P [%]:
                        <input type="number" name="pf1" step="any" class="form-control form-control-sm" id="pf1" value="<?php echo$value['pf1']; ?>" placeholder=" P [%]"> 
            </div>
            <div class="form-group col-2 form-control-sm py-4">f2 :
                <select class="custom-select custom-select-sm" type="number" name="f2">
                    <option value="<?php echo $value['f2']; ?>"><?php echo $value['f2']; ?></option>
                    <?php
                    foreach ($koeficijentf as $v) {
                      echo "<option value='$v[f]'>$v[f],$v[uslovi],$v[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('f2', $errors)) {
                      echo $errors['f2'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm py-4">P [%]:
                <input type="number" name="pf2" step="any" class="form-control form-control-sm" id="pf2" value="<?php echo$value['pf2']; ?>" placeholder=" P [%]"> 
            </div>
            <div class="form-group col-2 form-control-sm py-4">f3 :
                <select class="custom-select  custom-select-sm" type="number" name="f3">
                    <option value="<?php echo$value['f3']; ?>"><?php echo $value['f3']; ?></option>
                    <?php
                    foreach ($koeficijentf as $v) {
                      echo "<option value='$v[f]'>$v[f],$v[uslovi],$v[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('f3', $errors)) {
                      echo $errors['f3'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm py-4">P [%]:
                        <input type="number" name="pf3" step="any" class="form-control form-control-sm" id="pf3" value="<?php echo$value['pf3']; ?>" placeholder=" P [%]"> 
            </div>
        </div>
        <!--end Koef. f-->
        <!--Koef. Xa-->
        <div class="form-row">
            <div class="form-group col-2 form-control-sm py-4">Koef. Xa1:
                <select class="custom-select custom-select-sm" type="number" name="xa1">
                    <option value="<?php echo$value['xa1']; ?>"><?php echo $value['xa1']; ?></option>
                    <?php
                    foreach ($koeficijentxa as $v) {
                      echo "<option value='$v[xa]'>$v[xa],$v[uslovi],$v[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('xa1', $errors)) {
                      echo $errors['xa'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm py-4">P [%]:
                <input type="number" name="pxa1" step="any" class="form-control form-control-sm" id="pxa1" value="<?php echo$value['pxa1']; ?>" placeholder=" P [%]"> 
            </div>
            <div class="form-group col-2 form-control-sm py-4"> Xa2 :
                <select class="custom-select custom-select-sm" type="number" name="xa2">
                    <option value="<?php echo$value['xa2']; ?>"><?php echo $value['xa2']; ?></option>
                    <?php
                    foreach ($koeficijentxa as $v) {
                      echo "<option value='$v[xa]'>$v[xa],$v[uslovi],$v[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('xa2', $errors)) {
                      echo $errors['xa2'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm py-4">P [%]:
                <input type="number" name="pxa2" step="any" class="form-control form-control-sm" id="pxa2" value="<?php echo$value['pxa2']; ?>" placeholder=" P [%]"> 
            </div>
            <div class="form-group col-2 form-control-sm py-4"> Xa3 :
                <select class="custom-select custom-select-sm" type="number" name="xa3">
                    <option value="<?php echo$value['xa3']; ?>"><?php echo $value['xa3']; ?></option>
                    <?php
                    foreach ($koeficijentxa as $v) {
                      echo "<option value='$v[xa]'>$v[xa],$v[uslovi],$v[autor]</option>";
                    } ?>
                </select>
                <span style="color:red" ;>
                    <?php if (array_key_exists('xa3', $errors)) {
                      echo $errors['xa3'];
                    } ?></span>
            </div>
            <div class="form-group col-2 custom-select-sm py-4">P [%]:
                <input type="number" name="pxa3" step="any" class="form-control form-control-sm" id="pxa3" value="<?php echo$value['pxa3']; ?>" placeholder=" P [%]"> 
            </div>
        </div>
        <!--end Koef.Xa-->
        <div class="form-group col-4 mt-3 ml-n3">
                Odaberite mapu sliva:
                <select type="text" name="image_name">
                    <option value="<?php echo $value['image_name'];  ?>"><?php echo $value['image_name'];  ?></option>
                    <?php
                    foreach ($image as $pom) {
                        echo "<option value='$pom[image_name]'>$pom[ime_sliva] : $pom[image_name]</option>";
                    }
                    ?>
                </select>
        </div>
        <div class="form-group text-center py-4">
            <input type="submit" class="btn btn-primary" name="pagescs" value="Edit Gavrilovic">
        </div>
        <?php
        echo "<span style=color:red;>$msg</span>";
        ?>
    </form>
    <?php } ?> <!-- end foreach-->
  </div><!--end panel-login-->
</div><!--end container-->

<?php }else{
   include 'login.php'; 
} ?>