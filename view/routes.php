<?php
require_once '../controllers/Controller.php';

$controller=new Controller();

$pagescs=isset($_GET['pagescs'])?$_GET['pagescs']:"";

switch($pagescs){
  case 'showscs':
  $controller->showScs();
  break;

  case 'showgavrilovic':
  $controller->showGavrilovic();
  break;

  case 'showinsert':
  $controller->showinsert();
  break;
  
  case 'returnresult':
  $controller->returnResult();
  break;
  
  case 'editresult':
  $controller->editResult();
  break;

  case 'result':
  $controller->insertData();
  break;

  case 'printresult':
  $controller->showResult();
  break;

  case 'showinsertgavrilovic':
  $controller->showInsertGavrilovic();
  break;

  case 'Result Gavrilovic':
  $controller->insertDataGavrilovic();
  break;

  case 'showhome':
  $controller->showHome();
  break;

  case 'delete all':
  $controller->showClearData();
  break;

  case 'delete last data':
    $controller->showClearLastData();
    break;

  case 'printresultgavrilovic':
  $controller->showResultGavrilovic();
  break;
  
  case 'printresultidgav':
  $controller->showResultIdGav();
  break;

  case 'delete last data gavrilovic':
  $controller->showClearLastDataGavrilovic();
  break;

  case 'delete all data gavrilovic':
  $controller->clearAllDataGavrilovic();
  break;
  
  case 'showlogin':
  $controller->showLogin();
  break;
  
  case 'showregister':
  $controller->showRegister();
  break;
  
  case 'Logout':
  $controller->logout();
  break;
  
  case 'allresultscs':
  $controller->allResultScs();
  break;
  
  case 'allresultgavrilovic':
  $controller->allresultGavrilovic();
  break;
  
  case 'deleteresultscs':
  $controller->deleteResultScs();
  break;
  
  case 'clearid':
  $controller->clearResultId();
  break;
  
  case 'clearidgav':
  $controller->clearResultIdGav();
  break;
  
  case 'editresultgav':
  $controller->editresultGav();
  break;
  
  case 'Edit Gavrilovic':
  $controller->editGavrilovic();
  break;
  
  case 'CN_sr_kriva':
  $controller->vrednostCN();
  break;
  
  case 'editscs':
  $controller->editScsResult();
  break;
  
  case 'editCN':
  $controller->showEditCN();
  break;
  
  case 'Edit_CN_sr_kriva':
  $controller->updateEditCN();
  break;
  
  case 'viewscs':
  $controller->viewResultScs();
  break;
  
  case 'viewresultgav':
  $controller->viewResultGav();
  break;
  
  
  
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $pagescs=isset($_POST['pagescs'])?$_POST['pagescs']:"";
    
    switch($pagescs){
        case 'Register':
        $controller->registration();
        break;
        
        case 'Log in':
        $controller->login();
        break;
        
        case 'uploadimage':
        $controller->uploadImage();
        break;
    }
    
}
?>