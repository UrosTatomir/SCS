<?php
require_once '../model/DAO.php';

class Controller{

   public function showScs(){

     include 'showscs.php';

   }
   public function showGavrilovic(){

     include 'showgavrilovic.php';

   }
    public function showInsert(){

       include 'insertdata.php'; 
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

         include 'model_index.php';

      }else{
      
         $msg="Molimo vas da popunite formular ispravno.";
         include 'insertdata.php';
         
      }
    }//end function insertData----
    public function showResult(){

     include 'selectresult.php';
     
   }
   public function showInsertGavrilovic(){

      include 'insertdatagavrilovic.php';

   }
   public function insertDataGavrilovic(){

    $imesliva=isset($_GET['imesliva'])?$_GET['imesliva']:"";
    $Nsr=isset($_GET['Nsr'])?$_GET['Nsr']:"";
    $Jsr=isset($_GET['Jsr'])?$_GET['Jsr']:"";
    $t=isset($_GET['t'])?$_GET['t']:"";
    $Ls=isset($_GET['Ls'])?$_GET['Ls']:"";
    $O=isset($_GET['O'])?$_GET['O']:"";
    $Nu=isset($_GET['Nu'])?$_GET['Nu']:"";
    $Fs=isset ( $_GET['Fs'])?$_GET [ 'Fs']:"";
    $y=isset($_GET['y'])?$_GET['y']:"";
    $x=isset($_GET['x'])?$_GET['x']:"";
    $a=isset($_GET['a'])?$_GET['a']:"";
    $f=isset($_GET['f'])?$_GET['f']:"";
    $Hgod=isset($_GET['Hgod'])?$_GET['Hgod']:"";

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
    if(empty($y)){
       $errors['y']="Morate odabrati koeficijent Y";
    }
    if(empty($x)){
       $errors['x']="Morate odabrati koeficijent X";
    }
    if(empty($a)){
       $errors['a']="Morate odabrati koeficijent a";
    }
    if(empty($f)){
      $errors['f']="Morate odabrati koeficijent F"; 
    }
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

         include 'modelgavrilovic.php';
         
    }else{

       $msg= "Molimo vas da popunite formular ispravno.";

         include 'insertdatagavrilovic.php';
    }
      

   }//end function insertDataGavrilovic
}

?>