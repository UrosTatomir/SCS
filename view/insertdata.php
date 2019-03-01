<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>InsertData</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="main.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</head>
<body>
<?php
require_once '../model/DAO.php';
$dao=new DAO();
$koeficijentK=$dao->getAllKoefK();
$koeficijentB=$dao->getAllKoefB();

$msg=isset($msg)?$msg:"";
$errors=isset($errors)?$errors:array();
// var_dump($errors); 
?>
<div class="container">
 <div class="panel panel-login">
					
  <div class="panel-body">
	<div class="row">
     <div class="col-md-auto">
                             
    <h1 class="text-center" style="font-family: cursive, sans-serif; font-size: 26px; color:#2A65CB;">Proračun Maksimalnog Proticaja "Metoda SCS"</h1>
                            
     </div>
	 <div class="col-lg-12">
	 <form action="routes.php" id="scs-form" role="form" style="display: block;">
            <div class="form-group">
                Naziv rečnog sliva:<input type="text" name="ime" id="ime" tabindex="1" class="form-control" placeholder="name" required>
                <span style="color:red";><?php if(array_key_exists('ime',$errors)){
                 echo $errors['ime'];
                }  ?></span>
            </div>
            <div class="form-group">
                Merodavno vreme trajanja kiše npr.(10,11,13,14,15,16,...):<input type="text" name="Tkh" id="Tkh" tabindex="2" class="form-control" placeholder="Tkh" required>
                <span style="color:red";><?php if (array_key_exists('Tkh', $errors)) {
                 echo $errors['Tkh'];
                } ?></span>
            </div>
            <div class="form-group">
                Koeficijent oblika hidrograma k-(unos podataka celi broj ili x.y):
                <!-- <input type="number" name="k" step="any" id="k" tabindex="3" class="form-control" placeholder="k" required> -->
                <select type="number" name="k">
                <option value=""></option>
                <?php
                foreach($koeficijentK as $value){
                   echo"<option value='$value[k]'>$value[k]</option>";
                } 
                ?>
                </select>
                <span style="color:red";><?php if (array_key_exists('k', $errors)) {
                 echo $errors['k'];
                 } ?></span>
            </div>
            <div class="form-group">
                Dužina sliva po glavnom toku unos podataka (celi broj ili npr x.y):<input type="number"name="L" step="any"tabindex="4" class="form-control"id="L"placeholder="L" required>
                <span style="color:red";><?php if (array_key_exists('L', $errors)) {
                 echo $errors['L'];
                } ?></span>		
            </div>
            <div class="form-group">
                Rastojanje od težišta sliva do izlaznog profila (celi broj ili npr x.y):<input type="number"name="Lc" step="any"tabindex="5" class="form-control"id="Lc"placeholder="Lc" required>	<span style="color:red";><?php if (array_key_exists('Lc', $errors)) {
                 echo $errors['Lc'];
                } ?></span>	
            </div>
            <div class="form-group">
                Uravnati pad toka (celi broj ili npr x.y):<input type="number"name="Iu" step="any"tabindex="6" class="form-control"id="Iu"placeholder="Iu" required>	<span style="color:red";><?php if (array_key_exists('Iu', $errors)) {
                 echo $errors['Iu'];
                 } ?></span>	
            </div>
            <div class="form-group">
                Površina sliva (celi broj ili npr x.y):<input type="number"name="F" step="any"tabindex="7" class="form-control"id="F"placeholder="F" required>
                <span style="color:red";><?php if (array_key_exists('F', $errors)) {
                echo $errors['F'];
                } ?></span>		
            </div>
            <div class="form-group">
                Koeficijent B -dobija se na osnovu karte izolinija (celi broj ili npr x.y):
                <!-- <input type="number"name="Bm" step="any"tabindex="8" class="form-control"id="Bm"placeholder="B" required> -->
                <select type="number" name="Bm">
                <option value=""></option>
                <?php
                foreach ($koeficijentB as $value) {
                    echo "<option value='$value[Bm]'>$value[Bm]</option>";
                }
                ?>
                </select>
                <span style="color:red";><?php if (array_key_exists('Bm', $errors)) {
                 echo $errors['Bm'];
                } ?></span>		
            </div>
            <div class="form-group">
                Maksimalna dnevna kiša verovatnoće pojave 1% (celi broj ili npr x.y):<input type="number"name="H24h" step="any"tabindex="9" class="form-control"id="H24h"placeholder="H24h" required>
                <span style="color:red";><?php if (array_key_exists('H24h', $errors)) {
                echo $errors['H24h'];
                } ?></span>		
            </div>
            <div class="form-group">
                Broj krive oticaja (celi broj ili npr x.y):<input type="number"name="CN" step="any"tabindex="10" class="form-control"id="CN"placeholder="CN" required>	<span style="color:red";><?php if (array_key_exists('CN', $errors)) {
                echo $errors['CN'];
                } ?></span>	
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                <input type="submit" name="pagescs" id="result" tabindex="11" value="result" class="btn btn-login">
                </div>
              </div>
            </div>
            <?php echo"<span style=color:red;>$msg</span>"; ?>												
		</form>							
		</div>
	  </div>
	 </div>
	</div>
  </div>
    
</body>
</html>