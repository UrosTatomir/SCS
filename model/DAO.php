<?php
require_once '../config/db.php';

class DAO{

   private $db;

   private $GETALLKOEFK="SELECT * FROM koefk ORDER BY k ASC";
   private $GETALLKOEFB="SELECT * FROM koefb ORDER BY Bm ASC";
   private $INSERTSCS= "INSERT INTO scs(ime,a,b,c,k,L,Lc,Iu,Ap,F,Bm,H24h,CN,Qmax) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

   private $SELECTRESULT="SELECT * FROM scs ORDER BY id DESC LIMIT 3";

   private $GETALLKOEFY="SELECT * FROM koefy ORDER BY idy ASC ";

   private $GETALLKOEFXA="SELECT * FROM koefxa ORDER BY idx ASC ";

   private $GETALLKOEFF="SELECT * FROM koeff ORDER BY idf ASC ";

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
      public function insertScs($ime,$a,$b ,$c,$k,$L,$Lc,$Iu,$Ap,$F,$Bm,$H24h,$CN,$r){
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
         $statement->bindValue(14, $r[0]);
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

    
   }//end classDAO
?>