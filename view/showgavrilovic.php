
<?php 
session_start();
if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];

?>
    
    <div class="container-fluid">
        <div class="container  p-5">
        <nav aria-label="breadcrumb" class="col-md-6 offset-md-1">
          <ol class="breadcrumb bg-transparent font-weight-light">
            <li class="breadcrumb-item"><a href="https://estavela.in.rs">Estavela</a></li>
            <li class="breadcrumb-item"><a href="https://scs.estavela.in.rs">Home</a></li>
            <li class="breadcrumb-item"><a href="https://scs.estavela.in.rs/view/routes.php?pagescs=showscs">SCS Metoda</a></li>
            <li class="breadcrumb-item active">Gavrilovic metoda</li>
          </ol>
        </nav>
            
            <div class="row">
                <div class="col-10">
                    <h4>Ovom metodom obuhvaćene su sledeće celine </h4>
                    <ul style="color:#06342D; list-style-type: none; padding: 0;">
                        <ol>Proračun količina nanosa (srednjegodišnji i sundni proticaji).</ol>
                        <ol>Odredjivanje koeficijenta erozije Z</ol>
                        <ol>Na osnovu višegodišnjeg istraživanja na terenu, u područjima Južne, Zapadne i Velike Morave, Ibra, Timoka i Vardara,</ol>
                        <ol>a proverom određenih postavki u laboratoriji za bujice i eroziju Šumarskog fakulteta u Beogradu,</ol>
                        <ol>prof.Gavrilović uspeo je da dobije analitički izraz za određivanje srednjegodišnjih zapremina nanosa,</ol>
                        <ol>za prirodni sliv, deo sliva ili gravitaciono područje - odvojenu parcelu.</ol>
                        <ol>Svi analitički obrasci u metodi prof.Gavrilovića, predstavljaju analitičke izraze za proračune količina nanosa po potencijalu erozije</ol>
                    </ul>
                    <ul>
                        <li>Temperaturni koeficijent područja,   T = √((tº/10)+0,1)</li>
                        <li>Proracun Z koeficijenta erozije sliva, Z = y*x*a*(φ+√Jsr)</li>
                        <li>Koeficijent retencije nanosa,  Ru = (O*D)¼/(0,25(L+10.0)</li>
                        <li>Ukupna proizvodnja nanosa,  Wgod = T*Hgod.*π*√Z³*F</li>
                        <li>Ggod. = T*Hgod.*π*√Z³ * F * Ru</li>
                        <li>klasifikacija erozije po Z koef.</li>
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
                            <th>
                                <ul>
                                    <li>dubinska</li>
                                    <li>mesovita</li>
                                    <li>povrsinska</li>
                                </ul>
                            </th>
                            <th>
                                <ul>
                                    <li>1,51 < vise</li> <li>1,21 - 1,50</li>
                                    <li>1,01 - 1,20</li>
                                </ul>
                            </th>
                            <th> 1,25 </th>
                        </tr>
                        <tr>
                            <th> II </th>
                            <th>Jaka erozija</th>
                            <th>
                                <ul>
                                    <li>dubinska</li>
                                    <li>mesovita</li>
                                    <li>povrsinska</li>
                                </ul>
                            </th>
                            <th>
                                <ul>
                                    <li>0,91 - 1,00</li>
                                    <li>0,81 - 0,90</li>
                                    <li>0,71 - 0,80</li>
                                </ul>
                            </th>
                            <th> 0,85 </th>
                        </tr>
                        <tr>
                            <th> III </th>
                            <th>Osrednja erozija</th>
                            <th>
                                <ul>
                                    <li>dubinska</li>
                                    <li>mesovita</li>
                                    <li>povrsinska</li>
                                </ul>
                            </th>
                            <th>
                                <ul>
                                    <li>0,61 - 0,70</li>
                                    <li>0,51 - 0,60</li>
                                    <li>0,41 - 0,50</li>
                                </ul>
                            </th>
                            <th> 0,55 </th>
                        </tr>
                        <tr>
                            <th> IV </th>
                            <th>Slaba erozija</th>
                            <th>
                                <ul>
                                    <li>dubinska</li>
                                    <li>mesovita</li>
                                    <li>povrsinska</li>
                                </ul>
                            </th>
                            <th>
                                <ul>
                                    <li>0,31 - 0,40</li>
                                    <li>0,21 - 0,30</li>
                                    <li>0,11 - 0,20</li>
                                </ul>
                            </th>
                            <th> 0,30 </th>
                        </tr>
                        <tr>
                            <th> V </th>
                            <th>Vrlo slaba erozija</th>
                            <th>tragovi erozije</th>
                            <th>
                                <ul>
                                    <li>0,01 - 0,19</li>
                                    <li> i manje</li>

                                </ul>
                            </th>
                            <th> 0,10 </th>
                        </tr>
                    </table>
                </div>
                <div class="col-4">


                </div>
            </div>
            <!--end row-->
        </div>
    </div> <!-- end container fluid-->
<?php    
}else{
    
    include 'login.php';
}  
?>

