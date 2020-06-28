<?php

require_once '../model/DAO.php';
class Editgav{

 public function editProracunaGavrilovic($idgav,$imesliva,$t, $Hgod, $y1, $py1, $y2, $py2, $y3, $py3, $xa1, $pxa1, $xa2, $pxa2, $xa3, $pxa3, $f1, $pf1, $f2, $pf2, $f3, $pf3, $Jsr, $Fs, $O, $Nsr, $Nu, $Ls,$image_name){ 
       //temperaturni koeficijent---
        $Tk=sqrt(($t/10)+0.1);

        echo"<h5 class='font-italic' style='font-size: 15px;'>Temperaturni koeficijent iznosi Tk = ".number_format($Tk, 2, '.', '')."</h5><br>";
  
    //--koeficijent erozije Z--- 
    
       $y=$y1*$py1+$y2*$py2+$y3*$py3;
       $xa=$xa1*$pxa1+$xa2*$pxa2+$xa3*$pxa3;
       $f=$f1*$pf1+$f2*$pf2+$f3*$pf3;
       
       echo"<h5 class='font-italic text-primary' style='font-size: 15px;'> Y , Xa, f,  Srednje vrednosti za dati sliv</h5>";
       echo"<h5 class='font-italic' style='font-size: 15px;'>Koeficijent Y = $y ,</h5>";
       echo"<h5 class='font-italic' style='font-size: 15px;'>Koeficijent Xa = $xa ,</h5>";
       echo"<h5 class='font-italic' style='font-size: 15px;'>Koeficijent f = $f  </h5><br>";
       
       $Zk=$y*$xa*($f+sqrt($Jsr));

       echo"<h5 class='font-italic text-primary' style='font-size: 16px;'>Koeficijent erozije Z= ".number_format($Zk, 2, '.', '')."</h5><br>";
       
       echo"<h6 class='font-italic ' style='font-size: 15px;'>Prema klasifikaciji po tabeli S.Gavrilovica, kategorija razornosti za dati sliv iznosi: </h6>";

          if($Zk >= 0.01 && $Zk <= 0.10){

             echo "<h6 class='font-italic text-primary' style='font-size: 15px;'>V kategorija razornosti ".number_format($Zk, 2, '.', '')." - vrlo slaba erozija tragovi erozije</h6><br>";

            }elseif($Zk >= 0.11 && $Zk <= 0.40){

               echo "<h6 class='font-italic text-primary' style='font-size: 15px;'>IV kategorija ".number_format($Zk, 2, '.', '')." - slaba erozija u vrednostima od:
                         <ul>
                            <li>dubinska 0.31-0.40</li>
                            <li>mesovita 0.21-0.30</li>
                            <li>povrsinska 0.11-0.20</li>
                        </ul></h6><br> ";
             }elseif($Zk >= 0.41 && $Zk <= 0.70){               
                 echo "<h6 class='font-italic text-primary' style='font-size: 15px;'>III kategorija ".number_format($Zk, 2, '.', '')." - osrednja erozija u vrednostima od:
                        <ul>
                            <li>dubinska 0.61-0.70</li>
                            <li>mesovita 0.51-0.60</li>
                            <li>povrsinska 0.41-0.50</li>
                        </ul></h6>";
               }elseif( $Zk >= 0.71 && $Zk <= 1.00){
              
                   echo "<h6 class='font-italic text-primary' style='font-size: 15px;'>II kategorija ".number_format($Zk, 2, '.', '')." - jaka erozija u vrednostima od:
                         <ul>
                            <li>dubinska 0.91-1.00</li>
                            <li>mesovita 0.81-0.90</li>
                            <li>povrsinska 0.71-0.80</li>
                        </ul></h6>";
                 }elseif( $Zk >= 1.01){ 
                   
                     echo "<h6 class='font-italic text-primary' style='font-size: 15px;'>I kategorija - ekscesivna preterana erozija u vrednostima od:
                         <ul>
                            <li>dubinska 1.21 i vise</li>
                            <li>mesovita 1.11-1.20</li>
                            <li>povrsinska 1.01-1.10</li>
                        </ul></h6>";
                 }else{
                   echo"<h6 class='font-italic text-danger' style='font-size: 15px;'>rezultat ne odgovara klasifikaciji</h6>";
                 }  
    //-Ukupna proizvodnja nanosa u slivu    
        
      $W=$Tk*$Hgod*pi()*(($Zk)**1.5)*$Fs;
       

      echo"<h6 class='font-italic' style='font-size: 15px;'>Ukupna proizvodnja nanosa u slivu Wgod = ".number_format($W, 2, '.', '')." [m3/god]</h6><br>";
    
    //---koeficijent retencije nanosa Ru 
       $R=(sqrt($O*($Nsr -$Nu)))/(0.25*($Ls +10)); 

          echo"<h6 class='font-italic' style='font-size: 15px;'>Koeficijent retencije nanosa Ru = ".number_format($R, 2, '.', '')." </h6><br>";
    
    //--Godisnja kolicina nanosa koja dospeva do usca ili hidrometrijskog profila 
        $Gg= $Tk*$Hgod*pi()*(($Zk)**1.5)*$Fs*$R;
        
        echo"<h6 class='font-italic' style='font-size: 15px;'>Godisnja kolicina nanosa koja dospeva do usca ili hidrometrijskog profila Ggod = ".number_format($Gg, 2, '.', '')." [m3/god]</h6><br>";

    //--Ukupna kolicina produkcije nanosa po 1km2 povrsine sliva
        $Ggkm=$Tk*$Hgod*pi()*(($Zk)**1.5)*$R;

        echo"<h6 class='font-italic' style='font-size: 15px;'>Ukupna kolicina produkcije nanosa po 1km2 povrsine sliva Ggodkm = ".number_format($Ggkm, 2, '.', '')." [m3/km2]</h6><br>";
    
      if($Ggkm>=4000 && $Ggkm<5000){
         echo'<h5 class=text-primary>I - Podrucje ekscesivne erozije - dubinskog tipa</h5>';  
      }elseif($Ggkm>=3000 && $Ggkm<=3999){
          echo'<h5 class=text-primary>I - Podrucje ekscesivne erozije - povrsinskog tipa</h5>'; 
      }elseif($Ggkm>=2000 && $Ggkm<=2999){
          echo'<h5 class=text-primary>II - Podrucje jake erozije - dubinskog tipa</h5>';   
      }elseif($Ggkm>=1500 && $Ggkm<=1999){
          echo'<h5 class=text-primary>II - Podrucje jake erozije - povrsinskog tipa</h5>'; 
      }elseif($Ggkm>=1200 && $Ggkm<=1499){
          echo'<h5 class=text-primary>III - Podrucje srednje erozije - dubinskog tipa</h5>'; 
      }elseif($Ggkm>=1000 && $Ggkm<=1199){
          echo'<h5 class=text-primary>III - Podrucje srednje erozije - povrsinskog tipa</h5>';
      }elseif($Ggkm>=500 && $Ggkm<=999){
          echo'<h5 class=text-primary>III - Podrucje slabe erozije</h5>';
      }elseif($Ggkm>=80 && $Ggkm<=499){
          echo'<h5 class=text-primary>III - Podrucje vrlo slabe erozije</h5>';
      }
      
    // var_dump($imesliva,$t, $Hgod, $y, $xa, $f, $Jsr, $Zk, $Fs, $O, $Nsr, $Nu, $Ls, $W, $R, $Gg, $Ggkm,$idgav);
    //Update u bazu    
      $dao= new DAO();
      $dao->updateGavrilovic($imesliva,$t, $Hgod, $y, $y1, $py1, $y2, $py2, $y3, $py3, $xa, $xa1, $pxa1, $xa2, $pxa2, $xa3, $pxa3, $f, $f1, $pf1, $f2, $pf2, $f3, $pf3, $Jsr, $Zk, $Fs, $O, $Nsr, $Nu, $Ls, $W, $R, $Gg, $Ggkm,$image_name,$idgav);
     
 }//end editProracunaGavrilovic 
 
 
}//end class Editgav
?>