<<<<<<< HEAD

<?php 
// session_start();
if(isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $id_user=$user['id_user'];
    
require_once '../model/DAO.php';  
?>
<div class="container-fluid mt-5 mb-5">
   <nav aria-label="breadcrumb" class="col-md-5 offset-md-1">
          <ol class="breadcrumb bg-transparent font-weight-light">
            <li class="breadcrumb-item"><a href="https://estavela.in.rs">Estavela</a></li>
            <li class="breadcrumb-item"><a href="https://scs.estavela.in.rs">Home</a></li>
            <li class="breadcrumb-item active"><a href="https://scs.estavela.in.rs/view/routes.php?pagescs=showscs">SCS Metoda</a></li>
            <li class="breadcrumb-item active">Select result SCS</li>
          </ol>
   </nav>
   <div class="container mb-2  p-3 text-center">
      <div class="col-md-12 table-responsive">
=======
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
>>>>>>> 6525f9a11d9645b090759bb9d0d8f0e10712b7ac
        <?php
    
        $dao = new DAO();
        $scsresult=$dao->selectResultByUser($id_user);
        if(empty($scsresult)){
        ?>    
             <h5>Nemate SCS projekte molimo vas kliknite na, <a href=routes.php?pagescs=showinsert>New SCS</a></h5>
        <div class="col-sm-12">
            <h6>Maksimalni proticaj oderedjene verovatnoće primenom kombinovane metode</h6>
            
            <h6>Maksimalni proticaji na manjim slivnim površinama A < 1000 km2 su posledica kiša čije trajanje je kraće od 24h. </h6> 
               
            <p>Postupak optimizacije metoda SCS napisana je u PHP jeziku.Metod i ulazni parametri "CN", "k", "B","C" i "n", određeni su na osnovu metodologije iz udžbenika - Hidrologija Bujičnih tokova autora Ristić Ratka i Dragana Maloševića</p>
        </div>
        <?php    
        }else{
        ?>
        <table class="table table-sm">
           <thead class='bg-secondary text-white'>
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
<<<<<<< HEAD
             <td>Time</td>
             <td>View</td>
             <td colspan="2">Edit</td>
             <td>Delete</td>
=======
             <td>Time</td>          
>>>>>>> 6525f9a11d9645b090759bb9d0d8f0e10712b7ac
           </tr>
         </thead>
       <?php 
        foreach($scsresult as $value){
       ?>
         <tbody>
             <?php if($value['id']==$id){ ?>
                <tr class=" text-dark" style="background-color: #CCCCCC;">
                <?php }else{ ?>
               <tr>
             <?php } ?>
           
             <td><a href="routes.php?pagescs=viewscs&id=<?php echo $value['id']; ?>"><?php echo $value['id']; ?></a></td>
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
<<<<<<< HEAD
             <td><a href="routes.php?pagescs=editCN&id=<?php echo $value['id']; ?>"><?php echo $value['CN']; ?></a></td>
             <td><?php echo $value['Qmax']; ?></td>
             <td><?php echo $value['vreme upisa'] ?></td>
             <td><a href="routes.php?pagescs=viewscs&id=<?php echo $value['id']; ?>">View</a></td>
             <td><a href="routes.php?pagescs=editresult&id=<?php echo $value['id']; ?>">Edit</a></td>
             <td><a href="routes.php?pagescs=editCN&id=<?php echo $value['id']; ?>">CN</a></td>
             <td><a href="routes.php?pagescs=clearid&id=<?php echo $value['id']; ?>"><i class="fa fa-trash text-danger" style="font-size:16px;"></i></a></td>
=======
             <td><?php echo $value['CN']; ?></td>
             <td><?php echo $value['Qmax']; ?></td>
             <td><?php echo $value['vreme upisa'] ?></td>            
>>>>>>> 6525f9a11d9645b090759bb9d0d8f0e10712b7ac
           </tr>
        </tbody>
         <?php
          }//end foreach
        }
        ?>
<<<<<<< HEAD
     </table> 
      </div>
   </div>
</div>
<div class="row mb-5 p-4">
</div> 
<?php 
}else{
    // echo 'Your session expired, please <a href=routes.php?pagescs=showlogin>Login</a>';
        include'login.php';
    }
?>
=======
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
>>>>>>> 6525f9a11d9645b090759bb9d0d8f0e10712b7ac
