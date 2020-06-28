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