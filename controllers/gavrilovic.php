<?php
require_once '../model/DAO.php';
class Gavrilovic{

 public function metodProracunaGavrilovic($imesliva,$t, $Hgod, $y, $x, $a, $f, $Jsr, $Fs, $O, $Nsr, $Nu, $Ls){ 
       //temperaturni koeficijent---
        $Tk=sqrt(($t/10)+0.1);

        echo"Temperaturni koeficijent iznosi Tk = $Tk<br><br>";
  
    //--koeficijent erozije Z---  
       $Zk=$y*$x*$a*($f*sqrt($Jsr));

          echo"Koeficijent erozije Z= $Zk <br><br>";

          if($Zk >= 0.01 & $Zk <= 0.10){

             echo "V kategorija razornosti $Zk - vrlo slaba erozija tragovi erozije<br><br>";

            }elseif($Zk >= 0.20 & $Zk <= 0.40){

               echo "IV kategorija $Zk - slaba erozija u vrednostima od:
                         <ul>
                            <li>dubinska 0.31-0.40</li>
                            <li>mesovita 0.21-0.30</li>
                            <li>povrsinska 0.11-0.20</li>
                        </ul><br><br> ";
             }elseif($Zk >= 0.41 & $Zk <= 0.70){               
                 echo "III kategorija $Zk - osrednja erozija u vrednostima od:
                        <ul>
                            <li>dubinska 0.61-0.70</li>
                            <li>mesovita 0.51-0.60</li>
                            <li>povrsinska 0.41-0.50</li>
                        </ul>";
               }elseif( $Zk >= 0.71 & $Zk <= 1.00){
              
                   echo "II kategorija $Zk - jaka erozija u vrednostima od:
                         <ul>
                            <li>dubinska 0.91-1.00</li>
                            <li>mesovita 0.81-0.90</li>
                            <li>povrsinska 0.71-0.80</li>
                        </ul><br><br>";
                 }elseif( $Zk >= 1.01){ 
                   
                     echo "I kategorija - ekscesivna preterana erozija u vrednostima od:
                         <ul>
                            <li>dubinska 1.21 i vise</li>
                            <li>mesovita 1.11-1.20</li>
                            <li>povrsinska 1.01-1.10</li>
                        </ul><br><br>";
                 }else{
                   echo"rezultat ne odgovara klasifikaciji<br><br>s";
                 }
                
               
            
        
       
    //-Ukupna proizvodnja nanosa u slivu    
        
      $W=sqrt(($t/10)+0.1)*$Hgod*pi()*(($y*$x*$a*($f*sqrt($Jsr)))**1.5)*$Fs;
       

      echo"Ukupna proizvodnja nanosa u slivu Wgod = $W [m3/god]<br><br>";
    
    //---koeficijent retencije nanosa Ru 
       $R=(sqrt($O*($Nsr -$Nu)))/(0.25*($Ls +10)); 

          echo"Koeficijent retencije nanosa Ru = $R <br><br>";
    
    //--Godisnja kolicina nanosa koja dospeva do usca ili hidrometrijskog profila 
        $Gg= ((sqrt(($t/10)+0.1))*$Hgod*pi()*(($y*$x*$a*($f*sqrt($Jsr)))**1.5)*$Fs)*((sqrt($O*($Nsr-$Nu)))/(0.25*($Ls+10)));

        echo"Godisnja kolicina nanosa koja dospeva do usca ili hidrometrijskog profila Ggod = $Gg [m3/god]<br><br>";

    //--Ukupna kolicina produkcije nanosa po 1km2 povrsine sliva
        $Ggkm=((sqrt(($t/10)+0.1))*$Hgod*pi()*(($y*$x*$a*($f*sqrt($Jsr)))**1.5))*((sqrt($O*($Nsr-$Nu)))/(0.25*($Ls+10)));

        echo"Ukupna kolicina produkcije nanosa po 1km2 povrsine sliva Ggodkm = $Ggkm [m3/km2]<br><br>";

    //Insert u bazu    
      $dao= new DAO();
      $dao->insertGavrilovic($imesliva,$t, $Hgod, $y, $x, $a, $f, $Jsr, $Zk, $Fs, $O, $Nsr, $Nu, $Ls, $W, $R, $Gg, $Ggkm);
      echo"Uspesan unos podataka u bazu";
      
   
 }//end metodProracunaGavrilovic 

}//end class Gavrilovic
?>