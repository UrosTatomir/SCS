<?php
// session_start();
if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    $id_user=$user['id_user'];


<<<<<<< HEAD
require_once '../model/DAO.php';
$dao=new DAO();
$get_CN=$dao->getCN();
$hidro_klasa=$dao->getHidroloskaKlasa();
$msg = isset($msg) ? $msg : "";
$errors = isset($errors) ? $errors : array();
?>
<div class="container ">
        <nav aria-label="breadcrumb" class="col-md-6 offset-md-1">
          <ol class="breadcrumb bg-transparent font-weight-light">
            <li class="breadcrumb-item"><a href="https://estavela.in.rs">Estavela</a></li>
            <li class="breadcrumb-item"><a href="https://scs.estavela.in.rs">Home</a></li>
            <li class="breadcrumb-item active">SCS - odredjivanje prosecnog broja krive oticaja CN</li>
          </ol>
        </nav>   
        
        <div class="col-md-8 offset-md-1">
          <div class="row">
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
=======
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
>>>>>>> 6525f9a11d9645b090759bb9d0d8f0e10712b7ac
                    </div>
                  </div>
                </div>
             <!-- End Modal -->
         </div>
              <div class="col-md-3 mb-3 ">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-placement="top" title="Klasifikacija-tipova-zemljista-hidro-klase-SCS"  data-target="#exampleModalLong">
                  Hidroloske klase SCS
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Klasifikacija-tipova-zemljista-hidro-klase-SCS</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <img class="img-fluid" src="../images/Klasifikacija-tipova-zemljista-hidro-klase-SCS.jpeg" alt="Klasifikacija-tipova-zemljista-hidro-klase-SCS"/>
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
         </div>
        </div>
        <div class="col-md-8 offset-md-1 bg-light mb-3 p-3">
             <?php if(!empty($msg)){ ?>
              <alert class="bg-danger text-light"><?php echo $msg; ?></alert>
             <?php } ?>
            <h2 class="text-primary" style="font-size:16px;">Odredjivanje prosecnog broja krive oticaja CN za dati sliv</h2>
           <form   action="routes.php" id="scs-form" role="form">
               <input type="hidden" name="id_user" value="<?php echo $id_user;  ?>">
               <div class="form-group col-md-6 ml-n3">
                    Naziv sliva:<input type="text" name="ime" id="ime"  class="form-control form-control-sm" placeholder="ime sliva" required>
                    <span style="color:red" ;><?php if (array_key_exists('ime', $errors)) {
                                                    echo $errors['ime'];
                                                   }  ?></span>
               </div>
             <div class="form-row">
                   <div class="form-group col">
                        <input type="number" name="L" step="any"  class="form-control form-control-sm" id="L" placeholder="L [km] (x.y)" required>
                        <span style="color:red" ;><?php if (array_key_exists('L', $errors)) {
                                                        echo $errors['L'];
                                                    } ?></span>
                   </div>
                   <div class="form-group col">
                        <input type="number" name="F" step="any"  class="form-control form-control-sm" id="F" placeholder="F [km2](x.y)" required>
                        <span style="color:red" ;><?php if (array_key_exists('F', $errors)) {
                                                        echo $errors['F'];
                                                    } ?></span>
                   </div>
             </div>
             <!--===ugar===-->
             <div class="form-row ">
                   <div class="form-group col">
                         ugar:
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_ugar">
                            <option value="" ></option>
                            <?php
                            foreach ($get_CN as $value) {
                              if($value['nacin_koriscenja_zemljista']=='ugar'){
                                echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>"; 
                               }      
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_ugar">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] ,$value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2"> p[%]   
                        <input type="number" class="form-control form-control-sm"  name="p1" step="any" id="p1" placeholder=""/>    
                   </div>  
             </div>
             <!--===end ugar===-->
             
             <!--===okopavine===-->
             <div class="form-row">
                   <div class="form-group col ">
                        okopavine I:
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_okopavine_1">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                              if($value['nacin_koriscenja_zemljista']=='okopavine'){
                                echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                 
                              }
                                  
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_okopavine_1">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                         p_I[%]
                        <input type="number" class="form-control form-control-sm"  name="p21" step="any" placeholder="" >    
                   </div>      
             </div>
             <div class="form-row">
                   <div class="form-group col ">
                        okopavine II:
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_okopavine_2">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                              if($value['nacin_koriscenja_zemljista']=='okopavine'){
                                echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                 
                              }
                                  
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_okopavine_2">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                         p_II[%]
                        <input type="number" class="form-control form-control-sm"  name="p22" step="any" placeholder="" >    
                   </div>      
             </div>
             <div class="form-row">
                   <div class="form-group col ">
                        okopavine III:
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_okopavine_3">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                              if($value['nacin_koriscenja_zemljista']=='okopavine'){
                                echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                 
                              }
                                  
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_okopavine_3">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                         p_III[%]
                        <input type="number" class="form-control form-control-sm"  name="p23" step="any" placeholder="" >    
                   </div>      
             </div>
             <!--===end okopavine===-->
             
             <!--===zitarice===-->
             <div class="form-row">
                   <div class="form-group col">
                         zitarice I:
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_zitarice_1" placeholder="zitarice">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='zitarice'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_zitarice_1">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                         p_I[%]:
                        <input type="number" step="any" class="form-control form-control-sm"  name="p31" placeholder=""  />    
                   </div>      
             </div>
             <div class="form-row">
                   <div class="form-group col">
                         zitarice II:
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_zitarice_2" placeholder="zitarice">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='zitarice'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_zitarice_2">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                         p_II[%]:
                        <input type="number" step="any" class="form-control form-control-sm"  name="p32" placeholder=""  />    
                   </div>      
             </div>
             <div class="form-row">
                   <div class="form-group col">
                         zitarice III:
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_zitarice_3" placeholder="zitarice">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='zitarice'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_zitarice_3">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                         p_III[%]:
                        <input type="number" step="any" class="form-control form-control-sm"  name="p33" placeholder=""  />    
                   </div>      
             </div>
             <!--===end zitarice===-->
             
             <!--===mahunarke===-->
             <div class="form-row">
                   <div class="form-group col">
                        mahunarke I: 
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_mahunarke_1" placeholder="mahunarke u gustoj sad. ili livade u rotaciji">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='mahunarke u gustoj sad. ili livade u rotaciji'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_mahunarke_1">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                        p_I[%]:
                        <input type="number" step="any" class="form-control form-control-sm"  name="p41" placeholder=""  />    
                   </div>      
             </div>
             <div class="form-row">
                   <div class="form-group col">
                        mahunarke II: 
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_mahunarke_2" placeholder="mahunarke u gustoj sad. ili livade u rotaciji">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='mahunarke u gustoj sad. ili livade u rotaciji'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_mahunarke_2">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                        p_II[%]:
                        <input type="number" step="any" class="form-control form-control-sm"  name="p42" placeholder=""  />    
                   </div>      
             </div>
             <div class="form-row">
                   <div class="form-group col">
                        mahunarke III: 
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_mahunarke_3" placeholder="mahunarke u gustoj sad. ili livade u rotaciji">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='mahunarke u gustoj sad. ili livade u rotaciji'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_mahunarke_3">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                        p_III[%]:
                        <input type="number" step="any" class="form-control form-control-sm"  name="p43" placeholder=""  />    
                   </div>      
             </div>
             <!--===end mahunarke===-->
             
             <!--===pasnjaci===-->
             <div class="form-row">
                   <div class="form-group col">
                        pasnjaci I: 
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_pasnjaci_1" placeholder="pasnjaci">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='pasnjaci'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] ,$value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_pasnjaci_1">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                        p_1[%]: 
                        <input type="number" step="any" class="form-control form-control-sm"  name="p51" placeholder=""  />    
                   </div>      
             </div>
             <div class="form-row">
                   <div class="form-group col">
                        pasnjaci II: 
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_pasnjaci_2" placeholder="pasnjaci">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='pasnjaci'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] ,$value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_pasnjaci_2">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                        p_2[%]: 
                        <input type="number" step="any" class="form-control form-control-sm"  name="p52" placeholder=""  />    
                   </div>      
             </div>
             <div class="form-row">
                   <div class="form-group col">
                        pasnjaci III: 
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_pasnjaci_3" placeholder="pasnjaci">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='pasnjaci'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] ,$value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_pasnjaci_3">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                        p_3[%]: 
                        <input type="number" step="any" class="form-control form-control-sm"  name="p53" placeholder=""  />    
                   </div>      
             </div>
             <!--===end pasnjaci===-->
             
             <!--===livade===-->
             <div class="form-row">
                   <div class="form-group col">
                        livade: 
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_livade">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='livada'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_livade">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                        p[%]:
                        <input type="number" step="any" class="form-control form-control-sm"  name="p6" placeholder=""  />    
                   </div>      
             </div>
             <!--===end livade===-->
             
             <!--===sume===-->
             <div class="form-row">
                   <div class="form-group col">
                         sume I:
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_sume_1" placeholder="sume">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='sume'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_sume_1">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                        p_1[%]:
                        <input type="number" step="any" class="form-control form-control-sm"  name="p71" placeholder=""  />    
                   </div>      
             </div>
             <div class="form-row">
                   <div class="form-group col">
                         sume II:
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_sume_2" placeholder="sume">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='sume'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_sume_2">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                        p_2[%]:
                        <input type="number" step="any" class="form-control form-control-sm"  name="p72" placeholder=""  />    
                   </div>      
             </div>
             <div class="form-row">
                   <div class="form-group col">
                         sume III:
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_sume_3" placeholder="sume">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='sume'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_sume_3">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                        p_3[%]:
                        <input type="number" step="any" class="form-control form-control-sm"  name="p73" placeholder=""  />    
                   </div>      
             </div>
             <!--===end sume===-->
             
             <!--===seoska naselja===-->
             <div class="form-row">
                   <div class="form-group col">
                        seoska-naselja:
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_selo" placeholder="seoska naselja">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='seoska naselja'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_selo">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                        p[%]:
                        <input type="number" step="any" class="form-control form-control-sm"  name="p8" placeholder=""  />    
                   </div>      
             </div>
             <!--===end seoska naselja===-->
             
             <!--===putevi zemljani===-->
             <div class="form-row">
                   <div class="form-group col">
                        putevi-zemljani: 
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_put_zemljani" placeholder="putevi zemljani">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='putevi zemljani'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_put_zemljani">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                        p[%]:
                        <input type="number" step="any" class="form-control form-control-sm"  name="p9" placeholder=""  />    
                   </div>      
             </div>
             <!--===end putevi zemljani===-->
             
             <!--===putevi tvrdi===-->
             <div class="form-row">
                   <div class="form-group col">
                        putevi tvrdi: 
                        <select type="number" class="custom-select custom-select-sm" name="nacin_koriscenja_put_tvrdi" placeholder="putevi tvrdi">
                            <option value=""></option>
                            <?php
                            foreach ($get_CN as $value) {
                                  if($value['nacin_koriscenja_zemljista']=='putevi tvrdi'){
                                    echo "<option value='$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]'>$value[A],$value[B],$value[C],$value[D],$value[nacin_koriscenja_zemljista],$value[nacin_obrade] $value[hidroloski_uslovi]</option>";
                                     
                                  }
                              }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-4">
                         Hidro.klasa:
                        <select type="text" class="custom-select custom-select-sm" name="hidro_klasa_put_tvrdi">
                            <option value="" ></option>
                            <?php
                            foreach ($hidro_klasa as $value) { 
                                echo "<option value='$value[hidroloska_klasa] $value[tip_zemljista]'>$value[hidroloska_klasa],$value[tip_zemljista] </option>";        
                             }
                            ?>
                        </select>   
                   </div>
                   <div class="form-group col-2">
                         p[%]:
                        <input type="number" step="any" class="form-control form-control-sm"  name="p10" placeholder="" />    
                   </div>      
             </div>
             <!--===end putevi tvrdi===-->
              <button class="btn btn-primary" style="font-family: cursive, sans-serif; font-size: 16px;" name="pagescs" value="CN_sr_kriva">CN za dati sliv</button>
           </form>   
        </div>
       
        <div class="col-sm-12">
            
            <h6>Maksimalni proticaji na manjim slivnim površinama A < 1000 km2 su posledica kiša čije trajanje je kraće od 24h. </h6>   
            <p>Postupak optimizacije metoda SCS napisana je u PHP jeziku.Metod i ulazni parametri "CN", "k", "B","C" i "n", određeni su na osnovu metodologije iz udžbenika - Hidrologija Bujičnih tokova autora Ristić Ratka i Dragana Maloševića</p>
        </div>
        <div class="row">
                <div class="col-sm-6">
                    <p class="font-weight-bold font-italic">Unapred definisani koeficijenti - konstante:</p>
                    <ul class="font-weight-bold">
                        <li>α = 1.0</li>
                        <li>A = 0.3</li>
                        <li>C = 0.75</li>
                        <li>n = 0.336</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    
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
        </div><!--end row-->
        <div class="row">
            <div class="col-sm-6">
                <p class="font-weight-bold font-italic">Sintetički jedinični trougaoni hidrogram</p>
                <img src="../images/hidrogram.jpg" class="img-fluid" />
                <button class="btn btn-success  text-center" style="font-family: cursive, sans-serif; font-size: 16px;"><a class="text-light" href="routes.php?pagescs=showinsert">Metoda SCS</a></button>
            </div>
            <div class="col-sm-6 text-center  p-5">
                <p class="font-weight-bold font-italic">Maksimalni proticaj [m3/sec]:</p>
                <img src="https://scs.estavela.in.rs/images/Qmax.jpg" width="160" alt="Qmax"/>
                <p class="font-weight-bold font-italic">Vreme kasnjenja [h]:</p>
                <img src="https://scs.estavela.in.rs/images/tp.jpg" width="160" alt="vreme kasnjenja"/>
                <p class="font-weight-bold font-italic">Vreme porasta hidrograma [h]:</p>
                <img src="https://scs.estavela.in.rs/images/TpTk2.jpg" width="100" alt="vreme porasta hidrograma"/>
                <p class="font-weight-bold font-italic">Merodavna kisa trajanja T [h]:</p>
                <img src="https://scs.estavela.in.rs/images/Htp.jpg" width="240" alt="vreme porasta hidrograma"/>
                <p class="font-weight-bold font-italic">Efektivna kisa [mm]:</p>
                <img src="https://scs.estavela.in.rs/images/Pe.jpg" width="120" alt="Efektivna kisa"/>
                <p class="font-weight-bold font-italic">Deficit vlage u zemljistu [mm]:</p>
                <img src="https://scs.estavela.in.rs/images/d.jpg" width="140" alt="Deficit vlage u zemljistu"/>
                 <p class="font-weight-bold font-italic">Sintetički jedinični trougaoni hidrogram</p>    
            </div>
        </div>
       
</div><!--  container fluid-->
<?php }else{
   
    include 'login.php';
}
?>   