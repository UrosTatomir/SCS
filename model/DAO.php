<?php
require_once '../config/db.php';

class DAO{

   private $db;

   private $GETALLKOEFK="SELECT * FROM koefk ORDER BY k ASC";
   private $GETALLKOEFB="SELECT * FROM koefb ORDER BY Bm ASC";
   private $INSERTSCS= "INSERT INTO scs(ime,a,b,c,k,L,Lc,Iu,Ap,F,Bm,H24h,CN,Qmax) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

   private $SELECTRESULT="SELECT * FROM scs ORDER BY id ASC";

   private $GETALLKOEFY="SELECT * FROM koefy ORDER BY idy ASC ";

   private $GETALLKOEFXA="SELECT * FROM koefxa ORDER BY idx ASC ";

   private $GETALLKOEFF="SELECT * FROM koeff ORDER BY idf ASC ";

   private $INSERTGAVRILOVIC="INSERT INTO gavrilovic(imesliva,t,Hgod,y,x,a,f,Jsr,Zk,Fs,O,Nsr,Nu,Ls,W,R,Gg,Ggkm)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

   private $CLEARALLDATA="DELETE FROM scs";

   private $CLEARLASTDATA="DELETE FROM scs ORDER BY id DESC limit 1";

      public function __construct(){

         $this->db=DB::createInstance();

      }
      public function getAllKoefK(){
         $statement=$this->db->prepare($this->GETALLKOEFK);
         $statement->execute();
         $result=$statement->fetchAll();
         return $result;
      }
      public function getAllKoefB(){
         $statement=$this->db->prepare($this->GETALLKOEFB);
         $statement->execute();
         $result=$statement->fetchAll();
         return $result;
      }
      public function insertScs($ime,$a,$b ,$c,$k,$L,$Lc,$Iu,$Ap,$F,$Bm,$H24h,$CN,$result){
         $statement=$this->db->prepare($this->INSERTSCS);
         $statement->bindValue(1,$ime);
         $statement->bindValue(2, $a);
         $statement->bindValue(3, $b);
         $statement->bindValue(4, $c);
         $statement->bindValue(5, $k);
         $statement->bindValue(6, $L);
         $statement->bindValue(7, $Lc);
         $statement->bindValue(8, $Iu);
         $statement->bindValue(9, $Ap);
         $statement->bindValue(10, $F);
         $statement->bindValue(11, $Bm);
         $statement->bindValue(12, $H24h);
         $statement->bindValue(13, $CN);
         $statement->bindValue(14, max($result));
         $statement->execute();

      }
      public function selectResult(){
      $statement=$this->db->prepare($this->SELECTRESULT);
      $statement->execute();
      $result=$statement->fetchAll();
      return $result;
      }
      public function getAllKoefY(){
   
         $statement=$this ->db->prepare($this->GETALLKOEFY);
         $statement->execute();
         $result=$statement->fetchAll();
         return $result;
      }
      public function getAllKoefXA(){
         $statement=$this ->db->prepare($this->GETALLKOEFXA);
         $statement->execute();
         $result=$statement->fetchAll();
         return $result;
      }
      public function getAllKoefF(){
         $statement=$this ->db->prepare($this->GETALLKOEFF);
         $statement->execute();
         $result=$statement->fetchAll();
         return $result;
      }
   public function insertGavrilovic($imesliva,$t, $Hgod, $y, $x, $a, $f, $Jsr,$Zk, $Fs, $O, $Nsr, $Nu, $Ls, $W, $R, $Gg, $Ggkm) {
     
     $statement=$this->db->prepare($this->INSERTGAVRILOVIC);
      $statement->bindValue(1,$imesliva); 
      $statement->bindValue(2,$t); 
      $statement->bindValue(3, $Hgod);
      $statement->bindValue(4, $y);
      $statement->bindValue(5, $x);
      $statement->bindValue(6, $a);
      $statement->bindValue(7, $f);
      $statement->bindValue(8,$Jsr);
      $statement->bindValue(9, $Zk);
      $statement->bindValue(10, $Fs);
      $statement->bindValue(11, $O);
      $statement->bindValue(12, $Nsr);
      $statement->bindValue(13, $Nu);
      $statement->bindValue(14, $Ls);
      $statement->bindValue(15, $W);
      $statement->bindValue(16, $R);
      $statement->bindValue(17, $Gg);
      $statement->bindValue(18, $Ggkm);
      $statement->execute();

      }
   public function clearAllData()
   {
      $statement = $this->db->prepare($this->CLEARALLDATA);
      $statement->execute();
      
   }
   public function clearLastData()
   {
      $statement = $this->db->prepare($this->CLEARLASTDATA);
      $statement->execute();
      
   }
    
   }//end classDAO
?>