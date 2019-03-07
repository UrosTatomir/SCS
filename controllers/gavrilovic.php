<?php
class Gavrilovic{
  
    public function tempKoefT($t){
        $Tk=sqrt(($t/10)+0.1);
        echo"Temperaturni koeficijent iznosi Tk = $Tk<br><br>";
    }
   
   
    public function koefErozijeZ($y,$x,$a,$f,$Jsr){ 
      
       $Z=$y*$x*$a*($f*sqrt($Jsr));
          echo"Koeficijent erozije Z= $Z <br><br>";

    }
    public function ukProNaUSlivu($t,$Hgod, $y, $x, $a, $f, $Jsr,$Fs){
        
      $Wgod=sqrt(($t/10)+0.1)*$Hgod*pi()*(($y*$x*$a*($f*sqrt($Jsr)))**1.5)*$Fs;
       

      echo"Ukupna proizvodnja nanosa u slivu Wgod = $Wgod [m3/god]<br><br>";
    }
    public function koefRetenNanosa($O,$Nsr,$Nu,$Ls){ 

      
       $Ru=(sqrt($O*($Nsr -$Nu)))/(0.25*($Ls +10)); 

          echo"Koeficijent retencije nanosa Ru = $Ru <br><br>";
    }
    public function godKolNaKoDospDoUsca($t, $Hgod, $y, $x, $a, $f, $Jsr, $Fs, $O, $Nsr, $Nu, $Ls){

        $Ggod= ((sqrt(($t/10)+0.1))*$Hgod*pi()*(($y*$x*$a*($f*sqrt($Jsr)))**1.5)*$Fs)*((sqrt($O*($Nsr-$Nu)))/(0.25*($Ls+10)));

        echo"Godisnja kolicina nanosa koja dospeva do usca ili hidrometrijskog profila Ggod = $Ggod [m3/god]<br><br>";

    }
    public function kolProdNanPoKmSliva($t, $Hgod, $y, $x, $a, $f, $Jsr,$O, $Nsr, $Nu, $Ls){

        $Ggodkm=((sqrt(($t/10)+0.1))*$Hgod*pi()*(($y*$x*$a*($f*sqrt($Jsr)))**1.5))*((sqrt($O*($Nsr-$Nu)))/(0.25*($Ls+10)));

        echo"Ukupna kolicina produkcije nanosa po 1km2 povrsine sliva Ggodkm = $Ggodkm [m3/km2]<br><br>";

    }

  








}//end class Gavrilovic
?>