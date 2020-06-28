<?php
require_once '../controllers/edit_gavrilovic.php';
require_once '../model/DAO.php';
// session_start();
if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    $id_user=$user['id_user'];
    
if(isset($_SESSION['edit_gav'])){
$edit_gav=$_SESSION['edit_gav'];

$idgav=$_SESSION['edit_gav'][0];
$imesliva =$_SESSION['edit_gav'][1];
$Nsr =$_SESSION['edit_gav'][2];
$Jsr =$_SESSION['edit_gav'][3];
$t =$_SESSION['edit_gav'][4];
$Ls = $_SESSION['edit_gav'][5];
$O =$_SESSION['edit_gav'][6];
$Nu =$_SESSION['edit_gav'][7];
$Fs =$_SESSION['edit_gav'][8];
$y1 =$_SESSION['edit_gav'][9];
$py1 =$_SESSION['edit_gav'][10];
$y2 =$_SESSION['edit_gav'][11];
$py2 =$_SESSION['edit_gav'][12];
$y3 =$_SESSION['edit_gav'][13];
$py3 =$_SESSION['edit_gav'][14];
$xa1 =$_SESSION['edit_gav'][15];
$pxa1 =$_SESSION['edit_gav'][16];
$xa2 =$_SESSION['edit_gav'][17];
$pxa2 =$_SESSION['edit_gav'][18];
$xa3 =$_SESSION['edit_gav'][19];
$pxa3 =$_SESSION['edit_gav'][20];
$f1 =$_SESSION['edit_gav'][21];
$pf1 =$_SESSION['edit_gav'][22];
$f2 =$_SESSION['edit_gav'][23];
$pf2 =$_SESSION['edit_gav'][24];
$f3 =$_SESSION['edit_gav'][25];
$pf3 =$_SESSION['edit_gav'][26];
$Hgod =$_SESSION['edit_gav'][27];
$image_name=$_SESSION['edit_gav'][28];
}       
?>
    
<nav aria-label="breadcrumb" class="col-md-8 offset-md-1">
      <ol class="breadcrumb bg-transparent font-weight-light">
        <li class="breadcrumb-item"><a href="https://estavela.in.rs">Estavela</a></li>
        <li class="breadcrumb-item"><a href="https://scs.estavela.in.rs">Home</a></li>
        <!--<li class="breadcrumb-item active"><a href="https://scs.estavela.in.rs/view/routes.php?pagescs=showscs">SCS Metoda</a></li>-->
        <li class="breadcrumb-item active">Model potencijala erozije S.Gavrilovica edit result , id= <?php echo$idgav; ?></li>
      </ol>
</nav>
<div class="container mt-3" id="printable">
            
            <div class="row">
                <div class="col-6">
                    <h5 class="text-primary" style="font-size:18px;">Ulazni parametri</h5>
                    <?php
                    $dao= new DAO();
                    // $yuslov=$dao->getUslovKoefY($y);
                    $yuslov=$dao->getAllKoefY();
                    $xuslov=$dao->getAllKoefXA();
                    $fuslov=$dao->getAllKoefF();
                    echo "<h5 class='text-dark' style='font-size:18px;'>Naziv sliva = $imesliva</h5> <br>";
                    echo "<h5 class='font-italic' style='font-size:15px;'>Srednja nadmorska visina sliva  Nsr =  $Nsr [km] </h5>";
                    echo "<h5 class='font-italic' style='font-size:15px;'>Srednji pad sliva Jsr = ". $Jsr*1000 . " [‰] ili [m/km]</h5>";
                    echo "<h5 class='font-italic' style='font-size:15px;'>Srenja godisnja temperatura podrucja t = $t [Cº] </h5>";
                    echo "<h5 class='font-italic' style='font-size:15px;'>Duzina sliva po glavnom toku Ls = $Ls [km] </h5>";
                    echo "<h5 class='font-italic' style='font-size:15px;'>Obim sliva O = $O [km] </h5>";
                    echo "<h5 class='font-italic' style='font-size:15px;'>Nadmorska visina usca - ulivnog profila Nu = $Nu [km] </h5>";
                    echo "<h5 class='font-italic' style='font-size:15px;'>Povrsina sliva Fs = $Fs [km²] </h5>";
                    
                   echo "<h5 class='font-italic text-primary' style='font-size:16px;'>Koeficijent Y  predstavlja reciprocnu vrednost koeficijenta otpora zemljista na eroziju, i zavisi od geoloske podloge,klimata i pedoloskih tipova zemljista </h5><br>";
                    foreach($yuslov as $value){
                        if($value['y']==$y1){
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Tip zemljista koef. y1 - ". $y1 ." - ". $value['tipzemljista']." na ". $py1*100 ."% od ukupne povrsine sliva </h5><br>";
                        }
                        if($value['y'] == $y2){
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Tip zemljista koef. y2 - " . $y2 ." - ". $value['tipzemljista']." na ". $py2*100 ."% od ukupne povrsine sliva </h5><br>";
                        }
                        if($value['y'] == $y3){
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Tip zemljista koef. y3 - " . $y3 ." - ". $value['tipzemljista']." na ". $py3*100 ."% od ukupne povrsine sliva </h5><br>";
                        }
                    }
                    echo "<h5 class='font-italic text-primary' style='font-size:16px;'>Koeficijent  Xa    predstavlja uredjenje sliva ili erozionog podrucja i odnosi se na zasticenost zemljista od uticaja padavina </h5><br>";
                    foreach($xuslov as $value){
                        if($value['xa']==$xa1){    
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Uslov koef. Xa1 - " . $xa1 ." - " . $value[uslovi]." na ". $pxa1*100 ."% od ukupne povrsine sliva </h5><br>";
                        }
                        if($value['xa']==$xa2){    
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Uslov koef. Xa2 - " . $xa2 ." - " . $value[uslovi]." na ". $pxa2*100 ."% od ukupne povrsine sliva </h5><br>";
                        }
                        if($value['xa']==$xa3){    
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Uslov koef. Xa3 - " . $xa3 ." - " . $value[uslovi]." na ". $pxa3*100 ."% od ukupne povrsine sliva </h5><br>";
                        }
                    }
                    echo "<h5 class='font-italic text-primary' style='font-size:16px;'>Koeficijent f  predstavlja brojni ekvivalent vidljivih i jasno izrazenih procesa erozije u slivu podrucja </h5><br>";
                    foreach($fuslov as $value){
                        if($value['f']==$f1){
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Uslov koef.  f1 - " . $f1 . " - " . $value[uslovi]." na ". $pf1*100 ."% od ukupne povrsine sliva </h5><br> ";
                        }
                        if($value['f']==$f2){
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Uslov koef.  f2 - " . $f2 . " - " . $value[uslovi]." na ". $pf2*100 ."% od ukupne povrsine sliva </h5><br> ";
                        }
                        if($value['f']==$f3){
                        echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Uslov koef.  f3 - " . $f3 . " - " . $value[uslovi]." na ". $pf3*100 ."% od ukupne povrsine sliva </h5><br> ";
                        }
                    }
                    echo "<h5 class='font-weight-bold font-italic' style='font-size: 16px;'>Srednja godisnja kolicina padavina Hgod = $Hgod [mm]</h5> <br>";
                    ?>
                </div>
                <div class="col-6">
                  <h5 class="text-success">rezultati proracuna</h5>  
                    <?php
                    $gavrilovic = new Editgav();
                    $gavrilovic->editProracunaGavrilovic($idgav,$imesliva, $t, $Hgod, $y1, $py1, $y2, $py2, $y3, $py3, $xa1, $pxa1, $xa2, $pxa2, $xa3, $pxa3, $f1, $pf1, $f2, $pf2, $f3, $pf3, $Jsr, $Fs, $O, $Nsr, $Nu, $Ls,$image_name);
                    ?>
                    <?php if(!empty($image_name)){ ?>
                       
                        <img src="../images/<?php echo $image_name; ?>" class="img-fluid" alt="mapa sliva"/>
                        
                     <?php }else{
                           echo'<h6 class=text-primary>Odaberite mapu sliva i ponovite proracun editGavrilovic</h6>';
                         }
                       ?> 
                </div>
            </div>
        <h3 class="btn btn-primary" data-placement="top" title="open folder result metoda Gavrilovic"><a class="text-white" href="routes.php?pagescs=printresultidgav&idgav=<?php echo $idgav; ?>"><i class='far fa-folder-open'></i> Potencijal erozije Gavrilovic</a></h3>
        <br>
        
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