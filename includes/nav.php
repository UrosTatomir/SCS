<nav class="navbar fixed-top navbar-expand-lg bg-secondary navbar-dark">
        <a class="navbar-brand" style="font-family: cursive, sans-serif; font-size:16px; color: white;"  href="https://estavela.in.rs">
            Estavela</a>
        <a class="navbar-brand" href="/view/routes.php?pagescs=showhome" style="font-family: cursive, sans-serif; font-size:16px; color: #FDE600;">
            Metode SCS i S.Gavrilovica</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/view/routes.php?pagescs=showhome">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php 
                if(empty($_SESSION['user'])){
                ?>
                <li class="nav-item">
                    <a class="nav-link " href="../view/routes.php?pagescs=showlogin" tabindex="-1" aria-disabled="true">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../view/routes.php?pagescs=showregister" tabindex="-1" aria-disabled="true">Register</a>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="../view/routes.php?pagescs=showinsert"><i style="font-size: 18px;" class="fas fa-file" data-toggle="tooltip" data-placement="top" title="new project scs">scs</i></a>
                </li>
                <?php if(!isset($_SESSION['edit_model_index'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="../view/routes.php?pagescs=printresult&id_user=<?php echo $user['id_user']; ?>"><i style="font-size: 18px;" class="fas fa-folder-open" data-toggle="tooltip" data-placement="top" title="open scs projects">scs</i></a>
                </li>
                <?php }else{ ?>
                <li class="nav-item">
                    <a class="nav-link" href="../view/routes.php?pagescs=printresult&id=<?php echo $id ; ?>"><i style="font-size: 18px;" class="fas fa-folder-open" data-toggle="tooltip" data-placement="top" title="open scs id project">scs</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/routes.php?pagescs=editresult&id=<?php echo $id ; ?>"><i style="font-size: 18px;" class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="edit result scs">scs</i></a>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="../view/routes.php?pagescs=showscs"><i style="font-size: 18px;" class="fas fa-tools" data-toggle="tooltip" data-placement="top" title="odredjivanje prosecne vrednosti br. krive oticaja CN">CN</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/routes.php?pagescs=showgavrilovic"><i style="font-size: 18px;" class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="info potencijal erozije metod gavrilovic">Gav</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/routes.php?pagescs=showinsertgavrilovic"><i style="font-size: 18px;" class="fas fa-file-alt" data-toggle="tooltip" data-placement="top" title="new potencijal erozije metod gavrilovic">gavrilovic</i></a>
                </li>
                <?php if(!isset($_SESSION['edit_gav'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="../view/routes.php?pagescs=printresultgavrilovic&id_user=<?php echo $user['id_user']; ?>"><i style="font-size: 18px;" class="far fa-folder-open" data-toggle="tooltip" data-placement="top" title="open potencijal-erozije-gavrilovic projects">gavrilovic</i></a>
                </li>
                <?php }else{ ?>
                <li class="nav-item">
                    <a class="nav-link" href="../view/routes.php?pagescs=printresultidgav&idgav=<?php echo $idgav ; ?>"><i style="font-size: 18px;" class="far fa-folder-open" data-toggle="tooltip" data-placement="top" title="open potencijal-erozije project">gavrilovic</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../view/routes.php?pagescs=editresultgav&idgav=<?php echo $idgav ; ?>"><i style="font-size: 18px;" class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="edit result potencijal-erozije-gavrilovic">gavrilovic</i></a>
                </li>
                 <?php } ?>
                
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://scs.estavela.in.rs/view/routes.php?pagescs=showinsert">Start SCS</a>
                        <?php if(isset($_SESSION['model_index'])){ ?>
                        <a class="dropdown-item text-info" href="https://scs.estavela.in.rs/view/routes.php?pagescs=returnresult&id_user=<?php echo $user['id_user']; ?>">Return result</a>
                        <a class="dropdown-item text-secondary" href="https://scs.estavela.in.rs/view/routes.php?pagescs=printresult&id_user=<?php echo $user['id_user']; ?>">Select result</a>
                        <?php } ?>
                        <?php if(!empty($selectresult)){ ?>
                        <a class="dropdown-item text-info" href="https://scs.estavela.in.rs/view/routes.php?pagescs=delete last data&id_user=<?php echo $id_user; ?>">Clear last</a>
                        <a class="dropdown-item text-info" href="https://scs.estavela.in.rs/view/routes.php?pagescs=delete all&id_user=<?php echo $id_user; ?>">Clear all</a>
                        <a class="dropdown-item text-info" href="https://scs.estavela.in.rs/view/routes.php?pagescs=showinsert">Start new</a>
                        <?php } ?>
                        <a class="dropdown-item" href="https://scs.estavela.in.rs/view/routes.php?pagescs=showinsertgavrilovic">Start Gavrilovic</a>
                    </div>
                </li>
                <?php if(!empty($_SESSION['user']) && !empty($user['admin']==1)){ 
                    $id_user= $user['id_user'];
                ?>
                <li><button class="btn"><a class="text-light" href="/view/routes.php?pagescs=allresultscs&id_user=<?php echo $id_user; ?>">Select Result</a></button>
                </li>
                <li>
                <button class="btn"><a class="text-light" href="/view/routes.php?pagescs=allresultgavrilovic&id_user=<?php echo $id_user; ?>">Select Result Gavrilovic</a></button>
                </li>
               <?php } ?> 
                
            </ul>
           <form class="form-inline my-2 my-lg-0" action="/view/routes.php">
                <span class="text-white"><?php
                                            if (!empty($_SESSION['user'])) {
                                                echo "User : " . $_SESSION['user']['name'];
                                            } ?>&nbsp;&nbsp;</span>
                <?php if (isset($user)) { ?>
                    <input class="btn btn-sm btn-outline-warning my-2 my-sm-0" type="submit" name="pagescs" value="Logout">
                <?php } ?>
            </form>
        </div>
    </nav>