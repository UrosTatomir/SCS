<?php
require_once '../config/db.php';

class DAO{

   private $db;

   private $GETALLKOEFK="SELECT * FROM koefk ORDER BY k ASC";
   private $GETALLKOEFB="SELECT * FROM koefb ORDER BY Bm ASC";
   private $GETCN="SELECT * FROM CN ";
   private $HIDROLOSKAKLASA="SELECT * FROM tip_zemljista_ravnice_brezuljci";
   
   private $GETIMAGE="SELECT * FROM image WHERE id_user =? ORDER BY id_img DESC";
   
   private $INSERTIMAGE="INSERT INTO image(id_user,ime_sliva,image_name)VALUES(?,?,?)";
   
   private $INSERTSCS= "INSERT INTO scs(id_user,ime,Tkh,a,b,c,k,L,Lc,Iu,Ap,F,Bm,H24h,CN,Qmax,image_name) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

   private $SELECTRESULT="SELECT * FROM scs ORDER BY id DESC";
   
   private $SELECTRESULTBYUSER="SELECT * FROM scs WHERE id_user=? ORDER BY id DESC";

   private $GETALLKOEFY="SELECT * FROM koefy ORDER BY idy ASC ";

   private $GETALLKOEFXA="SELECT * FROM koefxa ORDER BY idx ASC ";

   private $GETALLKOEFF="SELECT * FROM koeff ORDER BY idf ASC ";

   private $INSERTGAVRILOVIC="INSERT INTO gavrilovic(id_user,imesliva,t,Hgod,y,y1, py1, y2, py2, y3, py3,xa,xa1, pxa1, xa2, pxa2, xa3, pxa3,f,f1,pf1,f2,pf2,f3,pf3,Jsr,Zk,Fs,O,Nsr,Nu,Ls,W,R,Gg,Ggkm,image_name)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

   private $CLEARALLDATA="DELETE FROM scs WHERE id_user=?";

   private $CLEARLASTDATA="DELETE FROM scs WHERE id_user=? ORDER BY id DESC limit 1";

   private $SELECTRESULTGAVRILOVIC="SELECT * FROM gavrilovic WHERE id_user=? ORDER BY idgav DESC";

   private $CLEARLASTDATAGAVRILOVIC="DELETE FROM gavrilovic WHERE id_user=? ORDER BY idgav DESC limit 1";

<<<<<<< HEAD
   private $CLEARALLDATAGAV="DELETE FROM gavrilovic WHERE id_user=?";
   
   private $GETALLUSERS="SELECT * FROM users";
    
   private $REGISTER = "INSERT INTO users(name,surname,username,email,password,admin) VALUES(?,?,?,?,?,?)";
     
   private $LOGIN ="SELECT * FROM users WHERE username = ? AND password = ?";
   
   private $GETALLRESULTSCS="SELECT * FROM scs WHERE id_user=? ORDER BY id DESC";
   
   private $GETALLRESULTGAVRILOVIC="SELECT * FROM gavrilovic WHERE id_user=? ORDER BY idgav DESC ";
   
   private $DELETERESULTSCS="DELETE FROM scs WHERE id=?";
   
   private $GETLASTRESULTSCS="SELECT * FROM scs WHERE id_user=? ORDER BY id DESC limit 1";
   
   private $GETRESULTSCS="SELECT * FROM scs WHERE id=?";
   
   private $DELETERESULTGAV="DELETE FROM gavrilovic WHERE idgav=? ";
   
   private $GETRESULTGAV="SELECT * FROM gavrilovic WHERE idgav=? ";
   
   private $UPDATEGAVID="UPDATE gavrilovic SET imesliva=?,t=?, Hgod=?, y=?,y1=?, py1=?, y2=?, py2=?, y3=?, py3=?, xa=?,xa1=?, pxa1=?, xa2=?, pxa2=?, xa3=?, pxa3=?, f=?,f1=?,pf1=?,f2=?,pf2=?,f3=?,pf3=?, Jsr=?, Zk=?, Fs=?, O=?, Nsr=?, Nu=?, Ls=?, W=?, R=?, Gg=?, Ggkm=?, image_name=? WHERE idgav=?";
   
   private $INSERTSCSCN="INSERT INTO scs(id_user,ime,L,F,CN,CN_ugar,p1,CN_okopavine_1,p21,CN_okopavine_2,p22,CN_okopavine_3,p23,CN_zitarice_1,p31,CN_zitarice_2,p32,CN_zitarice_3,p33,CN_mahunarke_1,p41,CN_mahunarke_2,p42,CN_mahunarke_3,p43,CN_pasnjaci_1,p51,CN_pasnjaci_2,p52,CN_pasnjaci_3,p53,CN_livade,p6,CN_sume_1,p71,CN_sume_2,p72,CN_sume_3,p73,CN_selo,p8,CN_put_zemljani,p9,CN_put_tvrdi,p10)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
   
   //$id_user,$ime,$L,$F,$CN,$CN_ugar,$p1,$CN_okopavine_1,$p21,$CN_okopavine_2,$p22,$CN_okopavine_3,$p23,$CN_zitarice_1,$p31,$CN_zitarice_2,$p32,$CN_zitarice_3,$p33,$CN_mahunarke_1,$p41,$CN_mahunarke_2,$p42,$CN_mahunarke_3,$p43,$CN_pasnjaci_1,$p51,$CN_pasnjaci_2,$p52,$CN_pasnjaci_3,$p53,$CN_livade,$p6,$CN_sume_1,$p71,$CN_sume_2,$p72,$CN_sume_3,$p73,$CN_selo,$p8,$CN_put_zemljani,$p9,$CN_put_tvrdi,$p10
   private $UPDATESCSID="UPDATE scs SET ime=?,Tkh=?, a=?, b=?, c=?, k=?, L=?, Lc=?, Iu=?, Ap=?, F=?, Bm=?, H24h=?, CN=?, Qmax=?, image_name=? WHERE id=?";
   
   private $UPDATECN="UPDATE scs SET ime=?,L=?,F=?,CN=?,CN_ugar=?,p1=?,CN_okopavine_1=?,p21=?,CN_okopavine_2=?,p22=?,CN_okopavine_3=?,p23=?,CN_zitarice_1=?,p31=?,CN_zitarice_2=?,p32=?,CN_zitarice_3=?,p33=?,CN_mahunarke_1=?,p41=?,CN_mahunarke_2=?,p42=?,CN_mahunarke_3=?,p43=?,CN_pasnjaci_1=?,p51=?,CN_pasnjaci_2=?,p52=?,CN_pasnjaci_3=?,p53=?,CN_livade=?,p6=?,CN_sume_1=?,p71=?,CN_sume_2=?,p72=?,CN_sume_3=?,p73=?,CN_selo=?,p8=?,CN_put_zemljani=?,p9=?,CN_put_tvrdi=?,p10=?  WHERE id=?";
  
=======
   private $SELECTRESULTGAVRILOVIC="SELECT * FROM gavrilovic ORDER BY idgav ASC";

   private $CLEARLASTDATAGAVRILOVIC="DELETE FROM gavrilovic ORDER BY idgav DESC limit 1";

   private $CLEARALLDATAGAV="DELETE FROM gavrilovic";

>>>>>>> 6525f9a11d9645b090759bb9d0d8f0e10712b7ac
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
       public function getCN(){
         $statement=$this->db->prepare($this->GETCN);
         $statement->execute();
         $result=$statement->fetchAll();
         return $result;
      }
      public function getHidroloskaKlasa(){
         $statement=$this->db->prepare($this->HIDROLOSKAKLASA);
         $statement->execute();
         $result=$statement->fetchAll();
         return $result;
      }
      public function insertImage($id_user,$ime_sliva,$image_name){
         $statement=$this->db->prepare($this->INSERTIMAGE);
         $statement->bindValue(1,$id_user);
         $statement->bindValue(2,$ime_sliva);
         $statement->bindValue(3, $image_name);
         $statement->execute();
      }
      public function getImageId($id_user){
         $statement=$this->db->prepare($this->GETIMAGE);
         $statement->bindValue(1,$id_user);
         $statement->execute();
         $result=$statement->fetchAll();
         return $result;
      }
      public function insertScs($id_user,$ime,$Tkh,$a,$b ,$c,$k,$L,$Lc,$Iu,$Ap,$F,$Bm,$H24h,$CN,$result,$image_name){
         $statement=$this->db->prepare($this->INSERTSCS);
         $statement->bindValue(1,$id_user);
         $statement->bindValue(2,$ime);
         $statement->bindValue(3, $Tkh);
         $statement->bindValue(4, $a);
         $statement->bindValue(5, $b);
         $statement->bindValue(6, $c);
         $statement->bindValue(7, $k);
         $statement->bindValue(8, $L);
         $statement->bindValue(9, $Lc);
         $statement->bindValue(10, $Iu);
         $statement->bindValue(11, $Ap);
         $statement->bindValue(12, $F);
         $statement->bindValue(13, $Bm);
         $statement->bindValue(14, $H24h);
         $statement->bindValue(15, $CN);
         $statement->bindValue(16, max($result));
         $statement->bindValue(17, $image_name);
         $statement->execute();

      }
      public function selectResult(){
      $statement=$this->db->prepare($this->SELECTRESULT);
      $statement->execute();
      $result=$statement->fetchAll();
      return $result;
      }
      public function selectResultByUser($id_user){
      $statement=$this->db->prepare($this->SELECTRESULTBYUSER);
      $statement->bindValue(1,$id_user);
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
   public function insertGavrilovic($id_user,$imesliva,$t, $Hgod, $y,$y1, $py1, $y2, $py2, $y3, $py3, $xa,$xa1, $pxa1, $xa2, $pxa2, $xa3, $pxa3, $f, $f1, $pf1, $f2, $pf2, $f3, $pf3, $Jsr,$Zk, $Fs, $O, $Nsr, $Nu, $Ls, $W, $R, $Gg, $Ggkm,$image_name) {
     
     $statement=$this->db->prepare($this->INSERTGAVRILOVIC);
      $statement->bindValue(1,$id_user); 
      $statement->bindValue(2,$imesliva); 
      $statement->bindValue(3,$t); 
      $statement->bindValue(4, $Hgod);
      $statement->bindValue(5, $y);
      $statement->bindValue(6, $y1);
      $statement->bindValue(7, $py1);
      $statement->bindValue(8, $y2);
      $statement->bindValue(9, $py2);
      $statement->bindValue(10, $y3);
      $statement->bindValue(11, $py3);
      $statement->bindValue(12, $xa);
      $statement->bindValue(13, $xa1);
      $statement->bindValue(14, $pxa1);
      $statement->bindValue(15, $xa2);
      $statement->bindValue(16, $pxa2);
      $statement->bindValue(17, $xa3);
      $statement->bindValue(18, $pxa3);
      $statement->bindValue(19, $f);
      $statement->bindValue(20, $f1);
      $statement->bindValue(21, $pf1);
      $statement->bindValue(22, $f2);
      $statement->bindValue(23, $pf2);
      $statement->bindValue(24, $f3);
      $statement->bindValue(25, $pf3);
      $statement->bindValue(26,$Jsr);
      $statement->bindValue(27, $Zk);
      $statement->bindValue(28, $Fs);
      $statement->bindValue(29, $O);
      $statement->bindValue(30, $Nsr);
      $statement->bindValue(31, $Nu);
      $statement->bindValue(32, $Ls);
      $statement->bindValue(33, $W);
      $statement->bindValue(34, $R);
      $statement->bindValue(35, $Gg);
      $statement->bindValue(36, $Ggkm);
      $statement->bindValue(37, $image_name);
      $statement->execute();

      }
   public function clearAllData($id_user)
   {
      $statement = $this->db->prepare($this->CLEARALLDATA);
      $statement->bindValue(1,$id_user);
      $statement->execute();
      
   }
   public function clearLastData($id_user)
   {
      $statement = $this->db->prepare($this->CLEARLASTDATA);
      $statement->bindValue(1,$id_user); 
      $statement->execute();
      
   }
<<<<<<< HEAD
   public function selectGavrilovicResult($id_user){
      $statement=$this->db->prepare($this->SELECTRESULTGAVRILOVIC);
      $statement->bindValue(1,$id_user); 
=======
   public function selectGavrilovicResult(){
      $statement=$this->db->prepare($this->SELECTRESULTGAVRILOVIC);
>>>>>>> 6525f9a11d9645b090759bb9d0d8f0e10712b7ac
      $statement->execute();
      $result=$statement->fetchAll();
      return $result;
   }
<<<<<<< HEAD
   public function clearLastDataGavrilovic($id_user)
   {
      $statement = $this->db->prepare($this->CLEARLASTDATAGAVRILOVIC);
      $statement->bindValue(1,$id_user);
      $statement->execute();   
   }
   public function clearAllDataGav($id_user)
   {
      $statement = $this->db->prepare($this->CLEARALLDATAGAV);
      $statement->bindValue(1,$id_user);
      $statement->execute();
      
   }
   public function getAllUsers(){
  
        $statement=$this->db->prepare($this->GETALLUSERS);
        $statement->execute();
        $result= $statement->fetchAll();
        return $result;
    }
    public function register($name,$surname ,$username,$email,$password,$admin) {
        $statement = $this->db->prepare($this->REGISTER);
        $statement->bindValue(1,$name);
        $statement->bindValue(2,$surname);
        $statement->bindValue(3,$username);
        $statement->bindValue(4,$email);
        $statement->bindValue(5,$password);
        $statement->bindValue(6,$admin);
        $statement->execute();
       
       
    }
     public function login($username,$password){
        $statement=$this->db->prepare($this->LOGIN);
        $statement->bindValue(1,$username);
        $statement->bindValue(2,$password);
        $statement->execute();
        $result=$statement->fetch() ;
        return $result;
    }
    public function getAllResultScs($id_user){
      $statement=$this->db->prepare($this->GETALLRESULTSCS);
      $statement->bindValue(1,$id_user);
      $statement->execute();
      $result=$statement->fetchAll();
      return $result;
    }
    public function getAllGavrilovicResult($id_user){
      $statement=$this->db->prepare($this->GETALLRESULTGAVRILOVIC);
      $statement->bindValue(1,$id_user);
      $statement->execute();
      $result=$statement->fetchAll();
      return $result;
    }
    public function deleteResultSCS($id){
      $statement = $this->db->prepare($this->DELETERESULTSCS);
      $statement->bindValue(1,$id); 
      $statement->execute();
      
   }
   public function getLastResultScs($id_user){
      $statement=$this->db->prepare($this->GETLASTRESULTSCS);
      $statement->bindValue(1,$id_user);
      $statement->execute();
      $result=$statement->fetchAll();
      return $result;
    }
    public function getResultScs($id){
      $statement=$this->db->prepare($this->GETRESULTSCS);
      $statement->bindValue(1,$id);
      $statement->execute();
      $result=$statement->fetchAll();
      return $result;
    }
    public function clearIdGav($idgav){
      $statement = $this->db->prepare($this->DELETERESULTGAV);
      $statement->bindValue(1,$idgav); 
      $statement->execute();  
   }
   public function editIdGavrilovic($idgav){
      $statement=$this->db->prepare($this->GETRESULTGAV);
      $statement->bindValue(1,$idgav);
      $statement->execute();
      $result=$statement->fetchAll();
      return $result;
   }
   public function updateGavrilovic($imesliva,$t, $Hgod, $y,$y1, $py1, $y2, $py2, $y3, $py3, $xa, $xa1, $pxa1, $xa2, $pxa2, $xa3, $pxa3, $f, $f1, $pf1, $f2, $pf2, $f3, $pf3, $Jsr, $Zk, $Fs, $O, $Nsr, $Nu, $Ls, $W, $R, $Gg, $Ggkm,$image_name,$idgav) {
     
     $statement=$this->db->prepare($this->UPDATEGAVID);
      
      $statement->bindValue(1,$imesliva); 
      $statement->bindValue(2,$t); 
      $statement->bindValue(3, $Hgod);
      $statement->bindValue(4, $y);
      $statement->bindValue(5, $y1);
      $statement->bindValue(6, $py1);
      $statement->bindValue(7, $y2);
      $statement->bindValue(8, $py2);
      $statement->bindValue(9, $y3);
      $statement->bindValue(10, $py3);
      $statement->bindValue(11, $xa);
      $statement->bindValue(12, $xa1);
      $statement->bindValue(13, $pxa1);
      $statement->bindValue(14, $xa2);
      $statement->bindValue(15, $pxa2);
      $statement->bindValue(16, $xa3);
      $statement->bindValue(17, $pxa3);
      $statement->bindValue(18, $f);
      $statement->bindValue(19, $f1);
      $statement->bindValue(20, $pf1);
      $statement->bindValue(21, $f2);
      $statement->bindValue(22, $pf2);
      $statement->bindValue(23, $f3);
      $statement->bindValue(24, $pf3);
      $statement->bindValue(25, $Jsr);
      $statement->bindValue(26, $Zk);
      $statement->bindValue(27, $Fs);
      $statement->bindValue(28, $O);
      $statement->bindValue(29, $Nsr);
      $statement->bindValue(30, $Nu);
      $statement->bindValue(31, $Ls);
      $statement->bindValue(32, $W);
      $statement->bindValue(33, $R);
      $statement->bindValue(34, $Gg);
      $statement->bindValue(35, $Ggkm);
      $statement->bindValue(36, $image_name);
      $statement->bindValue(37,$idgav);
      $statement->execute();

    }
    public function insertScsCN($id_user,$ime,$L,$F,$CN,$CN_ugar,$p1,$CN_okopavine_1,$p21,$CN_okopavine_2,$p22,$CN_okopavine_3,$p23,$CN_zitarice_1,$p31,$CN_zitarice_2,$p32,$CN_zitarice_3,$p33,$CN_mahunarke_1,$p41,$CN_mahunarke_2,$p42,$CN_mahunarke_3,$p43,$CN_pasnjaci_1,$p51,$CN_pasnjaci_2,$p52,$CN_pasnjaci_3,$p53,$CN_livade,$p6,$CN_sume_1,$p71,$CN_sume_2,$p72,$CN_sume_3,$p73,$CN_selo,$p8,$CN_put_zemljani,$p9,$CN_put_tvrdi,$p10){
         $statement=$this->db->prepare($this->INSERTSCSCN);
         $statement->bindValue(1,$id_user);
         $statement->bindValue(2,$ime);
         $statement->bindValue(3, $L);
         $statement->bindValue(4, $F);
         $statement->bindValue(5, $CN);
         $statement->bindValue(6, $CN_ugar);
         $statement->bindValue(7, $p1);
         $statement->bindValue(8, $CN_okopavine_1);
         $statement->bindValue(9, $p21);
         $statement->bindValue(10, $CN_okopavine_2);
         $statement->bindValue(11, $p22);
         $statement->bindValue(12, $CN_okopavine_3);
         $statement->bindValue(13, $p23);
         $statement->bindValue(14, $CN_zitarice_1);
         $statement->bindValue(15, $p31);
         $statement->bindValue(16, $CN_zitarice_2);
         $statement->bindValue(17, $p32);
         $statement->bindValue(18, $CN_zitarice_3);
         $statement->bindValue(19, $p33);
         $statement->bindValue(20, $CN_mahunarke_1);
         $statement->bindValue(21, $p41);
         $statement->bindValue(22, $CN_mahunarke_2);
         $statement->bindValue(23, $p42);
         $statement->bindValue(24, $CN_mahunarke_3);
         $statement->bindValue(25, $p43);
         $statement->bindValue(26, $CN_pasnjaci_1);
         $statement->bindValue(27, $p51);
         $statement->bindValue(28, $CN_pasnjaci_2);
         $statement->bindValue(29, $p52);
         $statement->bindValue(30, $CN_pasnjaci_3);
         $statement->bindValue(31, $p53);
         $statement->bindValue(32, $CN_livade);
         $statement->bindValue(33, $p6);
         $statement->bindValue(34, $CN_sume_1);
         $statement->bindValue(35, $p71);
         $statement->bindValue(36, $CN_sume_2);
         $statement->bindValue(37, $p72);
         $statement->bindValue(38, $CN_sume_3);
         $statement->bindValue(39, $p73);
         $statement->bindValue(40, $CN_selo);
         $statement->bindValue(41, $p8);
         $statement->bindValue(42, $CN_put_zemljani);
         $statement->bindValue(43, $p9);
         $statement->bindValue(44, $CN_put_tvrdi);
         $statement->bindValue(45, $p10);
         $statement->execute();
      }
      public function updateScsId( $id,$ime,$Tkh, $a, $b, $c, $k, $L, $Lc, $Iu, $Ap, $F, $Bm, $H24h, $CN, $result,$image_name){
         $statement=$this->db->prepare($this->UPDATESCSID);
         $statement->bindValue(1,$ime);
         $statement->bindValue(2, $Tkh);
         $statement->bindValue(3, $a);
         $statement->bindValue(4, $b);
         $statement->bindValue(5, $c);
         $statement->bindValue(6, $k);
         $statement->bindValue(7, $L);
         $statement->bindValue(8, $Lc);
         $statement->bindValue(9, $Iu);
         $statement->bindValue(10, $Ap);
         $statement->bindValue(11, $F);
         $statement->bindValue(12, $Bm);
         $statement->bindValue(13, $H24h);
         $statement->bindValue(14, $CN);
         $statement->bindValue(15, max($result));
         $statement->bindValue(16,$image_name);
         $statement->bindValue(17,$id);
         $statement->execute();  
          
      }
      public function updateCN($id,$ime,$L,$F,$CN,$CN_ugar,$p1,$CN_okopavine_1,$p21,$CN_okopavine_2,$p22,$CN_okopavine_3,$p23,$CN_zitarice_1,$p31,$CN_zitarice_2,$p32,$CN_zitarice_3,$p33,$CN_mahunarke_1,$p41,$CN_mahunarke_2,$p42,$CN_mahunarke_3,$p43,$CN_pasnjaci_1,$p51,$CN_pasnjaci_2,$p52,$CN_pasnjaci_3,$p53,$CN_livade,$p6,$CN_sume_1,$p71,$CN_sume_2,$p72,$CN_sume_3,$p73,$CN_selo,$p8,$CN_put_zemljani,$p9,$CN_put_tvrdi,$p10){
         $statement=$this->db->prepare($this->UPDATECN);
         $statement->bindValue(1,$ime);
         $statement->bindValue(2, $L);
         $statement->bindValue(3, $F);
         $statement->bindValue(4, $CN);
         $statement->bindValue(5, $CN_ugar);
         $statement->bindValue(6, $p1);
         $statement->bindValue(7, $CN_okopavine_1);
         $statement->bindValue(8, $p21);
         $statement->bindValue(9, $CN_okopavine_2);
         $statement->bindValue(10, $p22);
         $statement->bindValue(11, $CN_okopavine_3);
         $statement->bindValue(12, $p23);
         $statement->bindValue(13, $CN_zitarice_1);
         $statement->bindValue(14, $p31);
         $statement->bindValue(15, $CN_zitarice_2);
         $statement->bindValue(16, $p32);
         $statement->bindValue(17, $CN_zitarice_3);
         $statement->bindValue(18, $p33);
         $statement->bindValue(19, $CN_mahunarke_1);
         $statement->bindValue(20, $p41);
         $statement->bindValue(21, $CN_mahunarke_2);
         $statement->bindValue(22, $p42);
         $statement->bindValue(23, $CN_mahunarke_3);
         $statement->bindValue(24, $p43);
         $statement->bindValue(25, $CN_pasnjaci_1);
         $statement->bindValue(26, $p51);
         $statement->bindValue(27, $CN_pasnjaci_2);
         $statement->bindValue(28, $p52);
         $statement->bindValue(29, $CN_pasnjaci_3);
         $statement->bindValue(30, $p53);
         $statement->bindValue(31, $CN_livade);
         $statement->bindValue(32, $p6);
         $statement->bindValue(33, $CN_sume_1);
         $statement->bindValue(34, $p71);
         $statement->bindValue(35, $CN_sume_2);
         $statement->bindValue(36, $p72);
         $statement->bindValue(37, $CN_sume_3);
         $statement->bindValue(38, $p73);
         $statement->bindValue(39, $CN_selo);
         $statement->bindValue(40, $p8);
         $statement->bindValue(41, $CN_put_zemljani);
         $statement->bindValue(42, $p9);
         $statement->bindValue(43, $CN_put_tvrdi);
         $statement->bindValue(44, $p10);
         $statement->bindValue(45,$id);
         $statement->execute();
      }
    
=======
   public function clearLastDataGavrilovic()
   {
      $statement = $this->db->prepare($this->CLEARLASTDATAGAVRILOVIC);
      $statement->execute();   
   }
   public function clearAllDataGav()
   {
      $statement = $this->db->prepare($this->CLEARALLDATAGAV);
      $statement->execute();
      
   }

>>>>>>> 6525f9a11d9645b090759bb9d0d8f0e10712b7ac
    
   }//end classDAO
?>