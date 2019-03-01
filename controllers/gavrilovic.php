<?php
class Gavrilovic{
  
    public function tempKoefT($t){
        $Tk=(($t/10)+0.1)**0.5;
        echo"Temperaturni koeficijent iznosi T= $Tk<br>";
    }
   
    public function koefRetenNanosa($O,$Nsr,$Nu,$Ls){

         $Ru=(($O*($Nsr-$Nu))**0.5)/(0.25*($Ls+10));
         echo"Koeficijent retencije nanosa Ru = $Ru <br>";
    }
    public function koefErozijeZ($y,$x,$a,$f,$Jsr){ 
      
       $Z=$y*$x*$a($f*($Jsr)**0.5);
          echo"Koeficije nt erozije Z= $Z <br>";

    }
    public function ukProNaUSlivu($t,$Hgod, $y, $x, $a, $f, $Jsr,$Fs){
    
      $Wgod=$this->tempKoefT($t)*$Hgod*pi()*(($this->koefErozijeZ($y, $x, $a, $f, $Jsr))**1.5)*$Fs;

      echo"Ukupna proizvodnja nanosa u slivu Wgod = $Wgod [m3/god]<br>";

    }
    public function godKolNaKoDospDoUsca($t, $Hgod, $y, $x, $a, $f, $Jsr, $Fs, $O, $Nsr, $Nu, $Ls){

        $Ggod=$this->ukProNaUSlivu($t, $Hgod, $y, $x, $a, $f, $Jsr, $Fs)*$this->koefRetenNanosa($O, $Nsr, $Nu, $Ls);

        echo"Godisnja kolicina nanosa koja dospeva do usca ili hidrometrijskog profila Ggod = $Ggod [m3/god]";

    }
    public function kolProdNanPoKmSliva($t, $Hgod, $y, $x, $a, $f, $Jsr,$O, $Nsr, $Nu, $Ls){

        $Ggodkm=$this->tempKoefT($t)*$Hgod*pi()* ($this->koefErozijeZ($y, $x, $a, $f, $Jsr)**1.5)*($this->koefRetenNanosa($O, $Nsr, $Nu, $Ls));

        echo"Ukupna kolicina produkcije nanosa po 1km2 povrsine sliva Ggodkm = $Ggodkm [m3/km2]";

    }

  








}//end class Gavrilovic
?>