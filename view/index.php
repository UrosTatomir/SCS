<?php
 include '../includes/header.php';
 include '../includes/nav.php';
?>
<div class="container">
  <div class="row justify-content-md-center shadow-lg p-3 mb-5  rounded" style="background-color: #FED502;"> <!--start row tag #FDE600-->
                       
        <div class="col col-2"> <!-- empty col -->

        </div> <!-- empty col -->
                       
        <div class="col-md-auto">
                
            <h1 class="text-center" style="font-family: cursive, sans-serif; font-size: 22px; color:#2A65CB;"><a href="routes.php?pagescs=showinsert">Proračun Maksimalnog Proticaja "Metoda SCS"</a></h1>
                 
        </div>                

        <div class="col col-2">
          <!-- <h3><a href="routes.php?pagescs=showinsert">Unos podataka potrebnih za proracun SCS</a></h3>       -->
        </div>
            
 </div> <!--end row tag-->         
           
 <div class="row">
        <h4>Maksimalni proticaj oderedjene verovatnoće primenom kombinovane metode</h4>
            <ul style="color:#06342D;">
            <li>SCS postupka za razdvajanje Pe padavina od ukupnih-bruto padavina Pbr</li>
            <li>Teorija sintetičkog jediničnog hidrograma za determinisanje vršne ordinate sintetičog jediničnog hidrograma qmax</li>
            </ul>
        <h5>Maksimalni proticaji na manjim slivnim površinama A < 1000 km2 su posledica kiša čije trajanje je kraće od 24h. </h5>
        <p>Zbog toga potrebno je maksimalnu dnevnu kišu svesti na merodavnu Htp, odnosno količinu padavina koja dovodi do pojave maksimalnog proticaja- model Jankovića(1994).Vrednosti "C" i "n" dobijene su na osnovu obrade hidrograma sa 93 bujična sliva u Srbiji  - autor Ristić Ratko, (2000).</p>
        <p>Postupak optimizacije metoda SCS napisana je u PHP jeziku.Metod i ulazni parametri "CN", "k", "B","C" i "n", određeni su na osnovu metodologije iz udžbenika - Hidrologija Bujičnih tokova autora Ristić Ratka i Dragana Maloševića</p>
	                    
            <div class="col-4">
                <p class="font-weight-bold font-italic">Unapred definisani koeficijenti - konstante:</p>
                <ul class="font-weight-bold">
                    <li>α = 1.0</li>
                    <li>A = 0.3</li>
                    <li>C = 0.75</li>
                    <li>n = 0.336</li>
                </ul>
            </div>
            <div class="col-4">
                <p class="font-weight-bold font-italic">Klasifikacija hidroloških tipova zemljišta</p>
                <table class="table table-sm">
                    <thead>
                        <tr>
                         <th scope="col">Tip zemljišta</th>
                         <th scope="col">Minimalan iznos infiltracije[mm/h]</th>                              
                        </tr>
                        <tr>
                            <th>A</th>
                            <th>7.62 - 11.4</th>
                        <tr>
                            <th>B</th>
                            <th>3.81 - 7.61</th>
                        </tr>
                        <tr>
                            <th>C</th>
                            <th>1.27 - 3.80</th>
                        </tr>
                        <tr>
                            <th>D</th>
                            <th>0.00 - 1.26</th>
                        </tr>
                    </thead>
                </table>	                	
            </div>
            <div class="col-4">
                <p class="font-weight-bold font-italic">Sintetički jedinični trougaoni hidrogram</p>
                <img src="../images/hidrogram.jpg"  width="300" />   
            </div>
  </div>
  <div class="row justify-content-md-center shadow-lg p-3 mb-5  rounded" style="background-color: #FED502;">
     <div class="col col-2"> <!-- empty col -->

     </div> <!-- empty col -->
                       
     <div class="col-md-auto">
                
            <h1 class="text-center" style="font-family: cursive, sans-serif; font-size: 22px; color:#2A65CB;"><a href="routes.php?pagescs=showinsertgavrilovic">Proračun vučenog i suspendovanog nanosa po metodi           prof.Gavrilovića</a></h1>
                 
     </div>                
     <div class="col col-2">
          <!-- <h3><a href="routes.php?pagescs=showinsert">Unos podataka potrebnih za proracun SCS</a></h3>       -->
     </div>

  </div>
  <div class="row">
     <div class="col-10">
        <h4>Ovom metodom obuhvaćene su sledeće celine </h4>
            <ul  style="color:#06342D;">
            <ol>Proračun količina nanosa (srednjegodišnji i sundni proticaji).</ol>
            <ol>Odredjivanje koeficijenta erozije Z</ol>
            <ol>Na osnovu višegodišnjeg istraživanja na terenu, u područjima Južne, Zapadne i Velike Morave, Ibra, Timoka i Vardara,</ol>
            <ol>a proverom određenih postavki u laboratoriji za bujice i eroziju Šumarskog fakulteta u Beogradu,</ol>
            <ol>prof.Gavrilović uspeo je da dobije analitički izraz za određivanje srednjegodišnjih zapremina nanosa,</ol>
            <ol>za prirodni sliv, deo sliva ili gravitaciono područje - odvojenu parcelu.</ol>
            <ol>Svi analitički obrasci u metodi prof.Gavrilovića, predstavljaju analitičke izraze za proračune količina nanosa po potencijalu erozije</ol>
            </ul>
       
         <h4 class="font-weight-bold font-italic">Vrednosti koeficijenta erozije Z</h4>
              <table class="table">
                <thead>
                </thead>
                 <tr>
                   <th scope="col">Kategorija razornosti</th>
                   <th scope="col">Jacina erozionih procesa u koritu i slivu</th>
                   <th scope="col">Tip vladajuce erozije</th>
                   <th scope="col">Koeficijent erozije "Z"</th>
                   <th scope="col">Srednja vrednost koeficijenta "Z"</th>
                 </tr>
                 <tr>
                   <th> I </th>
                   <th>Ekscesivna (preterana) erozija</th>
                   <th><ul>
                        <li>dubinska</li>
                        <li>mesovita</li>
                        <li>povrsinska</li>
                   </ul></th>
                   <th><ul>
                        <li>1,51 < vise</li>
                        <li>1,21 - 1,50</li>
                        <li>1,01 - 1,20</li>
                   </ul></th>
                   <th> 1,25 </th>
                 </tr>
                 <tr>
                    <th> II </th>
                   <th>Jaka erozija</th>
                   <th><ul>
                        <li>dubinska</li>
                        <li>mesovita</li>
                        <li>povrsinska</li>
                   </ul></th>
                   <th><ul>
                        <li>0,91 - 1,00</li>
                        <li>0,81 - 0,90</li>
                        <li>0,71 - 0,80</li>
                   </ul></th>
                   <th> 0,85 </th>
                 </tr>
                 <tr>
                    <th> III </th>
                   <th>Osrednja erozija</th>
                   <th><ul>
                        <li>dubinska</li>
                        <li>mesovita</li>
                        <li>povrsinska</li>
                   </ul></th>
                   <th><ul>
                        <li>0,61 - 0,70</li>
                        <li>0,51 - 0,60</li>
                        <li>0,41 - 0,50</li>
                   </ul></th>
                   <th> 0,55 </th>
                 </tr>
                 <tr>
                    <th> IV </th>
                   <th>Slaba erozija</th>
                   <th><ul>
                        <li>dubinska</li>
                        <li>mesovita</li>
                        <li>povrsinska</li>
                   </ul></th>
                   <th><ul>
                        <li>0,31 - 0,40</li>
                        <li>0,21 - 0,30</li>
                        <li>0,11 - 0,20</li>
                   </ul></th>
                   <th> 0,30 </th>
                 </tr>
                 <tr>
                    <th> V </th>
                   <th>Vrlo slaba erozija</th>
                   <th>tragovi erozije</th>
                   <th><ul>
                        <li>0,01 - 0,19</li>
                        <li> i manje</li>
                        
                   </ul></th>
                   <th> 0,10 </th>
                 </tr>
              </table>
        </div>
        <div class="col-4">
                	                	
          
                 
        </div>
    </div><!--end row-->
  
 </div><!--end container-->   
<?php
 include '../includes/footer.php';
?>