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
<div class="jumbotron-fluid">
   <div class="container  p-5 text-center">
      <div class="row col-8">
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
     <h4><a href="insertdata.php">Start new SCS<a/></h4>
      </div>
   </div>
</div>   
</body>
</html>