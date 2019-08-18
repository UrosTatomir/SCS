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
  include 'index.php';
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

  case 'delete last data gavrilovic':
  $controller->showClearLastDataGavrilovic();
  break;

  case 'delete all data gavrilovic':
  $controller->clearAllDataGavrilovic();
  break;

  case 'Logout':
  $controller->logout();
  break;

}
?>