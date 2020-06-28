<div class="container ">
    <nav aria-label="breadcrumb" class="col-md-4 offset-md-1">
      <ol class="breadcrumb bg-transparent font-weight-light">
        <li class="breadcrumb-item"><a href="https://estavela.in.rs">Estavela</a></li>
        <li class="breadcrumb-item"><a href="https://scs.estavela.in.rs">Home</a></li>
        
      </ol>
    </nav>
        <div class="col-sm-12">
        <div class="row">
             <div class="col-sm-6">
                <img src="https://estavela.in.rs/images/estavela_gis3.jpg" class="img-fluid" alt="gis-sliv"/>
                <h1 class="font-weight-bold" style="font-size:18px;"><a href="https://scs.estavela.in.rs/view/routes.php?pagescs=showinsert">Proracun maksimalnog proticaja odredjene verovatnoće primenom kombinovanog postupka SCS</a></h1>
                <a class="btn btn-sm btn-primary" href="https://scs.estavela.in.rs/view/routes.php?pagescs=showinsert">Start SCS</a>    
                    <ul style="list-style-type: none; padding: 0;">
                        <li>Maksimalni proticaj oderedjene verovatnoće primenom kombinovane metode</li>
                        <li>SCS postupka za razdvajanje Pe padavina od ukupnih-bruto padavina Pbr.</li>
                        <li>Teorija sintetičkog jediničnog hidrograma za determinisanje vršne ordinate sintetičog jediničnog hidrograma qmax</li>
                        <li>Maksimalni proticaji na manjim slivnim površinama A < 1000 km2 su posledica kiša čije trajanje je kraće od 24h.</li>
                        <li>Zbog toga potrebno je maksimalnu dnevnu kišu svesti na merodavnu Htp, odnosno količinu padavina koja dovodi do pojave maksimalnog proticaja- model Jankovića(1994).Vrednosti "C" i "n" dobijene su na osnovu obrade hidrograma sa 93 bujična sliva u Srbiji - autor Ristić Ratko, (2000).</li>
                        <li>Postupak optimizacije metoda SCS napisana je u PHP jeziku.Metod i ulazni parametri "CN", "k", "B","C" i "n", određeni su na osnovu metodologije iz udžbenika - Hidrologija Bujičnih tokova autora Ristić Ratka i Dragana Maloševića</li>
                    </ul>
                    <a class="btn btn-sm btn-primary" href="https://scs.estavela.in.rs/view/routes.php?pagescs=showinsert">Start SCS</a>
                    <p class="font-weight-bold font-italic">Unapred definisani koeficijenti - konstante:</p>
                        <ul class="font-weight-bold">
                            <li>α = 1.0</li>
                            <li>A = 0.3</li>
                            <li>C = 0.75</li>
                            <li>n = 0.336</li>
                        </ul>
                    <p class="font-weight-bold font-italic">Maksimalni proticaj [m3/sec]:</p>
                    <img src="https://scs.estavela.in.rs/images/Qmax.jpg" width="160" alt="Qmax"/>
                    <p class="font-weight-bold font-italic">Vreme kasnjenja [h]:</p>
                    <img src="https://scs.estavela.in.rs/images/tp.jpg" width="160" alt="vreme kasnjenja"/>
                    <p class="font-weight-bold font-italic">Vreme porasta hidrograma [h]:</p>
                    <img src="https://scs.estavela.in.rs/images/TpTk2.jpg" width="100" alt="vreme porasta hidrograma"/>
                    <p class="font-weight-bold font-italic">Merodavna kisa trajanja T [h]:</p>
                    <img src="https://scs.estavela.in.rs/images/Htp.jpg" width="240" alt="vreme porasta hidrograma"/>
                    <p class="font-weight-bold font-italic">Efektivna kisa [mm]:</p>
                    <img src="https://scs.estavela.in.rs/images/Pe.jpg" width="120" alt="Efektivna kisa"/>
                    <p class="font-weight-bold font-italic">Deficit vlage u zemljistu [mm]:</p>
                    <img src="https://scs.estavela.in.rs/images/d.jpg" width="140" alt="Deficit vlage u zemljistu"/>
                     <p class="font-weight-bold font-italic">Sintetički jedinični trougaoni hidrogram</p>
                    <img src="../images/hidrogram.jpg" class="img-fluid" />
                    <a class="btn btn-sm btn-primary" href="https://scs.estavela.in.rs/view/routes.php?pagescs=showinsert">Start SCS</a>
                     
             </div>
             <!--drugi red -->
             <div class="col-sm-6 bg-light">
                <h1 class="font-weight-bold" style="font-size:18px;"><a href="https://scs.estavela.in.rs/view/routes.php?pagescs=showinsertgavrilovic">Proracun (Odredjivanje) kolicina nanosa vodne erozije metoda prof.Gavrilovica </a></h1>
                <h1 class="btn btn-sm btn-primary"><a class="text-light" href="https://scs.estavela.in.rs/view/routes.php?pagescs=showinsertgavrilovic">Start Gavrilovic</a></h1>
                <ul style="list-style-type: none; padding: 0;">
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
                <h1 class="btn btn-sm btn-primary"><a class="text-light" href="https://scs.estavela.in.rs/view/routes.php?pagescs=showinsertgavrilovic">Start Gavrilovic</a></h1>
                <div class="table-responsive-sm">
                    <table class="table table-sm" style="font-size:12px;">
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
                <h1 class="btn btn-sm btn-primary"><a class="text-light" href="https://scs.estavela.in.rs/view/routes.php?pagescs=showinsertgavrilovic">Start Gavrilovic</a></h1>
                    <h1 style="font-size:16px;">Proracun maksimalnog proticaja primenom racionalnog metoda </h1>
                    <ul>
                        <li>na slivnoj povrsini sa tecenjem po padinama,</li>
                        <li>u hidrografskoj mrezi</li>
                   </ul> 
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
             <!-- end drugi red-->
        </div><!--end row-->
    </div>
</div><!--  container fluid-->