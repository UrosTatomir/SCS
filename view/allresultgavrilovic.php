<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Select Result Gavrilovic</title>
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
<body style="background:linear-gradient(to top,gray,white) no-repeat fixed center;">
<?php require_once '../model/DAO.php';  ?>
<nav class="navbar fixed-top navbar-expand-lg bg-dark navbar-dark">
        <a class="navbar-brand" href="routes.php?pagescs=showhome" style="font-family: cursive, sans-serif; font-size:18px; color: #FDE600;">
            Metode SCS i prof.Gavrilovica</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="routes.php?pagescs=showhome">Home <span class="sr-only">(current)</span></a>
                </li>
                <!--<li class="nav-item">-->
                <!--    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Login</a>-->
                <!--</li>-->
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
                        <a class="dropdown-item" href="routes.php?pagescs=showinsert">Insert Data SCS</a>
                        <a class="dropdown-item" href="routes.php?pagescs=showinsertgavrilovic">Insert Data Gavrilovic</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<div class="container mt-5 mb-5">
   <div class="container col-12 text-center">
    
        <?php
        $dao = new DAO();
        $allgavrilovicresult=$dao->getAllGavrilovicResult($id_user); //$imesliva, $t, $Hgod, $y, $x, $a, $f, $Jsr, $Fs, $O, $Nsr, $Nu, $Ls
        ?>
        <table class="table">
           <thead class='bg-dark text-white'>
           <tr>
             <td>id</td>
             <td>id user</td>
             <td>Sliv</td>
             <td>t</td>
             <td>Hgod</td>
             <td>Y</td>
             <td>X</td>
             <td>a</td>
             <td>f</td>
             <td>Jsr</td>
             <td>Zk</td>
             <td>Fs</td>
             <td>O</td>
             <td>Nsr</td>
             <td>Nu</td>
             <td>Ls</td>
             <td>W</td>
             <td>R</td>
             <td>Gg</td>
             <td>Ggkm</td>
             <td>Vreme upisa</td>
             <td colspan="2">Action</td>
           </tr>
         </thead>
       <?php 
        foreach($allgavrilovicresult as $value){
       ?>
         <tbody>
           <tr>
             <td><?php echo $value['idgav']; ?></td>
             <td><?php echo $value['id_user']; ?></td>
             <td><?php echo $value['imesliva']; ?></td>
             <td><?php echo $value['t']; ?></td>
             <td><?php echo $value['Hgod'];?></td>
             <td><?php echo $value['y']; ?></td>
             <td><?php echo $value['x']; ?></td>
             <td><?php echo $value['a']; ?></td>
             <td><?php echo $value['f']; ?></td>
             <td><?php echo $value['Jsr'];?></td>
             <td><?php echo $value['Zk']; ?></td>
             <td><?php echo $value['Fs']; ?></td>
             <td><?php echo $value['O']; ?></td>
             <td><?php echo $value['Nsr']; ?></td>
             <td><?php echo $value['Nu']; ?></td>
             <td><?php echo $value['Ls']; ?></td>
             <td><?php echo $value['W']; ?></td>
             <td><?php echo $value['R']; ?></td>
             <td><?php echo $value['Gg']; ?></td>
             <td><?php echo $value['Ggkm']; ?></td>
             <td><?php echo $value['time'] ?></td>
             <td><a href="#">&#9998;</a></td>
             <td><a href="#">&cross;</a></td>
           </tr>
        </tbody>
         <?php
        }
        ?>
     </table>
    </div> <!-- end container col-12-->
     <div class="row mb-5 p-5">
     
    
   </div>      
</div>
<div class="card fixed-bottom text-center">
        <div class="card-header bg-dark">
            <h5 class="card-title" style="font-family: cursive, sans-serif; color: #FDE600; font-size:18px;">Estavela SCS i Gavrilovic &#174; </h5>
        </div>
</div>   
</body>
</html>