<?php
include '../includes/header.php';
include '../includes/nav.php';
?>
<div class="container">
    <div class="row justify-content-md-center shadow-lg p-3 mb-5  rounded" style="background-color: #FED502;">
        <div class="col col-2">
            <!-- empty col -->

        </div> <!-- empty col -->

        <div class="col-md-auto">

            <h1 class="text-center" style="font-family: cursive, sans-serif; font-size: 22px; color:#2A65CB;"><a href="routes.php?pagescs=showinsertgavrilovic">Unos podataka za Proračuna vučenog i suspendovanog nanosa Metod prof.Gavrilovića</a></h1>

        </div>
        <div class="col col-2">
            <!-- <h3><a href="routes.php?pagescs=showinsert">Unos podataka potrebnih za proracun SCS</a></h3>       -->
        </div>

    </div>
    <div class="row">
        <div class="col-10">
            <h4>Ovom metodom obuhvaćene su sledeće celine </h4>
            <ul style="color:#06342D;">
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
<?php include '../includes/footer.php'; ?> 