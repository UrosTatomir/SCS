<?php
require_once '../model/DAO.php';
class Gavrilovic{

 public function metodProracunaGavrilovic($imesliva,$t, $Hgod, $y, $x, $a, $f, $Jsr, $Fs, $O, $Nsr, $Nu, $Ls){ 
    
        $Tk=sqrt(($t/10)+0.1);

        echo"Temperaturni koeficijent iznosi Tk = $Tk<br><br>";
    
      
       $Zk=$y*$x*$a*($f*sqrt($Jsr));

          echo"Koeficijent erozije Z= $Zk <br><br>";
        
        
      $W=sqrt(($t/10)+0.1)*$Hgod*pi()*(($y*$x*$a*($f*sqrt($Jsr)))**1.5)*$Fs;
       

      echo"Ukupna proizvodnja nanosa u slivu Wgod = $W [m3/god]<br><br>";
    
      
       $R=(sqrt($O*($Nsr -$Nu)))/(0.25*($Ls +10)); 

          echo"Koeficijent retencije nanosa Ru = $R <br><br>";
    

        $Gg= ((sqrt(($t/10)+0.1))*$Hgod*pi()*(($y*$x*$a*($f*sqrt($Jsr)))**1.5)*$Fs)*((sqrt($O*($Nsr-$Nu)))/(0.25*($Ls+10)));

        echo"Godisnja kolicina nanosa koja dospeva do usca ili hidrometrijskog profila Ggod = $Gg [m3/god]<br><br>";

    
        $Ggkm=((sqrt(($t/10)+0.1))*$Hgod*pi()*(($y*$x*$a*($f*sqrt($Jsr)))**1.5))*((sqrt($O*($Nsr-$Nu)))/(0.25*($Ls+10)));

        echo"Ukupna kolicina produkcije nanosa po 1km2 povrsine sliva Ggodkm = $Ggkm [m3/km2]<br><br>";
        
      $dao= new DAO();
      $dao->insertGavrilovic($imesliva,$t, $Hgod, $y, $x, $a, $f, $Jsr, $Zk, $Fs, $O, $Nsr, $Nu, $Ls, $W, $R, $Gg, $Ggkm);
      echo"Uspesan unos podataka u bazu";
      
   
 }//end metodProracunaGavrilovic 

}//end class Gavrilovic
?>