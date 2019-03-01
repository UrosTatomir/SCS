<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Select Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
     <link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="main.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</head>
<body>
<?php require_once '../model/DAO.php';  ?>
<div class="jumbotron-fluid bg-light">
   <div class="container-flex text-center">
      <div class="row">
        <?php
        $dao = new DAO();
        $scsresult=$dao->selectResult();
        echo "<table style= background-color:#0f0;   border=1px>
           <tr>
             <td width=130>ime reke</td>
             <td width=50>a</td>
             <td width=50>b</td>
             <td width=50>c</td>
             <td width=50>k </td>
             <td width=50>L</td>
             <td width=50>Lc</td>
             <td width=50>Iu</td>
             <td width=50>Ap</td>
             <td width=50>F</td>
             <td width=50>Bm </td>
             <td width=50>H24h</td>
             <td width=50>CN</td>
             <td width=60>Qmax</td>          
           </tr>
     </table>";
        foreach($scsresult as $value){
            echo "<table style= background-color:#0f0;   border=1px>
           <tr>
             <td width=130>$value[ime]</td>
             <td width=50>$value[a]</td>
             <td width=50>$value[b]</td>
             <td width=50>$value[c]</td>
             <td width=50>$value[k]</td>
             <td width=50>$value[L]</td>
             <td width=50>$value[Lc]</td>
             <td width=50>$value[Iu]</td>
             <td width=50>$value[Ap]</td>
             <td width=50>$value[F]</td>
             <td width=50>$value[Bm]</td>
             <td width=50>$value[H24h]</td>
             <td width=50>$value[CN]</td>
             <td width=50>$value[Qmax]</td>
                       
           </tr>
     </table>";
        }
        ?>
      </div>
   </div>
</div>   
</body>
</html>