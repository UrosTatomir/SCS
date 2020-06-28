
<?php
// session_start();
if(isset($_SESSION['user'])){
$user=$_SESSION['user'];
// $id_user=$user['id_user'];

        require_once '../model/DAO.php';
        $dao = new DAO();
        $koeficijentK = $dao->getAllKoefK();
        $koeficijentB = $dao->getAllKoefB();
        $image = $dao->getImageId($id_user);

        $msg = isset($msg) ? $msg : "";
        $errors = isset($errors) ? $errors : array();
        
        ?>
    <nav aria-label="breadcrumb" class="col-md-5 offset-md-1">
          <ol class="breadcrumb bg-transparent font-weight-light">
            <li class="breadcrumb-item"><a href="https://estavela.in.rs">Estavela</a></li>
            <li class="breadcrumb-item"><a href="https://scs.estavela.in.rs">Home</a></li>
            <!--<li class="breadcrumb-item active"><a href="https://scs.estavela.in.rs/view/routes.php?pagescs=showscs">SCS Metoda</a></li>-->
            <li class="breadcrumb-item active">SCS Insert data</li>
          </ol>
    </nav>
    <div class="container">
      <div class="container col-md-8">
      <div class="row">
          <div class="col-md-3 mb-3 ">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-placement="top" title="Koef.oblika hidrograma u funkciji povrs.sliva F"  data-target="#exampleModalLong">
                  	Oblik hidrograma -K
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Koeficijent oblika hidrograma [k]</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <img class="img-fluid" src="../images/koeficijent-oblika-hidrograma-k.jpeg" alt="koeficijent-oblika-hidrograma-k"/>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
             <!-- End Modal -->
         </div>
         <div class="col-md-3 mb-3 ">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-placement="top" title="Karta izolinija koeficijenta B R.Srbija" data-target="#ModalLong1">
                  Karta izolinija -B SRB
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="ModalLong1" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle1" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="ModalLongTitle1">Karta izolinija koeficijenta  B R.Srbija</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <img class="img-fluid" src="../images/karta-izolinija-koeficijenta-B.jpeg" alt="karta-izolinija-koeficijenta-B"/>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
             <!-- End Modal -->
         </div>
         <div class="col-md-3 mb-3 ">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-placement="top" title="Brojevi krivih oticaja CN za prosecne vlaznosti" data-target="#ModalLong2">
                  CN-prosec. vlaznosti
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="ModalLong2" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle2" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="ModalLongTitle2">Brojevi krivih oticaja CN za prosecne vlaznosti</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <img class="img-fluid" src="../images/Brojevi-krivih-oticaja-CN-za-prosecne-vlaznosti.jpeg" alt="Brojevi krivih oticaja CN za prosecne vlaznosti"/>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
             <!-- End Modal -->
         </div>
         <div class="col-md-3 mb-3 ">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-placement="top" title="Brojevi krivih oticaja CN za tri uslova vlaznosti" data-target="#ModalLong">
                  Broj krivih oticaja CN
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="ModalLong" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="ModalLongTitle">Brojevi krivih oticaja CN za tri uslova vlaznosti</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <img class="img-fluid" src="../images/tabela-br-krivih-CN.jpeg" alt="brojevi-krivih-CN"/>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      </div>
                    </div>
                  </div>
                </div>
             <!-- End Modal -->
         </div>
      </div><!--end row-->
      </div><!--end container-->
      <div class="container p-5 col-md-8 bg-light text-dark">
           <h1 class="text-center text-dark" style="font-family: cursive, sans-serif; font-size: 22px;">Proračun Maksimalnog Proticaja "Metoda SCS"</h1>
        <form action="routes.php" id="scs-form" role="form" style="display: block;">
            
                <input type="hidden" name="id_user" value="<?php echo $id_user;  ?>">
            
            <div class="form-group">
                Naziv rečnog sliva:<input type="text" name="ime" id="ime" tabindex="1" class="form-control form-control-sm" placeholder="name" required>
                <span style="color:red" ;><?php if (array_key_exists('ime', $errors)) {
                                                echo $errors['ime'];
                                            }  ?></span>
            </div>
            <div class="form-group">
                Merodavno vreme trajanja kiše npr.(10,11,13,14,15,16,...):<input type="text" name="Tkh" id="Tkh" tabindex="2" class="form-control form-control-sm" placeholder="Tkh" required>
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
            <div class="form-row">
                <div class="form-group col">
                    <input type="number" name="L" step="any" tabindex="4" class="form-control form-control-sm" id="L" placeholder="L [km] (x.y)" required>
                    <span style="color:red" ;><?php if (array_key_exists('L', $errors)) {
                                                    echo $errors['L'];
                                                } ?></span>
                </div>
                <div class="form-group col">
                    <input type="number" name="Lc" step="any" tabindex="5" class="form-control form-control-sm" id="Lc" placeholder="Lc [km](x.y)" required> <span style="color:red" ;><?php if (array_key_exists('Lc', $errors)) {
                                                echo $errors['Lc'];
                                             } ?></span>
                </div>
                <div class="form-group col">
                     <input type="number" name="Iu" step="any" tabindex="6" class="form-control form-control-sm" id="Iu" placeholder="Iu [%]" required> <span style="color:red" ;>
                    <?php if (array_key_exists('Iu', $errors)) {
                                echo $errors['Iu'];
                           } ?></span>
                </div>
                <div class="form-group col">
                    <input type="number" name="F" step="any" tabindex="7" class="form-control form-control-sm" id="F" placeholder="F [km2](x.y)" required>
                    <span style="color:red" ;><?php if (array_key_exists('F', $errors)) {
                                                    echo $errors['F'];
                                                } ?></span>
                </div>
            </div>
            <div class="form-group">
                Koeficijent B -dobija se na osnovu karte izolinija(celi broj ili x.y):
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
            <div class="row">
                <div class="form-group col">
                    <input type="number" name="H24h" step="any" tabindex="9" class="form-control form-control-sm " id="H24h" placeholder="H24h Maksimalna dnevna kiša[mm]" required>
                    <span style="color:red" ;><?php if (array_key_exists('H24h', $errors)) {
                                                    echo $errors['H24h'];
                                                } ?></span>
                </div>
                <div class="form-group col">
                    <input type="number" name="CN" step="any" tabindex="10" class="form-control form-control-sm" id="CN" placeholder="CN Broj krive oticaja" required> <span style="color:red" ;><?php if (array_key_exists('CN', $errors)) {
                             echo $errors['CN'];
                           } ?></span>
                </div>
            </div>
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
            <div class="form-group">
                <input type="submit" name="pagescs" id="result" tabindex="11" value="result" class="btn btn-primary">
            </div>
            <?php echo "<span style=color:red;>$msg</span>"; ?>
        </form>

     </div>
  </div><!--end container -->
    
<?php }else{
    
    include 'login.php';
} ?>
