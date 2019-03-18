<?php
include '../includes/header.php';
include '../includes/nav.php';
?>
<div class="container mt-5 p-5">
    <div class="row justify-content-md-center shadow-lg p-3 mb-5  rounded" style="background-color: #FED502;">
        <!--start row tag #FDE600-->

        <div class="col col-2">
            <!-- empty col -->

        </div> <!-- empty col -->

        <div class="col-md-auto">

            <h1 class="text-center" style="font-family: cursive, sans-serif; font-size: 22px; color:#2A65CB;"><a href="routes.php?pagescs=showinsert">Ulazni podaci za proračun Maksimalnog Proticaja "Metoda SCS"</a></h1>

        </div>

        <div class="col col-2">
            <!-- <h3><a href="routes.php?pagescs=showinsert">Unos podataka potrebnih za proracun SCS</a></h3>       -->
        </div>

    </div>
    <!--end row tag-->

    <div class="row">
        <h4>Maksimalni proticaj oderedjene verovatnoće primenom kombinovane metode</h4>
        <ul style="color:#06342D;">
            <li>SCS postupka za razdvajanje Pe padavina od ukupnih-bruto padavina Pbr</li>
            <li>Teorija sintetičkog jediničnog hidrograma za determinisanje vršne ordinate sintetičog jediničnog hidrograma qmax</li>
        </ul>
        <h5>Maksimalni proticaji na manjim slivnim površinama A < 1000 km2 su posledica kiša čije trajanje je kraće od 24h. </h5> <p>Zbog toga potrebno je maksimalnu dnevnu kišu svesti na merodavnu Htp, odnosno količinu padavina koja dovodi do pojave maksimalnog proticaja- model Jankovića(1994).Vrednosti "C" i "n" dobijene su na osnovu obrade hidrograma sa 93 bujična sliva u Srbiji - autor Ristić Ratko, (2000).</p>
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
                    <img src="../images/hidrogram.jpg" width="300" />
                </div>
                
    </div> 
</div>
<?php include '../includes/footer1.php'; ?>