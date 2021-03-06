
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="../canvasjs/canvasjs.min.js"></script> 

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    
<?php 
// session_start();

require_once '../controllers/edit_hidrogram.php';
require_once '../model/DAO.php';
if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    $id_user=$user['id_user'];
}
if(isset($_SESSION['edit_model_index'])){
    $edit_model_index=$_SESSION['edit_model_index'];
}

?>
    
    <div class="container-fluid" id="printable" >
       
     <nav aria-label="breadcrumb" class="col-md-5 offset-md-1">
          <ol class="breadcrumb bg-transparent font-weight-light">
            <li class="breadcrumb-item"><a href="https://estavela.in.rs">Estavela</a></li>
            <li class="breadcrumb-item"><a href="https://scs.estavela.in.rs">Home</a></li>
            <!--<li class="breadcrumb-item active"><a href="https://scs.estavela.in.rs/view/routes.php?pagescs=showscs">SCS Metoda</a></li>-->
            <li class="breadcrumb-item active">Edit Model SCS</li>
          </ol>
    </nav>
     <div class="container mt-3" >
            <h1 class="text-center" style="font-family: cursive, sans-serif; color:#2A65CB; font-size:20px;">Proračun Maksimalnog Proticaja "Metoda SCS"</h1>
            <?php echo "<h6> Rečni sliv  $ime </h6>"; ?>
             
                <?php //$id_user,$ime,$Tkh,$k,$L,$Lc,$Iu,$F,$Bm,$H24h,$CN	
                $id_user=$_SESSION['edit_model_index'][0];
                $id=$_SESSION['edit_model_index'][1];
                $ime = $_SESSION['edit_model_index'][2];
                $Tkh = $_SESSION['edit_model_index'][3];
                $Tk = explode(',', $Tkh);

                $a = 120; //min -> h/2;
                $b = 1440; //za 24 h p = 1% 1440 ; 12h p = 1%  770 ;
                $c = 0.3;
                $k = $_SESSION['edit_model_index'][4]; //koeficijent oblika hidrograma = 1
                $L = $_SESSION['edit_model_index'][5];    //km;
                $Lc = $_SESSION['edit_model_index'][6]; //km;
                $Iu = $_SESSION['edit_model_index'][7];  // %;
                $Ap = 0.3;
                $F = $_SESSION['edit_model_index'][8]; //km2
                $Bm = $_SESSION['edit_model_index'][9];  //koef. sa grafikona za date npr0.82 za podrucje Kotora uslove;
                $H24h = $_SESSION['edit_model_index'][10]; // mm/24h;
                $CN = $_SESSION['edit_model_index'][11];
                $image_name=$_SESSION['edit_model_index'][12];
                $d = 25.4 * ((1000 / $CN) - 10);
                $I = 0.2 * $d;
                $hidroscs = new Hidrogram();
                
                $result = $hidroscs->maxP($Tk, $F, $Ap, $k, $a, $b, $c, $L, $Lc, $Iu, $H24h, $Bm, $CN,$n);
                // var_dump($result);
                if(isset($_SESSION['n'])&&!empty($result)){
                    $n=$_SESSION['n'];
                    $r=$n;   
                }
                // var_dump($r);
                // $hidroscs->SCS($ime);
                ?>
             <div class="col-md-12 table-responsive text-white">     
                <h6 class="text-dark">Ulazni podaci</h6>
                 <table class="table table-sm">
                 <tbody class="bg-light text-dark"> 
                   <tr>
                    <td><?php echo 'Naziv sliva : '.$ime .',' ?></td>  
                    <td><?php echo 'H24h=' . $H24h . 'mm'; ?></td>
                    <td><?php echo 'k=' . $k. ' (koef.oblika hidrograma)'; ?></td>
                    <td><?php echo 'L=' . $L . ' km.'; ?></td>
                    <td><?php echo 'Lc=' . $Lc . ' km.'; ?></td>
                    <td><?php echo 'Iu=' . $Iu*100 . ' %.';  ?></td>
                    <td><?php echo 'F=' . $F . ' km2.'; ?></td>
                  </tr>
                </tbody>
                </table>
                <table class="table table-sm">
                 <tbody class="bg-light text-dark"> 
                   <tr>
                    <td><?php echo 'Bm=' . $Bm . 'koef. izolinije';?></td>
                    <td><?php echo 'b=' . $b. '  za  24h p=1% ';?></td>
                    <td><?php echo 'A='.$c; ?></td>
                    <td><?php echo 'Ap=' . $Ap;  ?></td>
                    <td><?php echo 'CN=' . $CN ;?></td>
                    <td><?php echo 'd=' . number_format($d,2,'.','') ;?></td>
                    <td><?php echo 'pocetni gubici I='.number_format($I,1,'.','').' mm '; ?></td>
                  </tr>
                </tbody>
                </table>  
             </div>
             <div class="row">
                 <div class="col-md-6">
                    <h6 class="text-dark">Sezona mirovanja</h6>
                    <table class="table table-sm">
                     <tbody class="bg-light text-dark">
                      <tr>
                         <?php if($I<13){ ?> 
                         <td>I (SUVO STANJE)</td>
                         <?php }elseif($I>13&&$I<28){ ?>
                         <td>II (PROSECNO STANJE)</td>
                         <?php }elseif($I>28){ ?>
                         <td>III (VLAZNO STANJE)</td>
                         <?php } ?>
                      </tr>
                     </tbody>    
                    </table>
                 </div>
                 <div class="col-md-6">
                    <h6 class="text-dark">Sezona vegetacije</h6>
                    <table class="table table-sm">
                     <tbody class="bg-light text-dark">
                      <tr>
                         <?php if($I<36){ ?> 
                         <td>I (SUVO STANJE)</td>
                         <?php }elseif($I>36&&$I<53){ ?>
                         <td>II (PROSECNO STANJE)</td>
                         <?php }elseif($I>53){ ?>
                         <td>III (VLAZNO STANJE)</td>
                         <?php } ?>
                      </tr>
                     </tbody>    
                    </table>
                 </div>
             </div>
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
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-placement="top" title="Karta izolinija koeficijenta B R.Srbija" data-target="#ModalLong2">
                  Karta izolinija -B SRB
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="ModalLong2" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle2" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="ModalLongTitle2">Karta izolinija koeficijenta  B R.Srbija</h5>
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
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-placement="top" title="Brojevi krivih oticaja CN za prosecne vlaznosti" data-target="#ModalLong3">
                  CN-prosec. vlaznosti
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="ModalLong3" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle3" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="ModalLongTitle3">Brojevi krivih oticaja CN za prosecne vlaznosti</h5>
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
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-placement="top" title="Brojevi krivih oticaja CN za tri uslova vlaznosti" data-target="#exampleModalLong1">
                      Brojevi krivih oticaja CN
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle1">Brojevi krivih oticaja CN za tri uslova vlaznosti</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                           <img class="img-fluid" src="../images/tabela-br-krivih-CN.jpeg" alt="brojevi-krivih-CN"/>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                 <!-- End Modal -->
                </div>
            </div>
            <div class="col-md-12">
            <div class="row">
                <div class="col-sm-1">
                    <?php
                    echo 'Tk[min]:';
                    echo '<br>';
                    $tkr = $hidroscs->trKi($Tk);
                    $br=0;
                    foreach ($tkr as $value) {
                        $br++;
                    ?>
                    <table>
                        <tr>
                    <?php  if($br==$r){ ?>
                           <td class="text-danger font-weight-bold" width=200><?php echo $value ?></td>
                    <?php }else{ ?>
                           <td width="200"><?php echo $value ?></td>
                    <?php } ?>
                        </tr>
                    </table>
                
                  <?php  } ?>
                </div>
                <div class="col-sm-1">
                    <?php
                    echo 'Tk[h]:';
                    echo '<br>';
                    $tkh = $hidroscs->trKiH($Tk);
                    $br=0;
                    foreach ($tkh as $value) {
                        $br++;
                    ?>
                    <table>
                        <tr>
                    <?php  if($br==$r){ ?>
                           <td class="text-danger font-weight-bold" width=200><?php echo $value; ?></td>
                    <?php }else{ ?>
                           <td width="200"><?php echo $value; ?></td>
                    <?php } ?>
                        </tr>
                    </table>
                
                  <?php  } ?>
                </div>
                <div class="col-sm-1 bg-light">
                <?php
                //vreme porasta hidrograma
                $Tph=$hidroscs->vPHi($Tk, $a, $L, $Lc, $Iu);
                echo 'Tph[h]:';
                    echo '<br>';
                $br=0;
                    foreach ($Tph as $value) {
                        $br++;
                    ?>
                    <table>
                        <tr>
                    <?php  if($br==$r){ ?>
                           <td class="text-danger font-weight-bold" width=200><?php echo number_format($value, 1, '.', ''); ?></td>
                    <?php }else{ ?>
                           <td width="200"><?php echo number_format($value, 1, '.', ''); ?></td>
                    <?php } ?>
                        </tr>
                    </table>
                
                  <?php  }
                
                $Tp=number_format(min($Tph), 2, '.', '');
                ?>
                </div>
                <?php
                //vreme opadanja hidrograma
                $Tr=$hidroscs->vOHi($Tk, $k, $a, $L, $Lc, $Iu);
                // var_dump($Tr);
                $Trh=min($Tr);
                ?>
                <!--baza hidrograma $Tb-->
                <div class="col-sm-1">
                <?php
                 echo 'Tb[h]:';
                    echo '<br>';
                 $Tb=$hidroscs->bazaHi($Tk, $k, $a, $L, $Lc, $Iu);
                 $br=0;
                 foreach($Tb as $value){
                     $br++;   
                 ?>
                     <table>
                        <tr>
                            <?php if($br==$r){ ?>
                            <td class="text-danger font-weight-bold" width="200"><?php echo number_format($value, 1, '.', ''); ?></td>
                            <?php }else{ ?>
                            <td width="200"><?php echo number_format($value, 1, '.', ''); ?></td>
                            <?php } ?>
                        </tr>
                     </table> 
                <?php  }
                 
                 $Tbh=number_format(max($Tb), 2, '.', '');
                
                //  var_dump($Tbv);
                 
                ?>
                </div>
                <div class="col-sm-2 bg-light text-dark ">
                    <?php
                    echo 'Htp[mm.]';
                    echo '<br>';
                    $Htp=$hidroscs->mKiTr($Tk, $Ap, $b, $c, $Bm, $H24h);
                    $br=0;
                
                 foreach($Htp as $value){
                     $br++;   
                 ?>
                     <table>
                        <tr>
                            <?php if($br==$r){ ?>
                            <td class="text-danger font-weight-bold" width="200"><?php echo number_format($value, 1, '.', ''); ?></td>
                            <?php }else{ ?>
                            <td width="200"><?php echo number_format($value, 1, '.', ''); ?></td>
                            <?php } ?>
                        </tr>
                     </table>   
                <?php  } ?>
               
                </div>
                <div class="col-sm-2">
                <?php
                     echo 'Pe[mm.]';
                     echo '<br>';
                     $Pe=$hidroscs->efPad($Tk, $Ap, $b, $c, $H24h, $Bm, $CN);
                     $br=0;
                      foreach($Pe as $value){
                         $br++; ?>
                         <table>
                        <tr>
                            <?php if($br==$r){ ?>
                            <td class="text-danger font-weight-bold" width="200"><?php echo number_format($value, 1, '.', ''); ?></td>
                            <?php }else{ ?>
                            <td width="200"><?php echo number_format($value, 1, '.', ''); ?></td>
                            <?php } ?>
                        </tr>
                     </table>
                         
                <?php } ?>  
                </div>
                <div class="col-sm-2">
                    <?php
                    echo 'qmax[m3/smm]';
                    $q_max=$hidroscs->maxO($Tk, $F, $k, $a, $L, $Lc, $Iu);
                    $br=0;
                 foreach($q_max as $value){
                     $br++;   
                 ?>
                     <table>
                        <tr>
                            <?php if($br==$r){ ?>
                            <td class="text-danger font-weight-bold" width="200"><?php echo number_format($value, 2, '.', ''); ?></td>
                            <?php }else{ ?>
                            <td width="200"><?php echo number_format($value, 2, '.', ''); ?></td>
                            <?php } ?>
                        </tr>
                     </table> 
                <?php  } ?>
                </div>
                <div class="col-sm-2 bg-light text-dark">
                 <br>
                 
                    <?php
                    // $result = $hidroscs->maxP($Tk, $F, $Ap, $k, $a, $b, $c, $L, $Lc, $Iu, $H24h, $Bm, $CN);
                  $br=0;
                 foreach($result as $value){
                     $br++;   
                 ?>
                     <table>
                        <tr>
                            <?php if($br==$r){ ?>
                            <td class="text-danger font-weight-bold" style="text-decoration:underline;" width="200"><?php echo number_format($value, 2, '.', ''); ?></td>
                            <?php }else{ ?>
                            <td width="200"><?php echo number_format($value, 2, '.', ''); ?></td>
                            <?php } ?>
                        </tr>
                     </table> 
                <?php  } ?>
               </div>
            </div><!--end row-->
              <?php
              //--====niz za grafikone=====---
                    $Qmax1=max($result);
                    $b=0;
                    foreach($result as $q){
                        $b++;
                        if($q == $Qmax1){
                             $b ;
                            // var_dump($value); 
                          break;  
                        }   
                    }
                    $m=$b-1;
                    $t_porasta=number_format($Tph[$m],2,'.','');
                    $t_baza=number_format($Tb[$m], 2, '.', '');
                    $Tbv=[$Tp,$t_porasta,$t_baza];
                    $m=$b-1;
                    $q_max1=($q_max[$m]);
                     $q_max_min=0;
                     $q_max_max=0;
                     $qmax=[$q_max_min,$q_max1,$q_max_max];
                    // var_dump($qmax);
                    
                    ?> 
                    
               
                <div class="col-sm-6 text-primary font-weight-bold">
                    <?php
                    if(!empty($user['id_user'])){
                        $id_user=$user['id_user'];
                        $dao = new DAO();
                        
                        $dao->updateScsId($id,$ime,$Tkh, $a, $b, $c, $k, $L, $Lc, $Iu, $Ap, $F, $Bm, $H24h, $CN, $result,$image_name);
                        echo "Uspesan update podataka u bazu<br>";
                        
                            
                        
                    }
                    ?>
                <h3 style="font-size:20px;">Usvaja se za verovatnocu pojave p=1%, Qmax=<?php  echo number_format($Qmax1, 2, '.', ''); ?> m3/sec</h3>
                <div class="row">
                <h3 class="btn btn-sm btn-info" data-placement="top" title="edit result"><a class="text-light" href="routes.php?pagescs=editresult&id=<?php echo $id; ?>"><i class='far fa-edit'></i> SCS</a></h3>
                &nbsp;&nbsp;
                <h5 class="btn btn-sm btn-secondary" data-placement="top" title="open folder result"><a class="text-light" href="routes.php?pagescs=printresult&id=<?php echo $id; ?>"><i class='far fa-folder-open'></i> SCS</a></h5>
                </div>
                </div>
             </div><!--end row-->
           </div><!--end col-md-12-->
            <hr class="invisible">

<!--grafikoni javascript-->

<!--<div class="col-md-10">-->
<!--<canvas id="myChart" width="600" height="400"></canvas>-->
<!--<script>-->
<!--                  var dataTk=JSON.parse('<?php echo json_encode($tkr); ?>')-->
<!--                  var dataQ = JSON.parse('<?php echo json_encode($result);?>');-->
<!--                    var ctx = document.getElementById("myChart").getContext('2d');-->
<!--var myChart = new Chart(ctx, {-->
<!--    type: 'line',-->
<!--    data: {-->
<!--        labels: dataTk,-->
<!--        datasets: [{ -->
<!--            label: 'Hidrogram Qmax : m3/min', // Name the series-->
            
<!--            data: dataQ,  -->
<!--            fill: false,-->
<!--            borderColor: '#2196f3', // Add custom color border (Line)-->
<!--            backgroundColor: '#2196f3', // Add custom color background (Points and Fill)-->
<!--            borderWidth: 3 // Specify bar border width-->
<!--        }]},-->
<!--    options: {-->
<!--      responsive: true, // Instruct chart js to respond nicely.-->
<!--      maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height -->
<!--    }-->
<!--});-->
<!--</script>          -->
<!--</div>-->

<div class="col-md-10">
<canvas id="line-chart" width="600" height="400"></canvas>
<script>
                  var dataTk=JSON.parse('<?php echo json_encode($tkh); ?>');
                  var dataq_max = JSON.parse('<?php echo json_encode($result);?>');
                  
                    var ctx = document.getElementById("line-chart").getContext('2d');
new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: dataTk,
    
    datasets: [{ 
        data: dataq_max,
        label: "Hidrogram Qmax : m3/h",
        borderColor: "#2196f3",
        borderWidth: 3,
        fill: true,
        backgroundColor:'rgba(79, 156, 234, 0.3)',
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Maksimalni proticaj oderedjene verovatnoće primenom kombinovane metode'
    }
  }
});
</script>
</div>
<div class="row">
        <div class="col-md-6">
        <canvas id="lineTb_chart" width="600" height="500"></canvas>
        <script>
                          var dataq_max=JSON.parse('<?php echo json_encode($qmax); ?>')
                          var dataTb = JSON.parse('<?php echo json_encode($Tbv);?>');
                          
                            var ctx = document.getElementById("lineTb_chart").getContext('2d');
        new Chart(document.getElementById("lineTb_chart"), {
          type: "line",
          animationEnabled: true,
        	 
          data: {
            labels: dataTb,
                
            datasets: [{ 
                data: dataq_max,
                label: "x=Tb[h]  ,  y=qmax [m3/smm]",
                borderColor: "#0B7EF5",
                borderWidth: 3,
                fill: true,
                backgroundColor:'rgba(79, 156, 234, 0.3)',
              }
            ]
          },
          options: {
            title: {
              display: true,
              text: 'Sintetički jedinični trougaoni hidrogram '
            }
          }
        });
        </script>
        </div>
        <div class="col-md-6 mt-5">
               <?php if(!empty($image_name)){ ?>
                <img src="../images/<?php echo $image_name; ?>" class="img-fluid" alt="mapa sliva"/>
               <?php }else{
                   echo'<h6 class=text-primary>Odaberite mapu sliva i ponovite proracun editSCS</h6>';
                 }
               ?> 
        </div>
</div>

<button class="btn btn-primary hidden-print" data-placement="top" title="Print project" onclick="printDiv('printable')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
<script>
    function printDiv(container) {
     var printContents = document.getElementById(container).innerHTML;
     
     var originalContents = document.body.innerHTML;
   
     window.print();
     document.body.innerHTML = originalContents;         
    }
</script>
</div> <!--end container-->

</div> <!-- end container fluid-->