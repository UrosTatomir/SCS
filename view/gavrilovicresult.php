<<<<<<< HEAD
<?php
// session_start();
if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    $id_user=$user['id_user'];
require_once '../model/DAO.php'; 

?>

<div class="container-fluid mt-5 mb-5  text-center">
        <nav aria-label="breadcrumb" class="col-md-8 offset-md-1">
          <ol class="breadcrumb bg-transparent font-weight-light">
            <li class="breadcrumb-item"><a href="https://estavela.in.rs">Estavela</a></li>
            <li class="breadcrumb-item"><a href="https://scs.estavela.in.rs">Home</a></li>
            <li class="breadcrumb-item active"><a href="https://scs.estavela.in.rs/view/routes.php?pagescs=showgavrilovic">Metodi S.Gavrilovića</a></li>
            <li class="breadcrumb-item active">Rezultati metode potencijala erozije S.Gavrilovića</li>
          </ol>
        </nav>
  
        <div class="col-md-12 table-responsive">
            <?php
            $dao = new DAO();
            $gav_result=$dao->selectGavrilovicResult($id_user); //$imesliva, $t, $Hgod, $y, $x, $a, $f, $Jsr, $Fs, $O, $Nsr, $Nu, $Ls
            // var_dump($gav_result);
            if(empty($gav_result)){ ?>
                <h5>You have no projects please click on, <a href=routes.php?pagescs=showinsertgavrilovic>New Gavrilovic</a></h5>
                <h4>Ovom metodom obuhvaćene su sledeće celine </h4>
                    <ul style="color:#06342D; list-style-type: none; padding: 0;">
                        <ol>Proračun količina nanosa (srednjegodišnji i sundni proticaji).</ol>
                        <ol>Odredjivanje koeficijenta erozije Z</ol>
                        <ol>Na osnovu višegodišnjeg istraživanja na terenu, u područjima Južne, Zapadne i Velike Morave, Ibra, Timoka i Vardara,</ol>
                        <ol>a proverom određenih postavki u laboratoriji za bujice i eroziju Šumarskog fakulteta u Beogradu,</ol>
                        <ol>prof.Gavrilović uspeo je da dobije analitički izraz za određivanje srednjegodišnjih zapremina nanosa,</ol>
                        <ol>za prirodni sliv, deo sliva ili gravitaciono područje - odvojenu parcelu.</ol>
                        <ol>Svi analitički obrasci u metodi prof.Gavrilovića, predstavljaju analitičke izraze za proračune količina nanosa po potencijalu erozije</ol>
                    </ul>
           <?php }else{
            ?>
            <table class="table table-sm">
               <thead class='bg-secondary text-light'>
               <tr>
                 <td>id</td>
                 <td>Sliv</td>
                 <td>t</td>
                 <td>Hgod</td>
                 <td>Y</td>
                 <td>Xa</td>
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
                 <td>Time</td>
                 <td>View</td>
                 <td>Edit</td>
                 <td>Delete</td>
               </tr>
             </thead>
           <?php 
            foreach($gav_result as $value){
           ?>
             <tbody>
               <tr>
                 <td><a href="routes.php?pagescs=viewresultgav&idgav=<?php echo $value['idgav']; ?>"><?php echo $value['idgav']; ?></a></td>
                 <td><?php echo $value['imesliva']; ?></td>
                 <td><?php echo $value['t']; ?></td>
                 <td><?php echo $value['Hgod'];?></td>
                 <td><?php echo $value['y']; ?></td>
                 <td><?php echo $value['xa']; ?></td>
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
                 <td><a href="routes.php?pagescs=viewresultgav&idgav=<?php echo $value['idgav']; ?>">View</a></td>
                 <td><a href="routes.php?pagescs=editresultgav&idgav=<?php echo $value['idgav']; ?>">Edit</a></td>
                 <td><a href="routes.php?pagescs=clearidgav&idgav=<?php echo $value['idgav']; ?>"><i class="fa fa-trash text-danger" style="font-size:16px;"></i></a></td>
               </tr>
            </tbody>
             <?php
            }//end foreach
            }//end if
            ?>
         </table>
         </div>
    </div> <!--end container-->
     <div class="row mb-5 p-4">
    </div>      

<?php 
}else{
    
    include 'login.php';
}
?>
=======
<!DOCTYPE <!DOCTYPE html>
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
<div class="container mt-5 mb-5">
   <div class="container col-12 text-center">
    
        <?php
        $dao = new DAO();
        $gavrilovicresult=$dao->selectGavrilovicResult(); //$imesliva, $t, $Hgod, $y, $x, $a, $f, $Jsr, $Fs, $O, $Nsr, $Nu, $Ls
        ?>
        <table class="table">
           <thead class='bg-dark text-white'>
           <tr>
             <td>id</td>
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
           </tr>
         </thead>
       <?php 
        foreach($gavrilovicresult as $value){
       ?>
         <tbody>
           <tr>
             <td><?php echo $value['idgav']; ?></td>
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
           </tr>
        </tbody>
         <?php
        }
        ?>
     </table>
    </div> <!-- end container col-12-->
     <div class="row mb-5 p-5">
     <div class="col-4">
     <form action="routes.php">
        <button type="submit" name="pagescs" value="delete last data gavrilovic" class="btn btn-warning" >Clear Last Data</button>
     </form>
    </div>
    <div class="col-4 text-center"> 
     <form action="routes.php">
        <button type="submit" name="pagescs" value="delete all data gavrilovic" class="btn btn-danger" >Clear All Data</button>
     </form>
    </div>
    <div class="col-4 text-right">
     <form>
     <button class="btn btn-primary"><a class="text-white" href="insertdata.php">Start Gavrilovic<a/></button>
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
>>>>>>> 6525f9a11d9645b090759bb9d0d8f0e10712b7ac
