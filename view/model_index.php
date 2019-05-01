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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <!-- <script src="../canvasjs/canvasjs.min.js"></script> -->
    
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
        require_once '../controllers/hidrogram.php';
        require_once '../model/DAO.php';
        ?>

     <div class="container mt-5 p-5">
            <h4 class="text-center" style="font-family: cursive, sans-serif; color:#2A65CB;">Proračun Maksimalnog Proticaja "Metoda SCS"</h4>
            <?php echo "<h4> Rečni sliv  $ime </h4>"; ?>
            
                <?php	

                $ime = $_GET["ime"];
                $Tkh = $_GET["Tkh"];
                $Tk = explode(',', $Tkh);

                $a = 120; //min -> h/2;
                $b = 1440; //za 24 h p = 1% 1440 ; 12h p = 1%  770 ;
                $c = 0.3;
                $k = $_GET["k"]; //koeficijent oblika hidrograma = 1
                $L = $_GET["L"];    //km;
                $Lc = $_GET["Lc"]; //km;
                $Iu = $_GET["Iu"];  // %;
                $Ap = 0.3;
                $F = $_GET["F"]; //km2
                $Bm = $_GET["Bm"];  //koef. sa grafikona za date npr0.82 za podrucje Kotora uslove;
                $H24h = $_GET["H24h"]; // mm/24h;
                $CN = $_GET["CN"];
                // $servername = 'localhost';
                $username = 'root';
                $password = null;
                // $dbname = 'estavela_talas_db';

                $hidroscs = new Hidrogram();
                // $hidroscs->SCS($ime);
                ?>
                <div class="col-12 text-white">
                
                 
                      <h5 class="text-dark">Ulazni podaci</h5>
                  <table class="table">
                 <tbody class="bg-dark text-white"> 
                   <tr>  
                    <td><?php echo'a='.$a.' min/h';?></td>
                    <td><?php echo 'b=' . $b. ' za 24h p=1%<br>';?></td>
                    <td><?php echo 'c='.$c; ?></td>
                    <td><?php echo 'k=' . $k; ?></td>
                    <td><?php echo 'L=' . $L . ' km.<br>'; ?></td>
                    <td><?php echo 'Lc=' . $Lc . ' km.<br>'; ?></td>
                    <td><?php echo 'Iu=' . $Iu . ' %.<br>';  ?></td>
                    <td><?php echo 'F=' . $F . ' km2.<br>'; ?></td>
                    <td><?php echo 'Ap=' . $Ap . '<br>'; ?></td>
                    <td><?php echo 'Bm=' . $Bm . 'koef. izolinije<br>';?></td>
                    <td><?php echo 'H24h=' . $H24h . '<br>'; ?></td>
                    <td><?php echo 'CN=' . $CN . '<br>';?></td>
                    
                 </tr>
                </tbody>
                </table>    
                </div>
            <div class="row">
                <div class="col-3">
                    <?php
                    echo 'Trajanje efektivne kise Tk [min] :';
                    echo '<br>';
                    echo '<br>';
                    $tkr = $hidroscs->trKi($Tk);
                    foreach ($tkr as $value) {
                        
                        echo "<table border=1px>
                <tr>
                    <td width=220> $value</td>
                </tr>
            </table>";
                    }
                    ?>
                </div>
                <?php
                //vreme porasta hidrograma
                $Tph=$hidroscs->vPHi($Tk, $a, $L, $Lc, $Iu);
                //baza hidrograma $Tb
                 $Tb=$hidroscs->bazaHi($Tk, $k, $a, $L, $Lc, $Iu);
                 
                ?>
                <div class="col-3 bg-success text-white">
                    <?php
                    
                    echo 'Merodavna kiša trajanja Htp [min.]';
                    echo '<br>';
                    $hidroscs->mKiTr($Tk, $Ap, $b, $c, $Bm, $H24h);
                    ?>
                </div>
                <div class="col-3">
                    <?php
                    
                    echo 'Max.ordinata sintet.jedinicnog hidrograma qmax [m3/smm]';
                    $q_max=$hidroscs->maxO($Tk, $F, $k, $a, $L, $Lc, $Iu);
                     
                    ?>
                </div>
                <div class="col-3 bg-secondary text-white">
                 <br><br>
              
                    <?php
                    $result = $hidroscs->maxP($Tk, $F, $Ap, $k, $a, $b, $c, $L, $Lc, $Iu, $H24h, $Bm, $CN);    
                    ?>       
                </div>
                <div class="col-3 text-danger font-weight-bold">
                    <?php
                    $dao = new DAO();
                    $dao->insertScs($ime, $a, $b, $c, $k, $L, $Lc, $Iu, $Ap, $F, $Bm, $H24h, $CN, $result);
                    echo "Uspesan unos podataka u bazu<br>";
                    ?>
                    <button class="btn"><a href="routes.php?pagescs=printresult">Select Result</a></button>
                </div>
                </div><!--end row-->
            <hr class="invisible">

<!--grafikoni javascript-->

<div class="col-md-8">
<canvas id="myChart" width="600" height="400"></canvas>
<script>
                  var dataTk=JSON.parse('<?php echo json_encode($tkr); ?>')
                  var dataQ = JSON.parse('<?php echo json_encode($result);?>');
                    var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: dataTk,
        datasets: [{ 
            label: 'Hidrogram Qmax : m3/min', // Name the series
            
            data: dataQ,  
            fill: false,
            borderColor: '#2196f3', // Add custom color border (Line)
            backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
            borderWidth: 3 // Specify bar border width
        }]},
    options: {
      responsive: true, // Instruct chart js to respond nicely.
      maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
    }
});
</script>          
</div>

<div class="col-md-8">
<canvas id="line-chart" width="600" height="400"></canvas>
<script>
                  var dataTk=JSON.parse('<?php echo json_encode($tkr); ?>')
                  var dataq_max = JSON.parse('<?php echo json_encode($q_max);?>');
                  
                    var ctx = document.getElementById("line-chart").getContext('2d');
new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: dataTk,
    datasets: [{ 
        data: dataq_max,
        label: "Max.ordinata sintet.jedinicnog hidrograma qmax [m3/smm]",
        borderColor: "#F50CD6",
        borderWidth: 3,
        fill: false
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
<div class="col-md-8">
<canvas id="lineTb_chart" width="600" height="400"></canvas>
<script>
                  var dataq_max=JSON.parse('<?php echo json_encode($q_max); ?>')
                  var dataTb = JSON.parse('<?php echo json_encode($Tb);?>');
                  
                    var ctx = document.getElementById("lineTb_chart").getContext('2d');
new Chart(document.getElementById("lineTb_chart"), {
  type: 'line',
  data: {
    labels: dataTb,
    datasets: [{ 
        data: dataq_max,
        label: "Baza hidrograma Tb [h]",
        borderColor: "#0B7EF5",
        borderWidth: 3,
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Baza hidrograma Tb u casovima '
    }
  }
});
</script>
</div>
</div> <!--end container-->
</div> <!-- end container fluid-->
<div class="card text-center">
    <div class="card-header bg-dark">
        <h5 class="card-title" style="font-family: cursive, sans-serif; color:#FDE600; font-size:18px;">Estavela SCS i Gavrilovic &#174;</h5>
        
    </div>
    
</div>
</body>
</html> 