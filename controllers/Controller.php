<?php
require_once '../model/DAO.php';

class Controller{

   public function showHome(){
       session_start();
       unset($_SESSION['model_index']);
       unset($_SESSION['edit_model_index']);
       include '../index.php';
   }
   public function showScs(){
     session_start();
     unset($_SESSION['model_index']);
     unset($_SESSION['edit_model_index']);
      $showscs=1;
     include '../index.php';

   }
   public function showGavrilovic(){
      session_start();
      unset($_SESSION['model_index']);
      unset($_SESSION['edit_model_index']);
      $showgav=1;
     include '../index.php';

   }
    public function showInsert(){
      session_start();
      unset($_SESSION['model_index']);
      unset($_SESSION['edit_model_index']);
       $insertdata=1;
       include '../index.php'; 
    }
    public function returnResult(){
    $id_user=isset($_GET['id_user'])?$_GET['id_user']:"";
       session_start();
       unset($_SESSION['n']);
       unset($_SESSION['model_index']);
       unset($_SESSION['edit_model_index']);
       $returndata=1;
       include '../index.php'; 
    }
    public function editResult(){
    $id=isset($_GET['id'])?$_GET['id']:"";
       session_start();
       unset($_SESSION['n']);
       unset($_SESSION['model_index']);
       unset($_SESSION['edit_model_index']);
       $edit_data=1;
       include '../index.php'; 
    }

    public function insertData(){

     $ime=isset($_GET['ime'])?$_GET['ime']:"";
     $Tkh=isset($_GET['Tkh'])?$_GET['Tkh']:"";
     $k=isset($_GET['k'])?$_GET['k']:"";
     $L=isset($_GET['L'])?$_GET['L']:"";
     $Lc=isset($_GET['Lc'])?$_GET['Lc']:"";
     $Iu=isset($_GET['Iu'])?$_GET['Iu']:"";
     $F=isset($_GET['F'])?$_GET['F']:"";
     $Bm=isset($_GET['Bm'])?$_GET['Bm']:"";
     $H24h=isset($_GET['H24h'])?$_GET['H24h']:"";
     $CN=isset($_GET['CN'])?$_GET['CN']:"";
     $image_name=isset($_GET['image_name'])?$_GET['image_name']:"";
     
     $model_index=[$ime,$Tkh,$k,$L,$Lc,$Iu,$F,$Bm,$H24h,$CN,$image_name];
     $errors=array();
     
     if(empty($ime)){
        $errors['ime']="Morate popuniti ime vodotoka za koji se vrsi proracun";
     }
     if(empty($Tkh)){
        $errors['Tkh']="Morate pravilno popuniti vremenski period za koji se vrsi proracun npr. 10,11,12,13,14,itd.";
     }
     if(empty($k)){
        $errors['k']="Morate odabrati koeficijent oblika hidrograma";
     }
     if(empty($L)){
        $errors['L']="Morate uneti duzinu vodotoka";

     }else{

         if(is_numeric($L)){
            if($L<=0){
               $errors['L']="Duzina vodotoka mora biti veca od 0";
            }
         }else{
            $errors['L']="Duzina toka mora biti numericka vrednost";
         }
     }
      if (empty($Lc)) {
         $errors['Lc'] = "Morate uneti rastojanje od težišta sliva do izlaznog profila";

      } else {

         if (is_numeric($Lc)) {
            if ($Lc <= 0) {
               $errors['Lc'] = "Rastojanje mora biti veca od 0";
            }
         } else {
            $errors['Lc'] = "Rastojanje od težišta sliva do izlaznog profila mora biti numericka vrednost";
         }
      }
      if (empty($Iu)) {
         $errors['Iu'] = "Morate uneti Uravnati pad toka";

      } else {

         if (is_numeric($Iu)) {
            if ($Iu <= 0) {
               $errors['Iu'] = "Uravnati pad toka mora biti veci od 0";
            }
         } else {
            $errors['Iu'] = "Uravnati pad toka mora biti numericka vrednost";
         }
      }
      if (empty($F)) {
         $errors['F'] = "Morate uneti povrsinu sliva";

      } else {

         if (is_numeric($F)) {
            if ($F <= 0) {
               $errors['F'] = "Povrsina sliva  mora biti veci od 0";
            }
         } else {
            $errors['F'] = "Povrsina sliva mora biti numericka vrednost";
         }
      }
      if(empty($Bm)){
         $errors['Bm']="Morate odabrati koeficijent B";
      }
      if (empty($H24h)) {
         $errors['H24h'] = "Morate uneti maksimalnu dnevna kiša verovatnoće pojave 1% ";

      } else {

         if (is_numeric($H24h)) {
            if ($H24h <= 0) {
               $errors['H24h'] = "Vrednost mora biti veca od 0";
            }
         } else {
            $errors['H24h'] = "Maksimalna dnevna kiša mora biti numericka vrednost";
         }
      }
      if (empty($CN)) {
         $errors['CN'] = "Morate uneti broj krive oticaja  ";

      } else {

         if (is_numeric($CN)) {
            if ($CN <= 0) {
               $errors['CN'] = "Vrednost mora biti veca od 0";
            }
         } else {
            $errors['CN'] = "Broj krive oticaja  mora biti numericka vrednost";
         }
      }
      if(count($errors)==0){
          session_start();
         
         $_SESSION['model_index']=$model_index;
         include '../index.php';

      }else{
         $insertdata=1;
         $msg="Molimo vas da popunite formular ispravno";
         include '../index.php';
         
      }
    }//end function insertData----
    public function showResult(){
    session_start();
    $id_user=isset($_GET['id_user'])? $_GET['id_user'] : "";
    $id=isset($_GET['id'])? $_GET['id'] : "";
    unset($_SESSION['model_index']);
    unset($_SESSION['edit_model_index']);
    $_SESSION['id_user']=$id_user;
      $selectresult=1;
     include '../index.php';
     
   }
   public function editScsResult(){
     $id_user=isset($_GET['id_user'])?$_GET['id_user']:"";
     $id=isset($_GET['id'])?$_GET['id']:"";
     $ime=isset($_GET['ime'])?$_GET['ime']:"";
     $Tkh=isset($_GET['Tkh'])?$_GET['Tkh']:"";
     $k=isset($_GET['k'])?$_GET['k']:"";
     $L=isset($_GET['L'])?$_GET['L']:"";
     $Lc=isset($_GET['Lc'])?$_GET['Lc']:"";
     $Iu=isset($_GET['Iu'])?$_GET['Iu']:"";
     $F=isset($_GET['F'])?$_GET['F']:"";
     $Bm=isset($_GET['Bm'])?$_GET['Bm']:"";
     $H24h=isset($_GET['H24h'])?$_GET['H24h']:"";
     $CN=isset($_GET['CN'])?$_GET['CN']:"";
     $image_name=isset($_GET['image_name'])?$_GET['image_name']:"";

     $edit_model_index=[$id_user,$id,$ime,$Tkh,$k,$L,$Lc,$Iu,$F,$Bm,$H24h,$CN,$image_name];
     $errors=array();
     
     if(empty($ime)){
        $errors['ime']="Morate popuniti ime vodotoka za koji se vrsi proracun";
     }
     if(empty($Tkh)){
        $errors['Tkh']="Morate pravilno popuniti vremenski period za koji se vrsi proracun npr. 10,11,12,13,14,itd.";
     }
     if(empty($k)){
        $errors['k']="Morate odabrati koeficijent oblika hidrograma";
     }
     if(empty($L)){
        $errors['L']="Morate uneti duzinu vodotoka";

     }else{

         if(is_numeric($L)){
            if($L<=0){
               $errors['L']="Duzina vodotoka mora biti veca od 0";
            }
         }else{
            $errors['L']="Duzina toka mora biti numericka vrednost";
         }
     }
      if (empty($Lc)) {
         $errors['Lc'] = "Morate uneti rastojanje od težišta sliva do izlaznog profila";

      } else {

         if (is_numeric($Lc)) {
            if ($Lc <= 0) {
               $errors['Lc'] = "Rastojanje mora biti veca od 0";
            }
         } else {
            $errors['Lc'] = "Rastojanje od težišta sliva do izlaznog profila mora biti numericka vrednost";
         }
      }
      if (empty($Iu)) {
         $errors['Iu'] = "Morate uneti Uravnati pad toka";

      } else {

         if (is_numeric($Iu)) {
            if ($Iu <= 0) {
               $errors['Iu'] = "Uravnati pad toka mora biti veci od 0";
            }
         } else {
            $errors['Iu'] = "Uravnati pad toka mora biti numericka vrednost";
         }
      }
      if (empty($F)) {
         $errors['F'] = "Morate uneti povrsinu sliva";

      } else {

         if (is_numeric($F)) {
            if ($F <= 0) {
               $errors['F'] = "Povrsina sliva  mora biti veci od 0";
            }
         } else {
            $errors['F'] = "Povrsina sliva mora biti numericka vrednost";
         }
      }
      if(empty($Bm)){
         $errors['Bm']="Morate odabrati koeficijent B";
      }
      if (empty($H24h)) {
         $errors['H24h'] = "Morate uneti maksimalnu dnevna kiša verovatnoće pojave 1% ";

      } else {

         if (is_numeric($H24h)) {
            if ($H24h <= 0) {
               $errors['H24h'] = "Vrednost mora biti veca od 0";
            }
         } else {
            $errors['H24h'] = "Maksimalna dnevna kiša mora biti numericka vrednost";
         }
      }
      if (empty($CN)) {
         $errors['CN'] = "Morate uneti broj krive oticaja  ";

      } else {

         if (is_numeric($CN)) {
            if ($CN <= 0) {
               $errors['CN'] = "Vrednost mora biti veca od 0";
            }
         } else {
            $errors['CN'] = "Broj krive oticaja  mora biti numericka vrednost";
         }
      }
      if(count($errors)==0){
         session_start();
         $_SESSION['edit_model_index']=$edit_model_index;
         include '../index.php';

      }else{
         $edit_data=1;
         $msg="Molimo vas da popunite formular ispravno";
         include '../index.php';
         
      }    
   }//end editScsResult
   public function viewResultScs(){
     $id=isset($_GET['id'])?$_GET['id']:"";
     $dao= new DAO();
     $resultscs=$dao->getResultScs($id);
    //  var_dump($resultscs);
     foreach($resultscs as $value){
         $id_user=$value['id_user'];
         $id=$value['id'];
         $ime=$value['ime'];
         $Tkh=$value['Tkh'];
         $k=$value['k'];
         $L=$value['L'];
         $Lc=$value['Lc'];
         $Iu=$value['Iu'];
         $F=$value['F'];
         $Bm=$value['Bm'];
         $H24h=$value['H24h'];
         $CN=$value['CN'];
         $image_name=$value['image_name'];
     }
     $edit_model_index=[$id_user,$id,$ime,$Tkh,$k,$L,$Lc,$Iu,$F,$Bm,$H24h,$CN,$image_name];
         session_start();
         $_SESSION['edit_model_index']=$edit_model_index;
         include '../index.php';
    //  var_dump($edit_model_index);
   }
   
   public function showInsertGavrilovic(){
      session_start();
      unset($_SESSION['model_gav']);
      unset($_SESSION['model_index']);
      unset($_SESSION['edit_model_index']);
      $insertdatagav=1;
      include '../index.php';

   }
   public function insertDataGavrilovic(){
    $id_user=isset($_GET['id_user'])?$_GET['id_user']:"";
    $imesliva=isset($_GET['imesliva'])?$_GET['imesliva']:"";
    $Nsr=isset($_GET['Nsr'])?$_GET['Nsr']:"";
    $Jsr=isset($_GET['Jsr'])?$_GET['Jsr']:"";
    $t=isset($_GET['t'])?$_GET['t']:"";
    $Ls=isset($_GET['Ls'])?$_GET['Ls']:"";
    $O=isset($_GET['O'])?$_GET['O']:"";
    $Nu=isset($_GET['Nu'])?$_GET['Nu']:"";
    $Fs=isset ( $_GET['Fs'])?$_GET [ 'Fs']:"";
    //---
    $y1=isset($_GET['y1'])?$_GET['y1']:"";
    $py1=isset($_GET['py1'])?$_GET['py1']:"";
    $y2=isset($_GET['y2'])?$_GET['y2']:"";
    $py2=isset($_GET['py2'])?$_GET['py2']:"";
    $y3=isset($_GET['y3'])?$_GET['y3']:"";
    $py3=isset($_GET['py3'])?$_GET['py3']:"";
    //---
    $f1=isset($_GET['f1'])?$_GET['f1']:"";
    $pf1=isset($_GET['pf1'])?$_GET['pf1']:"";
    $f2=isset($_GET['f2'])?$_GET['f2']:"";
    $pf2=isset($_GET['pf2'])?$_GET['pf2']:"";
    $f3=isset($_GET['f3'])?$_GET['f3']:"";
    $pf3=isset($_GET['pf3'])?$_GET['pf3']:"";
    //---
    $xa1=isset($_GET['xa1'])?$_GET['xa1']:"";
    $pxa1=isset($_GET['pxa1'])?$_GET['pxa1']:"";
    $xa2=isset($_GET['xa2'])?$_GET['xa2']:"";
    $pxa2=isset($_GET['pxa2'])?$_GET['pxa2']:"";
    $xa3=isset($_GET['xa3'])?$_GET['xa3']:"";
    $pxa3=isset($_GET['pxa3'])?$_GET['pxa3']:"";
    //----
    
    $Hgod=isset($_GET['Hgod'])?$_GET['Hgod']:"";
    $image_name=isset($_GET['image_name'])?$_GET['image_name']:"";

    $errors=array();

    if(empty($imesliva)){
       $errors['imesliva']="Morate popuniti ime sliva ili podrucja za koji se vrsi proracun";
    }
    if(empty($Nsr)){
      $errors['Nsr']="Morate uneti srednju nadmorsku visinu";
    }else{
         if (is_numeric($Nsr)) { 

            if($Nsr<=0){
               $errors['Nsr']="Morate uneti vrednost vecu od 0";
            }
         }else{
            $errors['Nsr']="Mora biti numericka vrednost";
         }
    }
      if(empty ($Jsr)){
          $errors['Jsr']="Mora te uneti srednji pad sliva";
      }else{ 
          if (is_numeric($Jsr)) {

            if($Jsr<=0){ 
                 $errors['Jsr']="Mora te uneti vrednost vecu od 0";
            }
         }else{ 
             $errors['Jsr']="Mora  biti numericka vrednost";
         }
    }
    if(empty ($t)){
          $errors['t']="Mora t e uneti srednju godisnju temperaturu vazduha";
      }else{ 
          if (is_numeric($t)) {

            if($Nsr<=0){ 
                 $errors['t']="Mora te uneti vrednost vecu od 0";
            }
         }else{ 
             $errors['t']="Mora biti numericka vrednost";
         }
    }
    if(empty ($Ls)){
          $errors['Ls']="Mora te uneti duzinu sliva po glavnom toku";
      }else{ 
          if (is_numeric($Ls)) {

            if($Ls<=0){ 
                 $errors['Ls']="Mora te uneti vrednost vecu od 0";
            }
         }else{ 
             $errors['Ls']="Mora biti numericka vrednost";
         }
    }
    if(empty ($O)){
          $errors['O']="Mora te uneti obim sliva";
      }else{ 
          if (is_numeric($O)) {

            if($O<=0){ 
                 $errors['O']="Mora te uneti vrednost vecu od 0";
            }
         }else{ 
             $errors['O']="Mora biti numericka vrednost";
         }
    }
    if(empty ($Nu)){
          $errors['Nu']="Morate uneti nadmorsku visinu usca Nu";
      }else{ 
          if (is_numeric($Nu)) {

            if($Nu<=0 ){ 
                 $errors['Nu']="Mora te uneti vrednost vecu od 0";
            }
         }else{ 
             $errors['Nu']="Mora biti numericka vrednost";
         }
    }
    if(empty ($Fs)){
          $errors['Fs']="Morate uneti povrsinu sliva Fs";
      }else{ 
          if (is_numeric($Fs)) {

            if($Fs<= 0){  
                $errors['Fs']="Morate uneti vrednost vecu od 0";
            }
         }else{ 
             $errors['Fs']="Mora biti numericka vrednost";
         }
    }
    // if(empty($y)){
    //   $errors['y']="Morate odabrati koeficijent Y";
    // }
    // if(empty($xa)){
    //   $errors['xa']="Morate odabrati koeficijent Xa";
    // }
    
    // if(empty($f)){
    //   $errors['f']="Morate odabrati koeficijent F"; 
    // }
    if(empty($Hgod)){
       $errors['Hgod']="Morate uneti srednju godisnju kolicinu padavina Hgod";
    }else{
        if(is_numeric($Hgod)){

          if($Hgod<=0){

             $errors['Hgod']="Morate uneti vrednost vecu od 0";
          }
        }else{
          $errors['Hgod']="Mora biti numericka vrednost";
        }
    }
    if(count($errors)==0){
        session_start();
         $modelgavrilovic=1;
         $model_gav=[$imesliva,$Nsr,$Jsr,$t,$Ls,$O,$Nu,$Fs,$y1,$py1,$y2,$py2,$y3,$py3,$xa1,$pxa1,$xa2,$pxa2,$xa3,$pxa3,$f1,$pf1,$f2,$pf2,$f3,$pf3,$Hgod,$image_name];
         $_SESSION['model_gav']=$model_gav;
         include '../index.php';
         
    }else{

       $msg= "Molimo vas da popunite formular ispravno.";
         $insertdatagav=1;
         include '../index.php';
        //  include 'insertdatagavrilovic.php';
    }
      

   }//end function insertDataGavrilovic
   public function editGavrilovic(){
    $idgav=isset($_GET['idgav'])?$_GET['idgav']:"";   
    $imesliva=isset($_GET['imesliva'])?$_GET['imesliva']:"";
    $Nsr=isset($_GET['Nsr'])?$_GET['Nsr']:"";
    $Jsr=isset($_GET['Jsr'])?$_GET['Jsr']:"";
    $t=isset($_GET['t'])?$_GET['t']:"";
    $Ls=isset($_GET['Ls'])?$_GET['Ls']:"";
    $O=isset($_GET['O'])?$_GET['O']:"";
    $Nu=isset($_GET['Nu'])?$_GET['Nu']:"";
    $Fs=isset ( $_GET['Fs'])?$_GET [ 'Fs']:"";
    
    $y1=isset($_GET['y1'])?$_GET['y1']:"";
    $py1=isset($_GET['py1'])?$_GET['py1']:"";
    $y2=isset($_GET['y2'])?$_GET['y2']:"";
    $py2=isset($_GET['py2'])?$_GET['py2']:"";
    $y3=isset($_GET['y3'])?$_GET['y3']:"";
    $py3=isset($_GET['py3'])?$_GET['py3']:"";
    //---
    $f1=isset($_GET['f1'])?$_GET['f1']:"";
    $pf1=isset($_GET['pf1'])?$_GET['pf1']:"";
    $f2=isset($_GET['f2'])?$_GET['f2']:"";
    $pf2=isset($_GET['pf2'])?$_GET['pf2']:"";
    $f3=isset($_GET['f3'])?$_GET['f3']:"";
    $pf3=isset($_GET['pf3'])?$_GET['pf3']:"";
    //---
    $xa1=isset($_GET['xa1'])?$_GET['xa1']:"";
    $pxa1=isset($_GET['pxa1'])?$_GET['pxa1']:"";
    $xa2=isset($_GET['xa2'])?$_GET['xa2']:"";
    $pxa2=isset($_GET['pxa2'])?$_GET['pxa2']:"";
    $xa3=isset($_GET['xa3'])?$_GET['xa3']:"";
    $pxa3=isset($_GET['pxa3'])?$_GET['pxa3']:"";
    
    $Hgod=isset($_GET['Hgod'])?$_GET['Hgod']:"";
    
    $image_name=isset($_GET['image_name'])?$_GET['image_name']:"";

    $errors=array();

    if(empty($imesliva)){
       $errors['imesliva']="Morate popuniti ime sliva ili podrucja za koji se vrsi proracun";
    }
    if(empty($Nsr)){
      $errors['Nsr']="Morate uneti srednju nadmorsku visinu";
    }else{
         if (is_numeric($Nsr)) { 

            if($Nsr<=0){
               $errors['Nsr']="Morate uneti vrednost vecu od 0";
            }
         }else{
            $errors['Nsr']="Mora biti numericka vrednost";
         }
    }
      if(empty ($Jsr)){
          $errors['Jsr']="Mora te uneti srednji pad sliva";
      }else{ 
          if (is_numeric($Jsr)) {

            if($Jsr<=0){ 
                 $errors['Jsr']="Mora te uneti vrednost vecu od 0";
            }
         }else{ 
             $errors['Jsr']="Mora  biti numericka vrednost";
         }
    }
    if(empty ($t)){
          $errors['t']="Mora t e uneti srednju godisnju temperaturu vazduha";
      }else{ 
          if (is_numeric($t)) {

            if($Nsr<=0){ 
                 $errors['t']="Mora te uneti vrednost vecu od 0";
            }
         }else{ 
             $errors['t']="Mora biti numericka vrednost";
         }
    }
    if(empty ($Ls)){
          $errors['Ls']="Mora te uneti duzinu sliva po glavnom toku";
      }else{ 
          if (is_numeric($Ls)) {

            if($Ls<=0){ 
                 $errors['Ls']="Mora te uneti vrednost vecu od 0";
            }
         }else{ 
             $errors['Ls']="Mora biti numericka vrednost";
         }
    }
    if(empty ($O)){
          $errors['O']="Mora te uneti obim sliva";
      }else{ 
          if (is_numeric($O)) {

            if($O<=0){ 
                 $errors['O']="Mora te uneti vrednost vecu od 0";
            }
         }else{ 
             $errors['O']="Mora biti numericka vrednost";
         }
    }
    if(empty ($Nu)){
          $errors['Nu']="Morate uneti nadmorsku visinu usca Nu";
      }else{ 
          if (is_numeric($Nu)) {

            if($Nu<=0 ){ 
                 $errors['Nu']="Mora te uneti vrednost vecu od 0";
            }
         }else{ 
             $errors['Nu']="Mora biti numericka vrednost";
         }
    }
    if(empty ($Fs)){
          $errors['Fs']="Morate uneti povrsinu sliva Fs";
      }else{ 
          if (is_numeric($Fs)) {

            if($Fs<= 0){  
                $errors['Fs']="Morate uneti vrednost vecu od 0";
            }
         }else{ 
             $errors['Fs']="Mora biti numericka vrednost";
         }
    }
    // if(empty($y)){
    //   $errors['y']="Morate odabrati koeficijent Y";
    // }
    // if(empty($xa)){
    //   $errors['xa']="Morate odabrati koeficijent Xa";
    // }
    
    // if(empty($f)){
    //   $errors['f']="Morate odabrati koeficijent F"; 
    // }
    if(empty($Hgod)){
       $errors['Hgod']="Morate uneti srednju godisnju kolicinu padavina Hgod";
    }else{
        if(is_numeric($Hgod)){

          if($Hgod<=0){

             $errors['Hgod']="Morate uneti vrednost vecu od 0";
          }
        }else{
          $errors['Hgod']="Mora biti numericka vrednost";
        }
    }
    if(count($errors)==0){
        session_start();
        if(isset($_SESSION['edit_gav'])){
            unset($_SESSION['edit_gav']);
        }
         $editgavrilovic=1;
         $edit_gav=[$idgav,$imesliva,$Nsr,$Jsr,$t,$Ls,$O,$Nu,$Fs,$y1,$py1,$y2,$py2,$y3,$py3,$xa1,$pxa1,$xa2,$pxa2,$xa3,$pxa3,$f1,$pf1,$f2,$pf2,$f3,$pf3,$Hgod,$image_name];
         $_SESSION['edit_gav']=$edit_gav;
         include '../index.php';
         
    }else{

       $msg= "Molimo vas da popunite formular ispravno.";
         $insertdatagav=1;
         include '../index.php';
        //  include 'insertdatagavrilovic.php';
    } 
       
   }//end editGavrilovic
   public function viewResultGav(){
      $idgav=isset($_GET['idgav'])?$_GET['idgav']:"";
      $dao=new DAO();
      $resultgav=$dao->editIdGavrilovic($idgav);
      foreach($resultgav as $v){
        $imesliva =$v['imesliva'];
        $Nsr = $v['Nsr'];
        $Jsr = $v['Jsr'];
        $t = $v['t'];
        $Ls = $v['Ls'];
        $O = $v['O'];
        $Nu = $v['Nu'];
        $Fs = $v['Fs'];
        $y1 = $v['y1'];
        $py1 = $v['py1'];
        $y2 = $v['y2'];
        $py2 = $v['py2'];
        $y3 = $v['y3'];
        $py3 = $v['py3'];
        $xa1 = $v['xa1'];
        $pxa1 = $v['pxa1'];
        $xa2 = $v['xa2'];
        $pxa2 = $v['pxa2'];
        $xa3 = $v['xa3'];
        $pxa3 = $v['pxa3'];
        $f1 = $v['f1'];
        $pf1 = $v['pf1'];
        $f2 = $v['f2'];
        $pf2 = $v['pf2'];
        $f3 = $v['f3'];
        $pf3 = $v['pf3'];
        $Hgod = $v['Hgod'];
        $image_name= $v['image_name']; 
      }
       session_start();
        if(isset($_SESSION['edit_gav'])){
            unset($_SESSION['edit_gav']);
        }
         $editgavrilovic=1;
         $edit_gav=[$idgav,$imesliva,$Nsr,$Jsr,$t,$Ls,$O,$Nu,$Fs,$y1,$py1,$y2,$py2,$y3,$py3,$xa1,$pxa1,$xa2,$pxa2,$xa3,$pxa3,$f1,$pf1,$f2,$pf2,$f3,$pf3,$Hgod,$image_name];
         $_SESSION['edit_gav']=$edit_gav;
         include '../index.php';
      
   }//end viewResulGav
   public function showClearData(){
      $id_user=isset($_GET['id_user'])?$_GET['id_user']:"";
      $dao= new Dao();
      $dao->clearAllData($id_user);
      session_start();
      unset($_SESSION['model_index']);
      unset($_SESSION['edit_model_index']);
      header('Location:https://scs.estavela.in.rs/view/routes.php?pagescs=showinsert');
   }
   public function showClearLastData(){
       $id_user= isset($_GET['id_user'])?$_GET['id_user']:"";
    //   var_dump($id_user);
      $dao=new Dao();
      $dao->clearLastData($id_user);
      $selectresult=1;
      include '../index.php';
   }
   public function showResultGavrilovic(){
    $id_user=isset($_GET['id_user'])?$_GET['id_user']:"";
    session_start();
    unset($_SESSION['edit_gav']);
    unset($_SESSION['model_index']);
    unset($_SESSION['edit_model_index']);
    $gavrilovicresult=1;
       include '../index.php';
   }
   public function showResultIdGav(){
    $idgav=isset($_GET['idgav'])?$_GET['idgav']:"";
    session_start();
    unset($_SESSION['edit_gav']);
    unset($_SESSION['model_index']);
    unset($_SESSION['edit_model_index']);
    $gavidresult=1;
       include '../index.php';
   }
   public function showClearLastDataGavrilovic(){
      $id_user=isset($_GET['id_user'])?$_GET['id_user']:"";
      $dao= new DAO();
      $dao->clearLastDataGavrilovic($id_user);
      $gavrilovicresult=1;
      include '../index.php';
   }
   public function clearAllDataGavrilovic(){
      $id_user=isset($_GET['id_user'])?$_GET['id_user']:"";
      $dao=new DAO();
      $dao->clearAllDataGav($id_user);
      include 'insertdatagavrilovic.php';
   }
   public function clearResultIdGav(){
      $idgav=isset($_GET['idgav'])?$_GET['idgav']:""; 
      $dao= new DAO();
      $dao->clearIdGav($idgav);
      $gavrilovicresult=1;
      include '../index.php';
      
   }
   public function editResultGav(){
       $idgav=isset($_GET['idgav'])?$_GET['idgav']:"";
       session_start();
       unset($_SESSION['model_index']);
       unset($_SESSION['edit_model_index']);
       unset($_SESSION['edit_gav']);
       $dao=new DAO();
       $editgav=$dao->editIdGavrilovic($idgav);
       $editdatagav=1;
       include '../index.php';
   }
   public function showLogin(){
       $login='login';
      include '../index.php';
   }
   public function showRegister(){
       $register=1;
       $login='showregister';
       include '../index.php';
   }
   public function registration(){
    $name=isset($_POST['name'])?$_POST['name']:"";
   $surname=isset($_POST['surname'])?$_POST['surname']:"";
   $email=isset($_POST['email'])?$_POST['email']:"";
   $username=isset($_POST['username'])?$_POST['username']:"";
   $password=isset($_POST['password'])?$_POST['password']:"";
   $confirmpassword=isset($_POST['confirmpassword'])?$_POST['confirmpassword']:"";
//   var_dump($name,$surname,$email,$username,$password,$confirmpassword);
   $errors=array();

   if(empty($name)){
       $errors['name']= "You need to enter a tname";
   }
   if(empty($surname)){
       $errors['surname']= "You need to enter a surname";
   }
   if(empty($email)){
       $errors['email']= "You need to enter a email";

   }else{

     if(filter_var($email, FILTER_VALIDATE_EMAIL)==false){
         $errors['email']= "You need to enter a valid email";
     }else{
         $dao=new DAO();
         $mail=$dao->getAllUsers();
         foreach($mail as $m){
             if($m['email']==$email){
              $errors['email']= "This email already exists, please enter another email";
             }
         }
     }
   }
   if(empty($username)){
      
       $errors['username']="You need to enter username";
   }else{
       $dao=new DAO();
       $usernm=$dao->getAllUsers();
       foreach($usernm as $us){
        
         if($us['username']==$username){
           $errors['username']= "This username already exists, please enter another username";
         }
       }
   }
   if(empty($password)){
       $errors['password']="You need to enter password";
   }
   if(empty($confirmpassword)){

       $errors['confirmpassword']= "You need to confirm the password";

   }else{ 
       if ($password !== $confirmpassword){

                $errors['confirmpassword'] = "Password fields do not match";
            }
        }
   if(count($errors)==0){
       $dao=new DAO();
       $admin=0;
       $dao->register($name,$surname,$username,$email,$password,$admin);
       $msg= "You have successfully registered, please log in";
       $login='login';
       include '../index.php';
   }else{

      $msg= "You need to enter the data correctly in the form ";
      $register=1;
      $login='login';
      include '../index.php';
   }   
   }
   public function login(){
     session_start();
     $username=isset($_POST['username'])?$_POST['username']:"";
     $password=isset( $_POST['password'])?$_POST['password']:"";
//   var_dump($username,$password);
     if(!empty($username) && !empty($password)){
         $dao= new DAO();
         $user=$dao->login($username,$password);
         
         if($user){
         //uvek kada koristimo sesiju prvo treba da je startujemo
         
         $_SESSION['user']=$user;
         
         include '../index.php'; //ovo mora da se promeni kad se vrsi logovanje sa index strane da se vrati na index stranu
        //  header('Location:../index.php');
         }else{
             $msg= "Incorrect username or password";
             $login='login';
             include '../index.php';
         }

     }else{
       $msg= "You must enter username and password";
       $login='login';
       include '../index.php';
     }   
   }
   public function logout(){
     session_start();
     unset($_SESSION['model_index']);
     unset($_SESSION['edit_model_index']);
     unset($_SESSION['edit_gav']);
     unset($_SESSION['user']);
    //  session_destroy();
    //  header('Location:login.php');
    $login='logout';
    include '../index.php';
   }
   public function allResultScs(){
   $id_user=isset($_GET['id_user'])?$_GET['id_user']:"";
   
     include 'allresultscs.php';  
   }
   public function allResultGavrilovic(){
   $id_user=isset($_GET['id_user'])?$_GET['id_user']:"";
     include 'allresultgavrilovic.php';  
   }
   public function deleteResultScs(){
       
   $id=isset($_GET['id'])?$_GET['id']:"";
   $dao= new DAO();
   $resultscs= $dao->deleteResultSCS($id);
   include 'allresultscs.php';
   }
   public function clearResultId(){
   $id=isset($_GET['id'])?$_GET['id']:"";
   $dao= new DAO();
   $delete_result_id=$dao->deleteResultSCS($id);
   $selectresult=1;
   include '../index.php';
   }
   public function vrednostCN(){
     $id_user=isset($_GET['id_user'])?$_GET['id_user']:"";
     $ime=isset($_GET['ime'])?$_GET['ime']:"";
     $L=isset($_GET['L'])?$_GET['L']:"";
     $F=isset($_GET['F'])?$_GET['F']:"";
     // ugar
     $hidro_klasa_ugar=(explode(',', isset($_GET['hidro_klasa_ugar'])?$_GET['hidro_klasa_ugar']:""));
     $nacin_koriscenja_ugar=(explode(',', isset($_GET['nacin_koriscenja_ugar'])?$_GET['nacin_koriscenja_ugar']:""));
     $p1=isset($_GET['p1'])?$_GET['p1']:"";
     
     foreach($hidro_klasa_ugar as $value){  
         if($value[0] == 'A'){
            $CN_ugar=$nacin_koriscenja_ugar[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_ugar=$nacin_koriscenja_ugar[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_ugar=$nacin_koriscenja_ugar[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_ugar=$nacin_koriscenja_ugar[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
    // var_dump($CN_ugar);
    
    //okopavine------------
    
     $hidro_klasa_okopavine_1=(explode(',', isset($_GET['hidro_klasa_okopavine_1'])?$_GET['hidro_klasa_okopavine_1']:""));
     $nacin_koriscenja_okopavine_1=(explode(',', isset($_GET['nacin_koriscenja_okopavine_1'])?$_GET['nacin_koriscenja_okopavine_1']:""));
     $p21=isset($_GET['p21'])?$_GET['p21']:"";
     
     foreach($hidro_klasa_okopavine_1 as $value){  
         if($value[0] == 'A'){
            $CN_okopavine_1=$nacin_koriscenja_okopavine_1[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_okopavine_1=$nacin_koriscenja_okopavine_1[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_okopavine_1=$nacin_koriscenja_okopavine_1[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_okopavine_1=$nacin_koriscenja_okopavine_1[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
       //-------
       
     $hidro_klasa_okopavine_2=(explode(',', isset($_GET['hidro_klasa_okopavine_2'])?$_GET['hidro_klasa_okopavine_2']:""));
     $nacin_koriscenja_okopavine_2=(explode(',', isset($_GET['nacin_koriscenja_okopavine_2'])?$_GET['nacin_koriscenja_okopavine_2']:""));
     $p22=isset($_GET['p22'])?$_GET['p22']:"";
     
     foreach($hidro_klasa_okopavine_2 as $value){  
         if($value[0] == 'A'){
            $CN_okopavine_2=$nacin_koriscenja_okopavine_2[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_okopavine_2=$nacin_koriscenja_okopavine_2[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_okopavine_2=$nacin_koriscenja_okopavine_2[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_okopavine_2=$nacin_koriscenja_okopavine_2[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     //-----
     $hidro_klasa_okopavine_3=(explode(',', isset($_GET['hidro_klasa_okopavine_3'])?$_GET['hidro_klasa_okopavine_3']:""));
     $nacin_koriscenja_okopavine_3=(explode(',', isset($_GET['nacin_koriscenja_okopavine_3'])?$_GET['nacin_koriscenja_okopavine_3']:""));
     $p23=isset($_GET['p23'])?$_GET['p23']:"";
     
     foreach($hidro_klasa_okopavine_3 as $value){  
         if($value[0] == 'A'){
            $CN_okopavine_3=$nacin_koriscenja_okopavine_3[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_okopavine_3=$nacin_koriscenja_okopavine_3[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_okopavine_3=$nacin_koriscenja_okopavine_3[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_okopavine_3=$nacin_koriscenja_okopavine_3[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     //-----
     //end okopavine--------------
     
    //zitarice-------------------
    
     $hidro_klasa_zitarice_1=(explode(',', isset($_GET['hidro_klasa_zitarice_1'])?$_GET['hidro_klasa_zitarice_1']:""));
     $nacin_koriscenja_zitarice_1=(explode(',', isset($_GET['nacin_koriscenja_zitarice_1'])?$_GET['nacin_koriscenja_zitarice_1']:""));
     $p31=isset($_GET['p31'])?$_GET['p31']:"";
     
     foreach($hidro_klasa_zitarice_1 as $value){  
         if($value[0] == 'A'){
            $CN_zitarice_1=$nacin_koriscenja_zitarice_1[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_zitarice_1=$nacin_koriscenja_zitarice_1[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_zitarice_1=$nacin_koriscenja_zitarice_1[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_zitarice_1=$nacin_koriscenja_zitarice_1[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //------
     
     $hidro_klasa_zitarice_2=(explode(',', isset($_GET['hidro_klasa_zitarice_2'])?$_GET['hidro_klasa_zitarice_2']:""));
     $nacin_koriscenja_zitarice_2=(explode(',', isset($_GET['nacin_koriscenja_zitarice_2'])?$_GET['nacin_koriscenja_zitarice_2']:""));
     $p32=isset($_GET['p32'])?$_GET['p32']:"";
     
     foreach($hidro_klasa_zitarice_2 as $value){  
         if($value[0] == 'A'){
            $CN_zitarice_2=$nacin_koriscenja_zitarice_2[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_zitarice_2=$nacin_koriscenja_zitarice_2[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_zitarice_2=$nacin_koriscenja_zitarice_2[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_zitarice_2=$nacin_koriscenja_zitarice_2[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     //-----
     $hidro_klasa_zitarice_3=(explode(',', isset($_GET['hidro_klasa_zitarice_3'])?$_GET['hidro_klasa_zitarice_3']:""));
     $nacin_koriscenja_zitarice_3=(explode(',', isset($_GET['nacin_koriscenja_zitarice_3'])?$_GET['nacin_koriscenja_zitarice_3']:""));
     $p33=isset($_GET['p33'])?$_GET['p33']:"";
     
     foreach($hidro_klasa_zitarice_3 as $value){  
         if($value[0] == 'A'){
            $CN_zitarice_3=$nacin_koriscenja_zitarice_3[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_zitarice_3=$nacin_koriscenja_zitarice_3[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_zitarice_3=$nacin_koriscenja_zitarice_3[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_zitarice_3=$nacin_koriscenja_zitarice_3[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     // end zitarice-------
     
     //mahunarke
     
     $hidro_klasa_mahunarke_1=(explode(',', isset($_GET['hidro_klasa_mahunarke_1'])?$_GET['hidro_klasa_mahunarke_1']:""));
     $nacin_koriscenja_mahunarke_1=(explode(',', isset($_GET['nacin_koriscenja_mahunarke_1'])?$_GET['nacin_koriscenja_mahunarke_1']:""));
     $p41=isset($_GET['p41'])?$_GET['p41']:"";
     
     foreach($hidro_klasa_mahunarke_1 as $value){  
         if($value[0] == 'A'){
            $CN_mahunarke_1=$nacin_koriscenja_mahunarke_1[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_mahunarke_1=$nacin_koriscenja_mahunarke_1[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_mahunarke_1=$nacin_koriscenja_mahunarke_1[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_mahunarke_1=$nacin_koriscenja_mahunarke_1[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //-----
     
     $hidro_klasa_mahunarke_2=(explode(',', isset($_GET['hidro_klasa_mahunarke_2'])?$_GET['hidro_klasa_mahunarke_2']:""));
     $nacin_koriscenja_mahunarke_2=(explode(',', isset($_GET['nacin_koriscenja_mahunarke_2'])?$_GET['nacin_koriscenja_mahunarke_2']:""));
     $p42=isset($_GET['p42'])?$_GET['p42']:"";
     
     foreach($hidro_klasa_mahunarke_2 as $value){  
         if($value[0] == 'A'){
            $CN_mahunarke_2=$nacin_koriscenja_mahunarke_2[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_mahunarke_2=$nacin_koriscenja_mahunarke_2[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_mahunarke_2=$nacin_koriscenja_mahunarke_2[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_mahunarke_2=$nacin_koriscenja_mahunarke_2[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //--------
     
     $hidro_klasa_mahunarke_3=(explode(',', isset($_GET['hidro_klasa_mahunarke_3'])?$_GET['hidro_klasa_mahunarke_3']:""));
     $nacin_koriscenja_mahunarke_3=(explode(',', isset($_GET['nacin_koriscenja_mahunarke_3'])?$_GET['nacin_koriscenja_mahunarke_3']:""));
     $p43=isset($_GET['p43'])?$_GET['p43']:"";
     
     foreach($hidro_klasa_mahunarke_3 as $value){  
         if($value[0] == 'A'){
            $CN_mahunarke_3=$nacin_koriscenja_mahunarke_3[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_mahunarke_3=$nacin_koriscenja_mahunarke_3[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_mahunarke_3=$nacin_koriscenja_mahunarke_3[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_mahunarke_3=$nacin_koriscenja_mahunarke_3[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     //end mahunarke-------
     
     //pasnjaci
     
     $hidro_klasa_pasnjaci_1=(explode(',', isset($_GET['hidro_klasa_pasnjaci_1'])?$_GET['hidro_klasa_pasnjaci_1']:""));
     $nacin_koriscenja_pasnjaci_1=(explode(',', isset($_GET['nacin_koriscenja_pasnjaci_1'])?$_GET['nacin_koriscenja_pasnjaci_1']:""));
     $p51=isset($_GET['p51'])?$_GET['p51']:"";
     
     foreach($hidro_klasa_pasnjaci_1 as $value){  
         if($value[0] == 'A'){
            $CN_pasnjaci_1=$nacin_koriscenja_pasnjaci_1[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_pasnjaci_1=$nacin_koriscenja_pasnjaci_1[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_pasnjaci_1=$nacin_koriscenja_pasnjaci_1[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_pasnjaci_1=$nacin_koriscenja_pasnjaci_1[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //------
     
     $hidro_klasa_pasnjaci_2=(explode(',', isset($_GET['hidro_klasa_pasnjaci_2'])?$_GET['hidro_klasa_pasnjaci_2']:""));
     $nacin_koriscenja_pasnjaci_2=(explode(',', isset($_GET['nacin_koriscenja_pasnjaci_2'])?$_GET['nacin_koriscenja_pasnjaci_2']:""));
     $p52=isset($_GET['p52'])?$_GET['p52']:"";
     
     foreach($hidro_klasa_pasnjaci_2 as $value){  
         if($value[0] == 'A'){
            $CN_pasnjaci_2=$nacin_koriscenja_pasnjaci_2[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_pasnjaci_2=$nacin_koriscenja_pasnjaci_2[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_pasnjaci_2=$nacin_koriscenja_pasnjaci_2[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_pasnjaci_2=$nacin_koriscenja_pasnjaci_2[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //------
     
     $hidro_klasa_pasnjaci_3=(explode(',', isset($_GET['hidro_klasa_pasnjaci_3'])?$_GET['hidro_klasa_pasnjaci_3']:""));
     $nacin_koriscenja_pasnjaci_3=(explode(',', isset($_GET['nacin_koriscenja_pasnjaci_3'])?$_GET['nacin_koriscenja_pasnjaci_3']:""));
     $p53=isset($_GET['p53'])?$_GET['p53']:"";
     
     foreach($hidro_klasa_pasnjaci_3 as $value){  
         if($value[0] == 'A'){
            $CN_pasnjaci_3=$nacin_koriscenja_pasnjaci_3[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_pasnjaci_3=$nacin_koriscenja_pasnjaci_3[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_pasnjaci_3=$nacin_koriscenja_pasnjaci_3[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_pasnjaci_3=$nacin_koriscenja_pasnjaci_3[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     //end pasnjaci------
     
    //livade
    
     $hidro_klasa_livade=(explode(',', isset($_GET['hidro_klasa_livade'])?$_GET['hidro_klasa_livade']:""));
     $nacin_koriscenja_livade=(explode(',', isset($_GET['nacin_koriscenja_livade'])?$_GET['nacin_koriscenja_livade']:""));
     $p6=isset($_GET['p6'])?$_GET['p6']:"";
     
     foreach($hidro_klasa_livade as $value){  
         if($value[0] == 'A'){
            $CN_livade=$nacin_koriscenja_livade[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_livade=$nacin_koriscenja_livade[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_livade=$nacin_koriscenja_livade[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_livade=$nacin_koriscenja_livade[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //sume
     
     $hidro_klasa_sume_1=(explode(',', isset($_GET['hidro_klasa_sume_1'])?$_GET['hidro_klasa_sume_1']:""));
     $nacin_koriscenja_sume_1=(explode(',', isset($_GET['nacin_koriscenja_sume_1'])?$_GET['nacin_koriscenja_sume_1']:""));
     $p71=isset($_GET['p71'])?$_GET['p71']:"";
     
     foreach($hidro_klasa_sume_1 as $value){  
         if($value[0] == 'A'){
            $CN_sume_1=$nacin_koriscenja_sume_1[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_sume_1=$nacin_koriscenja_sume_1[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_sume_1=$nacin_koriscenja_sume_1[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_sume_1=$nacin_koriscenja_sume_1[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //-----
     
     $hidro_klasa_sume_2=(explode(',', isset($_GET['hidro_klasa_sume_2'])?$_GET['hidro_klasa_sume_2']:""));
     $nacin_koriscenja_sume_2=(explode(',', isset($_GET['nacin_koriscenja_sume_2'])?$_GET['nacin_koriscenja_sume_2']:""));
     $p72=isset($_GET['p72'])?$_GET['p72']:"";
     
     foreach($hidro_klasa_sume_2 as $value){  
         if($value[0] == 'A'){
            $CN_sume_2=$nacin_koriscenja_sume_2[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_sume_2=$nacin_koriscenja_sume_2[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_sume_2=$nacin_koriscenja_sume_2[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_sume_2=$nacin_koriscenja_sume_2[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //----
     
     $hidro_klasa_sume_3=(explode(',', isset($_GET['hidro_klasa_sume_3'])?$_GET['hidro_klasa_sume_3']:""));
     $nacin_koriscenja_sume_3=(explode(',', isset($_GET['nacin_koriscenja_sume_3'])?$_GET['nacin_koriscenja_sume_3']:""));
     $p73=isset($_GET['p73'])?$_GET['p73']:"";
     
     foreach($hidro_klasa_sume_3 as $value){  
         if($value[0] == 'A'){
            $CN_sume_3=$nacin_koriscenja_sume_3[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_sume_3=$nacin_koriscenja_sume_3[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_sume_3=$nacin_koriscenja_sume_3[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_sume_3=$nacin_koriscenja_sume_3[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     // end sume-----
     
    //selo
     $hidro_klasa_selo=(explode(',', isset($_GET['hidro_klasa_selo'])?$_GET['hidro_klasa_selo']:""));
     $nacin_koriscenja_selo=(explode(',', isset($_GET['nacin_koriscenja_selo'])?$_GET['nacin_koriscenja_selo']:""));
     $p8=isset($_GET['p8'])?$_GET['p8']:"";
     
     foreach($hidro_klasa_selo as $value){  
         if($value[0] == 'A'){
            $CN_selo=$nacin_koriscenja_selo[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_selo=$nacin_koriscenja_selo[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_selo=$nacin_koriscenja_selo[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_selo=$nacin_koriscenja_selo[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
    //putevi zemljani
     $hidro_klasa_put_zemljani=(explode(',', isset($_GET['hidro_klasa_put_zemljani'])?$_GET['hidro_klasa_put_zemljani']:""));
     $nacin_koriscenja_put_zemljani=(explode(',', isset($_GET['nacin_koriscenja_put_zemljani'])?$_GET['nacin_koriscenja_put_zemljani']:""));
     $p9=isset($_GET['p9'])?$_GET['p9']:"";
     
     foreach($hidro_klasa_put_zemljani as $value){  
         if($value[0] == 'A'){
            $CN_put_zemljani=$nacin_koriscenja_put_zemljani[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_put_zemljani=$nacin_koriscenja_put_zemljani[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_put_zemljani=$nacin_koriscenja_put_zemljani[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_put_zemljani=$nacin_koriscenja_put_zemljani[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     //putevi tvrdi
     $hidro_klasa_put_tvrdi=(explode(',', isset($_GET['hidro_klasa_put_tvrdi'])?$_GET['hidro_klasa_put_tvrdi']:""));
     $nacin_koriscenja_put_tvrdi=(explode(',', isset($_GET['nacin_koriscenja_put_tvrdi'])?$_GET['nacin_koriscenja_put_tvrdi']:""));
     $p10=isset($_GET['p10'])?$_GET['p10']:"";
     
     foreach($hidro_klasa_put_tvrdi as $value){  
         if($value[0] == 'A'){
            $CN_put_tvrdi=$nacin_koriscenja_put_tvrdi[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_put_tvrdi=$nacin_koriscenja_put_tvrdi[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_put_tvrdi=$nacin_koriscenja_put_tvrdi[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_put_tvrdi=$nacin_koriscenja_put_tvrdi[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     $CN=$CN_put_tvrdi*$p10+$CN_put_zemljani*$p9+$CN_selo*$p8+$CN_sume_3*$p73+$CN_sume_2*$p72+$CN_sume_1*$p71+$CN_livade*$p6+$CN_pasnjaci_3*$p53+$CN_pasnjaci_2*$p52+$CN_pasnjaci_1*$p51+$CN_mahunarke_3*$p43+$CN_mahunarke_2*$p42+$CN_mahunarke_1*$p41+$CN_zitarice_3*$p33+$CN_zitarice_2*$p32+$CN_zitarice_1*$p31+$CN_okopavine_3*$p23+$CN_okopavine_2*$p22+$CN_okopavine_1*$p21+$CN_ugar*$p1;
    //  var_dump($CN,$CN_put_tvrdi,$p10,$CN_put_zemljani,$p9,$CN_selo,$p8,$CN_sume,$p7,$CN_livade,$p6,$CN_pasnjaci,$p5,$CN_mahunarke,$p4,$CN_zitarice,$p3,$CN_okopavine,$p2,$CN_ugar,$p1);
    // var_dump($CN);
    $dao=new DAO();
    $getscs=$dao->getAllResultScs($id_user);
    if(!empty($getscs)){
        foreach($getscs as $value){
          if($value['ime']==$ime){
            $msg='Vec postoji ime sliva odaberite drugo ime';
            $showscs=1;
            include'../index.php';
          }else{
            $dao->insertScsCN($id_user,$ime,$L,$F,$CN,$CN_ugar,$p1,$CN_okopavine_1,$p21,$CN_okopavine_2,$p22,$CN_okopavine_3,$p23,$CN_zitarice_1,$p31,$CN_zitarice_2,$p32,$CN_zitarice_3,$p33,$CN_mahunarke_1,$p41,$CN_mahunarke_2,$p42,$CN_mahunarke_3,$p43,$CN_pasnjaci_1,$p51,$CN_pasnjaci_2,$p52,$CN_pasnjaci_3,$p53,$CN_livade,$p6,$CN_sume_1,$p71,$CN_sume_2,$p72,$CN_sume_3,$p73,$CN_selo,$p8,$CN_put_zemljani,$p9,$CN_put_tvrdi,$p10);
            $selectresult=1;
            include'../index.php'; 
            break;
          }  
        } 
    }else{
        $dao->insertScsCN($id_user,$ime,$L,$F,$CN,$CN_ugar,$p1,$CN_okopavine_1,$p21,$CN_okopavine_2,$p22,$CN_okopavine_3,$p23,$CN_zitarice_1,$p31,$CN_zitarice_2,$p32,$CN_zitarice_3,$p33,$CN_mahunarke_1,$p41,$CN_mahunarke_2,$p42,$CN_mahunarke_3,$p43,$CN_pasnjaci_1,$p51,$CN_pasnjaci_2,$p52,$CN_pasnjaci_3,$p53,$CN_livade,$p6,$CN_sume_1,$p71,$CN_sume_2,$p72,$CN_sume_3,$p73,$CN_selo,$p8,$CN_put_zemljani,$p9,$CN_put_tvrdi,$p10);
        $selectresult=1;
        include'../index.php'; 
    }
   }//end vrednostCN $Tkh, $a, $b, $c, $k, $Lc, $Iu, $Ap, $Bm, $H24h,$result
   public function showEditCN(){
    $id=isset($_GET['id'])?$_GET['id']:"";
    $edit_CN=1;
    include "../index.php";
   }
   
   //update CN---========
   
   public function updateEditCN(){
    $id=isset($_GET['id'])?$_GET['id']:"";
     $ime=isset($_GET['ime'])?$_GET['ime']:"";
     $L=isset($_GET['L'])?$_GET['L']:"";
     $F=isset($_GET['F'])?$_GET['F']:"";
     // ugar
     $hidro_klasa_ugar=(explode(',', isset($_GET['hidro_klasa_ugar'])?$_GET['hidro_klasa_ugar']:""));
     $nacin_koriscenja_ugar=(explode(',', isset($_GET['nacin_koriscenja_ugar'])?$_GET['nacin_koriscenja_ugar']:""));
     $p1=isset($_GET['p1'])?$_GET['p1']:"";
     
     foreach($hidro_klasa_ugar as $value){  
         if($value[0] == 'A'){
            $CN_ugar=$nacin_koriscenja_ugar[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_ugar=$nacin_koriscenja_ugar[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_ugar=$nacin_koriscenja_ugar[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_ugar=$nacin_koriscenja_ugar[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
    // var_dump($CN_ugar);
    
    //okopavine------------
    
     $hidro_klasa_okopavine_1=(explode(',', isset($_GET['hidro_klasa_okopavine_1'])?$_GET['hidro_klasa_okopavine_1']:""));
     $nacin_koriscenja_okopavine_1=(explode(',', isset($_GET['nacin_koriscenja_okopavine_1'])?$_GET['nacin_koriscenja_okopavine_1']:""));
     $p21=isset($_GET['p21'])?$_GET['p21']:"";
     
     foreach($hidro_klasa_okopavine_1 as $value){  
         if($value[0] == 'A'){
            $CN_okopavine_1=$nacin_koriscenja_okopavine_1[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_okopavine_1=$nacin_koriscenja_okopavine_1[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_okopavine_1=$nacin_koriscenja_okopavine_1[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_okopavine_1=$nacin_koriscenja_okopavine_1[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
       //-------
       
     $hidro_klasa_okopavine_2=(explode(',', isset($_GET['hidro_klasa_okopavine_2'])?$_GET['hidro_klasa_okopavine_2']:""));
     $nacin_koriscenja_okopavine_2=(explode(',', isset($_GET['nacin_koriscenja_okopavine_2'])?$_GET['nacin_koriscenja_okopavine_2']:""));
     $p22=isset($_GET['p22'])?$_GET['p22']:"";
     
     foreach($hidro_klasa_okopavine_2 as $value){  
         if($value[0] == 'A'){
            $CN_okopavine_2=$nacin_koriscenja_okopavine_2[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_okopavine_2=$nacin_koriscenja_okopavine_2[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_okopavine_2=$nacin_koriscenja_okopavine_2[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_okopavine_2=$nacin_koriscenja_okopavine_2[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     //-----
     $hidro_klasa_okopavine_3=(explode(',', isset($_GET['hidro_klasa_okopavine_3'])?$_GET['hidro_klasa_okopavine_3']:""));
     $nacin_koriscenja_okopavine_3=(explode(',', isset($_GET['nacin_koriscenja_okopavine_3'])?$_GET['nacin_koriscenja_okopavine_3']:""));
     $p23=isset($_GET['p23'])?$_GET['p23']:"";
     
     foreach($hidro_klasa_okopavine_3 as $value){  
         if($value[0] == 'A'){
            $CN_okopavine_3=$nacin_koriscenja_okopavine_3[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_okopavine_3=$nacin_koriscenja_okopavine_3[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_okopavine_3=$nacin_koriscenja_okopavine_3[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_okopavine_3=$nacin_koriscenja_okopavine_3[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     //-----
     //end okopavine--------------
     
    //zitarice-------------------
    
     $hidro_klasa_zitarice_1=(explode(',', isset($_GET['hidro_klasa_zitarice_1'])?$_GET['hidro_klasa_zitarice_1']:""));
     $nacin_koriscenja_zitarice_1=(explode(',', isset($_GET['nacin_koriscenja_zitarice_1'])?$_GET['nacin_koriscenja_zitarice_1']:""));
     $p31=isset($_GET['p31'])?$_GET['p31']:"";
     
     foreach($hidro_klasa_zitarice_1 as $value){  
         if($value[0] == 'A'){
            $CN_zitarice_1=$nacin_koriscenja_zitarice_1[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_zitarice_1=$nacin_koriscenja_zitarice_1[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_zitarice_1=$nacin_koriscenja_zitarice_1[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_zitarice_1=$nacin_koriscenja_zitarice_1[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //------
     
     $hidro_klasa_zitarice_2=(explode(',', isset($_GET['hidro_klasa_zitarice_2'])?$_GET['hidro_klasa_zitarice_2']:""));
     $nacin_koriscenja_zitarice_2=(explode(',', isset($_GET['nacin_koriscenja_zitarice_2'])?$_GET['nacin_koriscenja_zitarice_2']:""));
     $p32=isset($_GET['p32'])?$_GET['p32']:"";
     
     foreach($hidro_klasa_zitarice_2 as $value){  
         if($value[0] == 'A'){
            $CN_zitarice_2=$nacin_koriscenja_zitarice_2[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_zitarice_2=$nacin_koriscenja_zitarice_2[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_zitarice_2=$nacin_koriscenja_zitarice_2[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_zitarice_2=$nacin_koriscenja_zitarice_2[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     //-----
     $hidro_klasa_zitarice_3=(explode(',', isset($_GET['hidro_klasa_zitarice_3'])?$_GET['hidro_klasa_zitarice_3']:""));
     $nacin_koriscenja_zitarice_3=(explode(',', isset($_GET['nacin_koriscenja_zitarice_3'])?$_GET['nacin_koriscenja_zitarice_3']:""));
     $p33=isset($_GET['p33'])?$_GET['p33']:"";
     
     foreach($hidro_klasa_zitarice_3 as $value){  
         if($value[0] == 'A'){
            $CN_zitarice_3=$nacin_koriscenja_zitarice_3[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_zitarice_3=$nacin_koriscenja_zitarice_3[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_zitarice_3=$nacin_koriscenja_zitarice_3[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_zitarice_3=$nacin_koriscenja_zitarice_3[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     // end zitarice-------
     
     //mahunarke
     
     $hidro_klasa_mahunarke_1=(explode(',', isset($_GET['hidro_klasa_mahunarke_1'])?$_GET['hidro_klasa_mahunarke_1']:""));
     $nacin_koriscenja_mahunarke_1=(explode(',', isset($_GET['nacin_koriscenja_mahunarke_1'])?$_GET['nacin_koriscenja_mahunarke_1']:""));
     $p41=isset($_GET['p41'])?$_GET['p41']:"";
     
     foreach($hidro_klasa_mahunarke_1 as $value){  
         if($value[0] == 'A'){
            $CN_mahunarke_1=$nacin_koriscenja_mahunarke_1[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_mahunarke_1=$nacin_koriscenja_mahunarke_1[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_mahunarke_1=$nacin_koriscenja_mahunarke_1[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_mahunarke_1=$nacin_koriscenja_mahunarke_1[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //-----
     
     $hidro_klasa_mahunarke_2=(explode(',', isset($_GET['hidro_klasa_mahunarke_2'])?$_GET['hidro_klasa_mahunarke_2']:""));
     $nacin_koriscenja_mahunarke_2=(explode(',', isset($_GET['nacin_koriscenja_mahunarke_2'])?$_GET['nacin_koriscenja_mahunarke_2']:""));
     $p42=isset($_GET['p42'])?$_GET['p42']:"";
     
     foreach($hidro_klasa_mahunarke_2 as $value){  
         if($value[0] == 'A'){
            $CN_mahunarke_2=$nacin_koriscenja_mahunarke_2[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_mahunarke_2=$nacin_koriscenja_mahunarke_2[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_mahunarke_2=$nacin_koriscenja_mahunarke_2[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_mahunarke_2=$nacin_koriscenja_mahunarke_2[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //--------
     
     $hidro_klasa_mahunarke_3=(explode(',', isset($_GET['hidro_klasa_mahunarke_3'])?$_GET['hidro_klasa_mahunarke_3']:""));
     $nacin_koriscenja_mahunarke_3=(explode(',', isset($_GET['nacin_koriscenja_mahunarke_3'])?$_GET['nacin_koriscenja_mahunarke_3']:""));
     $p43=isset($_GET['p43'])?$_GET['p43']:"";
     
     foreach($hidro_klasa_mahunarke_3 as $value){  
         if($value[0] == 'A'){
            $CN_mahunarke_3=$nacin_koriscenja_mahunarke_3[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_mahunarke_3=$nacin_koriscenja_mahunarke_3[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_mahunarke_3=$nacin_koriscenja_mahunarke_3[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_mahunarke_3=$nacin_koriscenja_mahunarke_3[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     //end mahunarke-------
     
     //pasnjaci
     
     $hidro_klasa_pasnjaci_1=(explode(',', isset($_GET['hidro_klasa_pasnjaci_1'])?$_GET['hidro_klasa_pasnjaci_1']:""));
     $nacin_koriscenja_pasnjaci_1=(explode(',', isset($_GET['nacin_koriscenja_pasnjaci_1'])?$_GET['nacin_koriscenja_pasnjaci_1']:""));
     $p51=isset($_GET['p51'])?$_GET['p51']:"";
     
     foreach($hidro_klasa_pasnjaci_1 as $value){  
         if($value[0] == 'A'){
            $CN_pasnjaci_1=$nacin_koriscenja_pasnjaci_1[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_pasnjaci_1=$nacin_koriscenja_pasnjaci_1[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_pasnjaci_1=$nacin_koriscenja_pasnjaci_1[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_pasnjaci_1=$nacin_koriscenja_pasnjaci_1[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //------
     
     $hidro_klasa_pasnjaci_2=(explode(',', isset($_GET['hidro_klasa_pasnjaci_2'])?$_GET['hidro_klasa_pasnjaci_2']:""));
     $nacin_koriscenja_pasnjaci_2=(explode(',', isset($_GET['nacin_koriscenja_pasnjaci_2'])?$_GET['nacin_koriscenja_pasnjaci_2']:""));
     $p52=isset($_GET['p52'])?$_GET['p52']:"";
     
     foreach($hidro_klasa_pasnjaci_2 as $value){  
         if($value[0] == 'A'){
            $CN_pasnjaci_2=$nacin_koriscenja_pasnjaci_2[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_pasnjaci_2=$nacin_koriscenja_pasnjaci_2[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_pasnjaci_2=$nacin_koriscenja_pasnjaci_2[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_pasnjaci_2=$nacin_koriscenja_pasnjaci_2[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //------
     
     $hidro_klasa_pasnjaci_3=(explode(',', isset($_GET['hidro_klasa_pasnjaci_3'])?$_GET['hidro_klasa_pasnjaci_3']:""));
     $nacin_koriscenja_pasnjaci_3=(explode(',', isset($_GET['nacin_koriscenja_pasnjaci_3'])?$_GET['nacin_koriscenja_pasnjaci_3']:""));
     $p53=isset($_GET['p53'])?$_GET['p53']:"";
     
     foreach($hidro_klasa_pasnjaci_3 as $value){  
         if($value[0] == 'A'){
            $CN_pasnjaci_3=$nacin_koriscenja_pasnjaci_3[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_pasnjaci_3=$nacin_koriscenja_pasnjaci_3[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_pasnjaci_3=$nacin_koriscenja_pasnjaci_3[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_pasnjaci_3=$nacin_koriscenja_pasnjaci_3[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     //end pasnjaci------
     
    //livade
    
     $hidro_klasa_livade=(explode(',', isset($_GET['hidro_klasa_livade'])?$_GET['hidro_klasa_livade']:""));
     $nacin_koriscenja_livade=(explode(',', isset($_GET['nacin_koriscenja_livade'])?$_GET['nacin_koriscenja_livade']:""));
     $p6=isset($_GET['p6'])?$_GET['p6']:"";
     
     foreach($hidro_klasa_livade as $value){  
         if($value[0] == 'A'){
            $CN_livade=$nacin_koriscenja_livade[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_livade=$nacin_koriscenja_livade[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_livade=$nacin_koriscenja_livade[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_livade=$nacin_koriscenja_livade[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //sume
     
     $hidro_klasa_sume_1=(explode(',', isset($_GET['hidro_klasa_sume_1'])?$_GET['hidro_klasa_sume_1']:""));
     $nacin_koriscenja_sume_1=(explode(',', isset($_GET['nacin_koriscenja_sume_1'])?$_GET['nacin_koriscenja_sume_1']:""));
     $p71=isset($_GET['p71'])?$_GET['p71']:"";
     
     foreach($hidro_klasa_sume_1 as $value){  
         if($value[0] == 'A'){
            $CN_sume_1=$nacin_koriscenja_sume_1[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_sume_1=$nacin_koriscenja_sume_1[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_sume_1=$nacin_koriscenja_sume_1[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_sume_1=$nacin_koriscenja_sume_1[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //-----
     
     $hidro_klasa_sume_2=(explode(',', isset($_GET['hidro_klasa_sume_2'])?$_GET['hidro_klasa_sume_2']:""));
     $nacin_koriscenja_sume_2=(explode(',', isset($_GET['nacin_koriscenja_sume_2'])?$_GET['nacin_koriscenja_sume_2']:""));
     $p72=isset($_GET['p72'])?$_GET['p72']:"";
     
     foreach($hidro_klasa_sume_2 as $value){  
         if($value[0] == 'A'){
            $CN_sume_2=$nacin_koriscenja_sume_2[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_sume_2=$nacin_koriscenja_sume_2[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_sume_2=$nacin_koriscenja_sume_2[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_sume_2=$nacin_koriscenja_sume_2[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     //----
     
     $hidro_klasa_sume_3=(explode(',', isset($_GET['hidro_klasa_sume_3'])?$_GET['hidro_klasa_sume_3']:""));
     $nacin_koriscenja_sume_3=(explode(',', isset($_GET['nacin_koriscenja_sume_3'])?$_GET['nacin_koriscenja_sume_3']:""));
     $p73=isset($_GET['p73'])?$_GET['p73']:"";
     
     foreach($hidro_klasa_sume_3 as $value){  
         if($value[0] == 'A'){
            $CN_sume_3=$nacin_koriscenja_sume_3[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_sume_3=$nacin_koriscenja_sume_3[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_sume_3=$nacin_koriscenja_sume_3[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_sume_3=$nacin_koriscenja_sume_3[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     // end sume-----
     
    //selo
     $hidro_klasa_selo=(explode(',', isset($_GET['hidro_klasa_selo'])?$_GET['hidro_klasa_selo']:""));
     $nacin_koriscenja_selo=(explode(',', isset($_GET['nacin_koriscenja_selo'])?$_GET['nacin_koriscenja_selo']:""));
     $p8=isset($_GET['p8'])?$_GET['p8']:"";
     
     foreach($hidro_klasa_selo as $value){  
         if($value[0] == 'A'){
            $CN_selo=$nacin_koriscenja_selo[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_selo=$nacin_koriscenja_selo[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_selo=$nacin_koriscenja_selo[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_selo=$nacin_koriscenja_selo[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
    //putevi zemljani
     $hidro_klasa_put_zemljani=(explode(',', isset($_GET['hidro_klasa_put_zemljani'])?$_GET['hidro_klasa_put_zemljani']:""));
     $nacin_koriscenja_put_zemljani=(explode(',', isset($_GET['nacin_koriscenja_put_zemljani'])?$_GET['nacin_koriscenja_put_zemljani']:""));
     $p9=isset($_GET['p9'])?$_GET['p9']:"";
     
     foreach($hidro_klasa_put_zemljani as $value){  
         if($value[0] == 'A'){
            $CN_put_zemljani=$nacin_koriscenja_put_zemljani[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_put_zemljani=$nacin_koriscenja_put_zemljani[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_put_zemljani=$nacin_koriscenja_put_zemljani[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_put_zemljani=$nacin_koriscenja_put_zemljani[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     //putevi tvrdi
     $hidro_klasa_put_tvrdi=(explode(',', isset($_GET['hidro_klasa_put_tvrdi'])?$_GET['hidro_klasa_put_tvrdi']:""));
     $nacin_koriscenja_put_tvrdi=(explode(',', isset($_GET['nacin_koriscenja_put_tvrdi'])?$_GET['nacin_koriscenja_put_tvrdi']:""));
     $p10=isset($_GET['p10'])?$_GET['p10']:"";
     
     foreach($hidro_klasa_put_tvrdi as $value){  
         if($value[0] == 'A'){
            $CN_put_tvrdi=$nacin_koriscenja_put_tvrdi[0];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='B'){
            $CN_put_tvrdi=$nacin_koriscenja_put_tvrdi[1];
            // var_dump($CN_ugar);
             break;
         }elseif($value[0]=='C'){
            $CN_put_tvrdi=$nacin_koriscenja_put_tvrdi[2];
            // var_dump($CN_ugar);
            break;
         }elseif($value[0]=='D'){
            $CN_put_tvrdi=$nacin_koriscenja_put_tvrdi[3];
            // var_dump($CN_ugar);
            break; 
         }
     }
     
     $CN=$CN_put_tvrdi*$p10+$CN_put_zemljani*$p9+$CN_selo*$p8+$CN_sume_3*$p73+$CN_sume_2*$p72+$CN_sume_1*$p71+$CN_livade*$p6+$CN_pasnjaci_3*$p53+$CN_pasnjaci_2*$p52+$CN_pasnjaci_1*$p51+$CN_mahunarke_3*$p43+$CN_mahunarke_2*$p42+$CN_mahunarke_1*$p41+$CN_zitarice_3*$p33+$CN_zitarice_2*$p32+$CN_zitarice_1*$p31+$CN_okopavine_3*$p23+$CN_okopavine_2*$p22+$CN_okopavine_1*$p21+$CN_ugar*$p1;
    //  var_dump($CN,$CN_put_tvrdi,$p10,$CN_put_zemljani,$p9,$CN_selo,$p8,$CN_sume,$p7,$CN_livade,$p6,$CN_pasnjaci,$p5,$CN_mahunarke,$p4,$CN_zitarice,$p3,$CN_okopavine,$p2,$CN_ugar,$p1);
    // var_dump($CN);
    $dao=new DAO();
    // $getscs=$dao->getAllResultScs($id_user);
    // foreach($getscs as $value){
    //   if($value['ime']==$ime){
    //     $msg='Vec postoji ime sliva odaberite drugo ime';
    //     $showscs=1;
    //     include'../index.php';
    //   }else{
        $dao->updateCN($id,$ime,$L,$F,$CN,$CN_ugar,$p1,$CN_okopavine_1,$p21,$CN_okopavine_2,$p22,$CN_okopavine_3,$p23,$CN_zitarice_1,$p31,$CN_zitarice_2,$p32,$CN_zitarice_3,$p33,$CN_mahunarke_1,$p41,$CN_mahunarke_2,$p42,$CN_mahunarke_3,$p43,$CN_pasnjaci_1,$p51,$CN_pasnjaci_2,$p52,$CN_pasnjaci_3,$p53,$CN_livade,$p6,$CN_sume_1,$p71,$CN_sume_2,$p72,$CN_sume_3,$p73,$CN_selo,$p8,$CN_put_zemljani,$p9,$CN_put_tvrdi,$p10);
        $selectresult=1;
        include'../index.php'; 
        // break;
    //   }  
    // }   
       
       
   }//end updateCN
 public function uploadImage(){
  $id_user=isset($_POST['id_user'])?$_POST['id_user']:"";
  $ime_sliva=isset($_POST['ime_sliva'])?$_POST['ime_sliva']:"";
  $upload_img=isset($_POST['upload_img'])?$_POST['upload_img']:"";
  
  $errors=array();
  
    // $uploaddir ='C:/xampp/htdocs/oglasi/images/';
     $uploaddir='/home/estavela/scs/images/';  //obavezno " " za link
    if(isset($_FILES['upload_img']['name'])){      //Mora da se postavi uslov zbog toga sto se prilikom postavljanja forme ne ucitava odmah slika 
    //  var_dump($_FILES);
    $uploadfile = $uploaddir . basename($_FILES['upload_img']['name']);
    $upload_img = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
 
       if(isset($uploadfile)){
         $check = getimagesize($_FILES["upload_img"]['tmp_name']);

            if($check !== false){ 
                echo "File is an image - " . $check["mime"] . ".";            
            }else{
              $errors['upload_img']="Ovaj file nije slika.";
            }
       } 
        if (file_exists($uploadfile)) {  
        $errors['upload_img'] ="Izabrani file vec postoji." ;
        }
        if ($_FILES['upload_img']["size"] > 1000000) { 
        $errors['upload_img']="Max. velicina slike je 2.5 MB";
        }    
    }
    
  if(count($errors)==0){
      
    if(isset($uploadfile)){
    if($upload_img !='jpg' && $upload_img !='png' && $upload_img !='jpeg' && $upload_img !='gif' ) {
     
       $errors['upload_img'] ="Slika mora bit u formatima .jpg,.jpeg,.png,.gif";
    }
    
        if(move_uploaded_file($_FILES ["upload_img"]['tmp_name'],$uploadfile)) {

        echo "The file ". basename( $_FILES['upload_img']['name']). " has been uploaded.";

        }else{
        $errors['upload_img'] = "Sorry, there was an error uploading your file.";
        }
    }
    if(isset($_FILES['upload_img']['name'])){
          $img=(array_column($_FILES,'name'));
            
    }
    $image_name=$_FILES['upload_img']['name'];  
    // var_dump($image_name,$id_user);
    $dao=new DAO();
    $dao->insertImage($id_user,$ime_sliva,$image_name);
    $msg="Image has been uploaded.";
    include '../index.php';
    
  }else{
        $msg= "Molimo vas da odaberete drugu sliku";
        include '../index.php';
  }
  
 }//end uploadImage
 
 
 
 
 
 
 
 
   
}//end controller

?>