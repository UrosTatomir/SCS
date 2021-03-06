<?php
require_once '../model/DAO.php';

  // Class Hidrogram extends Talas
class Hidrogram
{

    public function trKi($Tk)
    {    
        $result = [];
        foreach ($Tk as $value) {
            array_push($result, $value);   
        }
        return $result;
    }
    public function trKiH($Tk){
        $result=[];
        foreach($Tk as $value){
            $Tkh=$value/60;
            array_push($result,number_format($Tkh, 1, '.', ''));
        }
        return $result;
    }
    public function vKa($L, $Lc, $Iu)
    {  //vreme kasnjenja----
        $tp = 0.751 * ((($L * $Lc)/(sqrt($Iu)))**0.336);
            //   echo'vreme kasnjenja tp = '.$tp.'<br>';
        return $tp;
    }
    public function vPHi($Tk, $a, $L, $Lc, $Iu)  //vreme porasta hidrograma---
    {
        $result = [];
        foreach ($Tk as $value) {
            

            $Tph = (($value/60) / 2) + $this->vKa($L, $Lc, $Iu);
            array_push($result,$Tph);
	          // echo'vreme porasta hidrograma Tph ='.$Tph.'<br>';
        }
        return $result;
    }
    public function vOHi($Tk, $k, $a, $L, $Lc, $Iu) //vreme opdanja hidrograma  $Tr=k * Tph
    {
        $result = [];

        foreach ($Tk as $value) {
            
            $Tr = $k * ((($value/60) / 2) + $this->vKa($L, $Lc, $Iu));
	        array_push($result,$Tr);  
	          // echo'vreme opadanja hidrograma Tr = '.$Tr.'<br>';
        }
        return $result;
    }
    public function bazaHi($Tk, $k, $a, $L, $Lc, $Iu) {
    //baza hidrograma----//$Tb = $Tph + $Tr;//$Tb =($this->vOHi($Tk,$L,$Lc,$Iu)) + ($this->vPHi($Tk,$L,$Lc,$Iu));
        $result = [];
        foreach ($Tk as $value) {
            
            $Tb = ((($value/60) /2) + $this->vKa($L, $Lc, $Iu)) + ($k *((($value/60) / 2) + $this->vKa($L, $Lc, $Iu)));
		    array_push($result,$Tb);   
	           //echo'baza hidrograma Tb ='.$Tb.'<br>'; 
        }
        return $result;
    }
    public function mKiTr($Tk, $Ap, $b, $c, $Bm, $H24h){
         //merodavna kisa trajanja--//$Htp =(($a*$Tk)/1440)*(((1440*$A+1)/($A*$Tk+1))**0.82)*$H24h;	        
       
        $result = [];
        foreach ($Tk as $value) {
            
            $Htp = ($value / $b) * ((((1440 * $Ap) + 1) / (($value * $c) + 1)) ** $Bm) * $H24h;
            array_push($result,$Htp);
            
        }

        return $result;
    }
    public function defV($CN)  //deficit vlage----
    {
        $d = 25.4 * ((1000 / $CN) - 10);           
   //var_dump($d);
            //echo'deficit vlage d =  '. $d.' <br>'; //tacna formula

        return $d;
    }
    public function efPad($Tk, $Ap, $b, $c, $H24h, $Bm, $CN) //efektivne padavine---//$Pe =(($Htp-0.2*$d)**2)/($Htp+0.8*$d);
    {
        $result = [];
        foreach ($Tk as $value) {
            // array_push($result, $value / $b, $value * $c);

            $Pe = (((($value / $b) * ((((1440 * $Ap) + 1) / (($value * $c) + 1)) ** $Bm) * $H24h) - (0.2 * $this->defV($CN))) ** 2) / ((($value / $b) * ((((1440 * $Ap) + 1) / (($value * $c) + 1)) ** $Bm) * $H24h) + (0.8 * $this->defV($CN)));	       
            //   echo'efektivne padavine Pe = '.$Pe.'<br>'; //tacna formula
               
            array_push($result,$Pe);
            
        }
      
        return $result;
    }
    public function maxO($Tk, $F, $k, $a, $L, $Lc, $Iu) //max Ordinata-----//$q_max = (0.56 * $A)/$Tb;
    {
        $result = [];
        foreach ($Tk as $value) {
            
            $q_max = (0.56 * $F) / (((($value/60) / 2) + $this->vKa($L, $Lc, $Iu)) + ($k *((($value/60) / 2) + $this->vKa($L, $Lc, $Iu))));
            // echo 'q_max = ' . $q_max . '<br>';
            array_push($result, $q_max);
        }
        
        
        return $result;
    }
    public function maxP($Tk, $F, $Ap, $k, $a, $b, $c, $L, $Lc, $Iu, $H24h, $Bm, $CN)
    { //max proticaj----// $Qmax = $q_max * $Pe;
        $result = [];
        foreach ($Tk as $value) {		   	  	
		         
        $Qmax = ((0.56 * $F) / (((($value /60)/2) + $this->vKa($L, $Lc, $Iu)) + ($k*((($value / 60))/2 + $this->vKa($L, $Lc, $Iu))))) * (((($value / $b) * ((((1440 * $Ap) + 1) / (($value * $c) + 1)) ** $Bm) * $H24h) - (0.2 * $this->defV($CN))) ** 2) / ((($value / $b) * ((((1440 * $Ap) + 1) / (($value * $c) + 1)) ** $Bm) * $H24h) + (0.8 * $this->defV($CN)));

            array_push($result, $Qmax); 
        }
        
        //---max result u nizu 
        $n=0;
        $maxresult=max($result);
        foreach($result as $val){
            $n++;
            if($val==$maxresult){
                $n;
                session_start();
                $_SESSION['n']=$n;
                break;
            }
        }
        //------
        return $result;
    }
   
}//end class Hidrogram---

?>