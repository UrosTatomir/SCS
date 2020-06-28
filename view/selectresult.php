
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
             <td>Time</td>
             <td>View</td>
             <td colspan="2">Edit</td>
             <td>Delete</td>
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
             <td><a href="routes.php?pagescs=editCN&id=<?php echo $value['id']; ?>"><?php echo $value['CN']; ?></a></td>
             <td><?php echo $value['Qmax']; ?></td>
             <td><?php echo $value['vreme upisa'] ?></td>
             <td><a href="routes.php?pagescs=viewscs&id=<?php echo $value['id']; ?>">View</a></td>
             <td><a href="routes.php?pagescs=editresult&id=<?php echo $value['id']; ?>">Edit</a></td>
             <td><a href="routes.php?pagescs=editCN&id=<?php echo $value['id']; ?>">CN</a></td>
             <td><a href="routes.php?pagescs=clearid&id=<?php echo $value['id']; ?>"><i class="fa fa-trash text-danger" style="font-size:16px;"></i></a></td>
           </tr>
        </tbody>
         <?php
          }//end foreach
        }
        ?>
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