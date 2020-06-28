<!DOCTYPE html>
<html lang="sr">
<?php 
session_start();

    if (isset($_SESSION['user'])){
        $user = $_SESSION['user'];
        $id_user=$user['id_user'];
    }

$errors = isset($errors) ? $errors : array();
$msg = isset($msg) ? $msg : "";

$title="Metode SCS i prof.Gavrilovica";
$url="https://scs.estavela.in.rs";

include 'includes/head.php';


?>


<body style="background:linear-gradient(to top,white) no-repeat fixed center;">
<?php include 'includes/nav.php'; ?>     
    
    <div class="container-fluid mt-5 ">
        
        <div class="row">
            
            <nav class="col-md-2 d-none d-md-block mt-2 p-3 bg-light sticky-sidebar position-fixed">   
               <?php if(!empty($_SESSION['user'])){  ?> 
                  <div class="sidebar-sticky">
                     
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="btn btn-sm btn-info pr-1" href="/view/routes.php?pagescs=showhome"/>
                         <i style="font-size: 20px;" class="fa fa-home" data-toggle="tooltip" data-placement="top" title="home"></i>
                        </a>
                      </li>
                      <li class="nav-item text-primary mt-2 pr-1">
                        
                         SCS Metoda
                        
                      </li>
                      <div class="row">
                          <li class="nav-item">
                            <a class="btn btn-sm btn-outline-info mt-2 ml-3 pr-1" href="https://scs.estavela.in.rs/view/routes.php?pagescs=showinsert"/>
                             <i class="far fa-file" style="font-size: 18px;" data-toggle="tooltip" data-placement="top" title="new project scs"></i>
                            </a>
                          </li>
                          <?php if(!isset($_SESSION['edit_model_index'])){ ?>
                          <li class="nav-item">
                            <a class="btn btn-sm btn-outline-secondary mt-2 ml-2" href="https://scs.estavela.in.rs/view/routes.php?pagescs=printresult&id_user=<?php echo $user['id_user']; ?>">
                             <i style="font-size: 18px;" class="fas fa-folder-open" data-toggle="tooltip" data-placement="top" title="open scs projects"></i>
                            </a>
                          </li>
                          <?php }else{ ?>
                          <li class="nav-item">
                            <a class="btn btn-sm btn-outline-secondary mt-2 ml-2" href="https://scs.estavela.in.rs/view/routes.php?pagescs=printresult&id=<?php echo $id; ?>">
                             <i style="font-size: 18px;" class="fas fa-folder-open" data-toggle="tooltip" data-placement="top" title="open scs id"></i>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="btn btn-sm btn-outline-secondary mt-2 ml-2" href="https://scs.estavela.in.rs/view/routes.php?pagescs=editresult&id=<?php echo $id; ?>">
                             <i style="font-size: 18px;" class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="edit result scs"></i>
                            </a>
                          </li>
                          <?php } ?>
                          <li class="nav-item">
                            <a class="btn btn-sm btn-outline-info mt-2 ml-2 pr-1" href="https://scs.estavela.in.rs/view/routes.php?pagescs=showscs"/>
                             <i class="fas fa-tools" style="font-size: 18px;" data-toggle="tooltip" data-placement="top" title="odredjivanje prosecne vrednosti br. krive oticaja CN">CN</i>
                            </a>
                          </li>
                      </div>
                      </li>
                     <?php if(isset($_SESSION['model_index'])){ ?>
                      <li class="nav-item">
                        <a class="btn btn-sm btn-info mt-1 pr-1" href="https://scs.estavela.in.rs/view/routes.php?pagescs=returnresult&id_user=<?php echo $user['id_user']; ?>">
                         <i style="font-size: 18px;" class="far fa-edit" data-toggle="tooltip" data-placement="top" title="return result scs">scs</i>
                        </a>
                      </li>
                      
                      <?php } ?>
                     
                     <?php if(!empty($selectresult)&&!empty($id)){ ?>
                      <li class="nav-item">
                        <a class="btn btn-sm btn-outline-info mt-1" href="https://scs.estavela.in.rs/view/routes.php?pagescs=clearid&id=<?php echo $id; ?>">
                         <i class="fas fa-eraser" style="font-size: 18px;"data-toggle="tooltip" data-placement="top" title="erase last result scs"></i>
                        </a>
                      </li>
                      <?php } ?>
                      <hr class="mb-n2">
                      <li class="nav-item mt-2">
                        <a href="https://scs.estavela.in.rs/view/routes.php?pagescs=showgavrilovic">
                          Metoda prof. Gavrilovica
                        </a>
                      </li>
                      <div class="row">
                          <li class="nav-item">
                            <a class="btn btn-sm btn-outline-info mt-1 ml-3 pr-1" href="https://scs.estavela.in.rs/view/routes.php?pagescs=showinsertgavrilovic"/>
                             <i class="far fa-file-alt" style="font-size: 18px;" data-toggle="tooltip" data-placement="top" title="new project gavrilovic"></i>
                            </a>
                          </li>
                          <?php if(!isset($_SESSION['edit_gav'])){ ?>
                          <li class="nav-item">
                            <a class="btn btn-sm btn-outline-secondary mt-1 ml-2" href="https://scs.estavela.in.rs/view/routes.php?pagescs=printresultgavrilovic&id_user=<?php echo $user['id_user']; ?>">
                             <i style="font-size: 18px;" class="far fa-folder-open" data-toggle="tooltip" data-placement="top" title="open folder gavrilovic projects"></i>
                            </a>
                          </li>
                          <?php }else{ ?>
                          <li class="nav-item">
                            <a class="btn btn-sm btn-outline-secondary mt-1 ml-2 pl-2 pr-1" href="https://scs.estavela.in.rs/view/routes.php?pagescs=printresultidgav&idgav=<?php echo $idgav; ?>">
                             <i style="font-size: 18px;" class="far fa-folder-open" data-toggle="tooltip" data-placement="top" title="open gavrilovic project"></i>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="btn btn-sm btn-outline-secondary mt-1 ml-2" href="https://scs.estavela.in.rs/view/routes.php?pagescs=editresultgav&idgav=<?php echo $idgav; ?>">
                             <i style="font-size: 18px;" class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="edit result potencijal-erozije-gavrilovic"></i>
                            </a>
                          </li>
                          <?php } ?>
                          </li>
                      
                      <?php if(!empty($gavidresult)&&!empty($idgav)){ ?>
                      <li class="nav-item">
                        <a class="btn btn-sm btn-danger mt-1 ml-2  pl-2 pr-1" href="routes.php?pagescs=clearidgav&idgav=<?php echo $idgav ?>">
                        <i class="fas fa-eraser" style="font-size: 18px;" data-toggle="tooltip" data-placement="top" title="erase last data gavrilovic"></i>  
                        </a>
                      </li>
                      <?php } ?>
                      </div>
                      <?php if(!empty($user)){  ?>
                      <hr class="mb-n2">
                      <li class="nav-item">
                        <form enctype="multipart/form-data" action="/view/routes.php" method="post"/>
                            <label class="text-primary mt-2  mb-n1" for="File1">Odaberite mapu sliva</label>
                            <label class=" mb-1"><small>(max 2.5MB,jpg,jpeg,png,gif)</small></label>
                            <input type="hidden" name="id_user" value="<?php echo $id_user;  ?>"/>
                            <input class="form-control form-control-sm" type="text" name="ime_sliva" placeholder="ime sliva"/>
                            <input class="form-control-file mt-2" type="file" id="File1" name="upload_img"/>
                            
                            <?php if (array_key_exists('upload_img', $errors)) { ?>
                            <div class="badge badge-danger mt-2">   
                             <?php echo $errors['upload_img']; ?>
                            </div> 
                            <?php } ?>
                            <?php if (!empty( $msg)) { ?>
                            <div class="badge badge-success mt-2">   
                             <?php echo $msg; ?>
                            </div> 
                            <?php } ?>
                            <button class="btn btn-info mt-2 " type="submit" name="pagescs" value="uploadimage" data-placement="top" title="Upload maps"><i class='far fa-map'></i></button>
                        </form>
                      </li>
                      <?php } ?>
                      <?php if(isset($_SESSION['model_index'])||isset($_SESSION['edit_model_index'])||!empty($modelgavrilovic)||!empty($editgavrilovic)){  ?>
                      <li class="nav-item">
                        <button class="btn btn-primary hidden-print btn-sm mt-2" data-placement="top" title="Print project" onclick="printDiv('printable')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
                            <script>
                                function printDiv(container) {
                                 var printContents = document.getElementById(container).innerHTML;
                                 
                                 var originalContents = document.body.innerHTML;
                               
                                 window.print();
                                 document.body.innerHTML = originalContents;         
                                }
                            </script>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>    
                 <?php }else{ ?>
                 <h5 class="text-info">SCS metoda</h5>
                 <h5 class="text-info">Metod potencijala erozije S.Gavrilovic</h5>
                 <?php } ?>
            </nav>
            <div role="main" class="col-md-9 offset-md-2  col-xl-10 py-md-3 pl-md-5 bd-content">
            <?php 
            
            //  echo "<span style=color:red;>$msg</span>";
    
            if(!isset($_SESSION['model_index'])&&!isset($_SESSION['edit_model_index'])&&empty($showscs)&&empty($insertdata)&&empty($returndata)&&empty($selectresult)&&empty($edit_data)&&empty($insertdatagav)&&empty($modelgavrilovic)&&empty($gavrilovicresult)&&empty($showgav)&&empty($login)&&empty($editdatagav)&&empty($editgavrilovic)&&empty($gavidresult)&&empty($edit_CN)){
                include 'view/project.php';
            }elseif(isset($_SESSION['model_index'])){   
               include 'model_index.php';
            }elseif(isset($_SESSION['edit_model_index'])){
               include 'edit_model_index.php';   
            }elseif(!empty($showscs)){
             include 'view/showscs.php';
            }elseif(!empty($insertdata)){
                // var_dump($insertdata);
             include 'view/insertdata.php';
            }elseif(!empty($returndata)){
                include 'view/editdata.php';
            }elseif(!empty($selectresult)){
                include 'view/selectresult.php';
            }elseif(!empty($edit_data)){
                include 'view/editresultscs.php';
            }elseif(!empty($insertdatagav)){
                include 'view/insertdatagavrilovic.php';
            }elseif(!empty($modelgavrilovic)){
                include 'view/modelgavrilovic.php';
            }elseif(!empty($gavrilovicresult)){
                include 'view/gavrilovicresult.php';
            }elseif(!empty($login)){
                include 'view/login.php';
            }elseif(!empty($showgav)){
                include 'view/showgavrilovic.php';   
            }elseif(!empty($editdatagav)){
                include 'view/editdatagavrilovic.php';
            }elseif(!empty($editgavrilovic)){
                include 'view/editmodelgavrilovic.php';
            }elseif(!empty($gavidresult)){
                include 'view/idgavresult.php';
            }elseif(!empty($edit_CN)){
                include 'view/edit_CN_scs.php';
            }
            ?>   
             
          </div>
          
        </div> <!--end row-->
  </div><!--end container fluid-->
<!--=== footer ===-->
<?php include 'includes/footer.php'; ?>
<!--=== end footer ===-->
</body>

</html>