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
<body style="background:linear-gradient(to top,gray,white) no-repeat fixed center;">
<?php require_once '../model/DAO.php';  ?>
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
               </div>
            </li>
      </ul>
   </div>
</nav>
<div class="jumbotron-fluid">
   <div class="container  p-5 text-center mb-5">
      <div class="row col-12">
        <?php
        $dao = new DAO();
        $scsresult=$dao->selectResult();
        ?>
        <table class="table">
           <thead class='bg-dark text-white'>
           <tr>
             <td>id</td>
             <td>ime reke</td>
             <td>a</td>
             <td>b</td>
             <td>c</td>
             <td>k</td>
             <td>L</td>
             <td>Lc</td>
             <td>Iu</td>
             <td>Ap</td>
             <td>F</td>
             <td>Bm </td>
             <td>H24h</td>
             <td>CN</td>
             <td>Qmax</td>
             <td>Time</td>          
           </tr>
         </thead>
       <?php 
        foreach($scsresult as $value){
       ?>
         <tbody>
           <tr>
             <td><?php echo $value['id']; ?></td>
             <td><?php echo $value['ime']; ?></td>
             <td><?php echo $value['a']; ?></td>
             <td><?php echo $value['b'];?></td>
             <td><?php echo $value['c']; ?></td>
             <td><?php echo $value['k']; ?></td>
             <td><?php echo $value['L']; ?></td>
             <td><?php echo $value['Lc']; ?></td>
             <td><?php echo $value['Iu'];?></td>
             <td><?php echo $value['Ap']; ?></td>
             <td><?php echo $value['F']; ?></td>
             <td><?php echo $value['Bm']; ?></td>
             <td><?php echo $value['H24h']; ?></td>
             <td><?php echo $value['CN']; ?></td>
             <td><?php echo $value['Qmax']; ?></td>
             <td><?php echo $value['vreme upisa'] ?></td>            
           </tr>
        </tbody>
         <?php
        }
        ?>
     </table>
     <form action="routes.php">
        <button type="submit" name="pagescs" value="delete last data" class="btn btn-warning" >Clear Last Data</button>
     </form>
     <hr>
     <form action="routes.php">
        <button type="submit" name="pagescs" value="delete all" class="btn btn-danger" >Clear All Data</button>
     </form>
     <hr>
     <form>
     <button class="btn btn-primary"><a class="text-white" href="insertdata.php">Start new SCS<a/></button>
     </form>
      </div>
   </div>
</div>
<div class="card fixed-bottom text-center">
        <div class="card-header bg-dark">
            <h5 class="card-title" style="font-family: cursive, sans-serif; color: #FDE600; font-size:18px;">Estavela SCS i Gavrilovic &#174; </h5>
        </div>
</div>   
</body>
</html>