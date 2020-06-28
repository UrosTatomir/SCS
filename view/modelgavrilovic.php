
<?php
require_once '../controllers/gavrilovic.php';
require_once '../model/DAO.php';
// session_start();
if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    $id_user=$user['id_user'];
    
if(isset($_SESSION['model_gav'])){
$model_gav=$_SESSION['model_gav'];

// $id_user=$_GET['id_user'];
$imesliva =$_SESSION['model_gav'][0];
$Nsr =$_SESSION['model_gav'][1];
$Jsr =$_SESSION['model_gav'][2];
$t =$_SESSION['model_gav'][3];
$Ls = $_SESSION['model_gav'][4];
$O =$_SESSION['model_gav'][5];
$Nu =$_SESSION['model_gav'][6];
$Fs =$_SESSION['model_gav'][7];
$y1 =$_SESSION['model_gav'][8];
$py1 =$_SESSION['model_gav'][9];
$y2 =$_SESSION['model_gav'][10];
$py2 =$_SESSION['model_gav'][11];
$y3 =$_SESSION['model_gav'][12];
$py3 =$_SESSION['model_gav'][13];
$xa1 =$_SESSION['model_gav'][14];
$pxa1 =$_SESSION['model_gav'][15];
$xa2 =$_SESSION['model_gav'][16];
$pxa2 =$_SESSION['model_gav'][17];
$xa3 =$_SESSION['model_gav'][18];
$pxa3 =$_SESSION['model_gav'][19];
$f1 =$_SESSION['model_gav'][20];
$pf1 =$_SESSION['model_gav'][21];
$f2 =$_SESSION['model_gav'][22];
$pf2 =$_SESSION['model_gav'][23];
$f3 =$_SESSION['model_gav'][24];
$pf3 =$_SESSION['model_gav'][25];
$Hgod =$_SESSION['model_gav'][26];
$image_name=$_SESSION['model_gav'][27];
}

?>
    
<nav aria-label="breadcrumb" class="col-md-5 offset-md-1">
      <ol class="breadcrumb bg-transparent font-weight-light">
        <li class="breadcrumb-item"><a href="https://estavela.in.rs">Estavela</a></li>
        <li class="breadcrumb-item"><a href="https://scs.estavela.in.rs">Home</a></li>
        <!--<li class="breadcrumb-item active"><a href="https://scs.estavela.in.rs/view/routes.php?pagescs=showscs">SCS Metoda</a></li>-->
        <li class="breadcrumb-item active"> Metod potencijala erozije S.Gavrilovića</li>
      </ol>
</nav>
<div class="container mt-3 " id="printable">
            
            <div class="row">
                <div class="col-6">
                    <h5 class="text-primary" style="font-size:18px;">Ulazni parametri</h5>
                    <?php
                    $dao=new DAO();
                    $yuslov=$dao->getAllKoefY();
                    $xuslov=$dao->getAllKoefXA(); 
                    $fuslov=$dao->getAllKoefF();
                    echo "<h5 class='text-dark' style='font-size:18px;'>Naziv sliva = $imesliva</h5> <br>";
                    echo "<h5 class='font-italic' style='font-size:15px;'>Srednja nadmorska visina sliva Nsr =  $Nsr [km] </h5>";
                    echo "<h5 class='font-italic' style='font-size:15px;'>Srednji pad sliva Jsr =". $Jsr*1000 ." [‰]ili[m/km]</h5>";
                    echo "<h5 class='font-italic' style='font-size:15px;'>Srenja godisnja temperatura podrucja t = $t [Cº] </h5>";
                    echo "<h5 class='font-italic' style='font-size:15px;'>Duzina sliva po glavnom toku Ls = $Ls [km] </h5>";
                    echo "<h5 class='font-italic' style='font-size:15px;'>Obim sliva O = $O [km] </h5>";
                    echo "<h5 class='font-italic' style='font-size:15px;'>Nadmorska visina usca - ulivnog profila Nu = $Nu [km] </h5>";
                    echo "<h5 class='font-italic' style='font-size:15px;'>Povrsina sliva Fs = $Fs [km²] </h5><br>";
                    
                    echo "<h5 class='font-italic text-primary' style='font-size:16px;'>Koeficijent Y  predstavlja reciprocnu vrednost koeficijenta otpora zemljista na eroziju, i zavisi od geoloske podloge,klimata i pedoloskih tipova zemljista </h5><br>";
                    foreach($yuslov as $value){
                        if($value['y']==$y1){
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Tip zemljista koef.  y1 - ". $y1 ." - ". $value['tipzemljista']." na ". $py1*100 ."% od ukupne povrsine sliva </h5><br>";
                        }
                        if($value['y'] == $y2){
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Tip zemljista koef.  y2  - " . $y2 ." - ". $value['tipzemljista']." na ". $py2*100 ."% od ukupne povrsine sliva </h5><br>";
                        }
                        if($value['y'] == $y3){
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Tip zemljista koef.  y3  - " . $y3 ." - ". $value['tipzemljista']." na ". $py3*100 ."% od ukupne povrsine sliva </h5><br>";
                        }
                    }
                    echo "<h5 class='font-italic text-primary' style='font-size:16px;'>Koeficijent  Xa    predstavlja uredjenje sliva ili erozionog podrucja i odnosi se na zasticenost zemljista od uticaja padavina </h5><br>";
                    foreach($xuslov as $value){
                        if($value['xa']==$xa1){    
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Uslov koef. Xa1 - " . $xa1 ." - " . $value[uslovi]." na ". $pxa1*100 ."% od ukupne povrsine sliva </h5><br>";
                        }
                        if($value['xa']==$xa2){    
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Uslov koef. Xa2  - " . $xa2 ." - " . $value[uslovi]." na ". $pxa2*100 ."% od ukupne povrsine sliva </h5><br>";
                        }
                        if($value['xa']==$xa3){    
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Uslov koef. Xa3  - " . $xa3 ." - " . $value[uslovi]." na ". $pxa3*100 ."% od ukupne povrsine sliva </h5><br>";
                        }
                    }
                    echo "<h5 class='font-italic text-primary' style='font-size:16px;'>Koeficijent f  predstavlja brojni ekvivalent vidljivih i jasno izrazenih procesa erozije u slivu podrucja </h5><br>";
                    foreach($fuslov as $value){
                        if($value['f']==$f1){
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Uslov koef. f1  - " . $f1 . " - " . $value[uslovi]." na ". $pf1*100 ."% od ukupne povrsine sliva </h5><br> ";
                        }
                        if($value['f']==$f2){
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Uslov koef. f2  - " . $f2 . " - " . $value[uslovi]." na ". $pf2*100 ."% od ukupne povrsine sliva </h5><br> ";
                        }
                        if($value['f']==$f3){
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Uslov koef. f3  - " . $f3 . " - " . $value[uslovi]." na ". $pf3*100 ."% od ukupne povrsine sliva </h5><br> ";
                        }
                    }
                    echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Srednja godisnja kolicina padavina Hgod = $Hgod [mm]</h5> <br>";
                    ?>
                </div>
                <div class="col-6">
                  <h5 class="text-success" style="font-size: 18px;">rezultati proracuna - Metoda potencijala erozije S.Gavrilovic</h5>  
                    <?php
                    $gavrilovic = new Gavrilovic();
                    $gavrilovic->metodProracunaGavrilovic($id_user,$imesliva, $t, $Hgod, $y1, $py1, $y2, $py2, $y3, $py3, $xa1, $pxa1, $xa2, $pxa2, $xa3, $pxa3, $f1, $pf1, $f2, $pf2, $f3, $pf3, $Jsr, $Fs, $O, $Nsr, $Nu, $Ls,$image_name);
                
                    ?>
                    <!--<div class="col-md-6 mt-5">-->
                    
                       <?php if(!empty($image_name)){ ?>
                       
                        <img src="../images/<?php echo $image_name; ?>" class="img-fluid" alt="mapa sliva"/>
                        
                       <?php }else{
                           echo'<h6 class=text-primary>Odaberite mapu sliva i ponovite proracun editGavrilovic</h6>';
                         }
                       ?> 
                    <!--</div>-->
                </div>
                
            </div>
        <h3 class="btn btn-primary" data-placement="top" title="open folder result metoda Gavrilovic"><a class="text-white" href="routes.php?pagescs=printresultgavrilovic&id_user=<?php echo $id_user; ?>"><i class='far fa-folder-open'></i> Potencijal erozije</a></h3>
        <br>
        <!--<button onclick="window.print();">Print page</button>-->
        <button class="btn btn-primary hidden-print" data-placement="top" title="Print project" onclick="printDiv('printable')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
            <script>
                function printDiv(container) {
                 var printContents = document.getElementById(container).innerHTML;
                 
                 var originalContents = document.body.innerHTML;
               
                 window.print();
                 document.body.innerHTML = originalContents;         
                }
            </script>
</div>
    
<?php }else{
    include 'login.php';
} ?>
