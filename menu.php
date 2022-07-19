<?php
    function active($current_page) {
        $url_array =  explode('/index.php?navod=', $_SERVER['REQUEST_URI']);
        $url = end($url_array);
        $array_length = count($current_page);
        for ($i = 0; $i < $array_length; $i++) {
            if($current_page[$i] == $url) {
                echo 'active'; //class name in css 
            } 
        }
    }
?>

            <nav class="menuLeft">
                <ul id="rout">
                    <li><a data-submenu="sub" class=" head " href="index.php?navod=home"> HOME </a></li>
                    <li><a data-submenu="submreg" class=" dropdown-btn " onclick="return false;" href="index.php?navod=registracia">Registrácia, mužstvo, úlohy </a>
                        <ul class="sub submreg <?php active(explode(",", "registracia,pridelenie_muzstva,ulohy"))?>"> 
                            <li><a class="level1" href="index.php?navod=registracia">Registrácia </a></li>
                            <li><a class="level1" href="index.php?navod=pridelenie_muzstva">Pridelenie mužstva </a></li>
                            <li><a class="level1" href="index.php?navod=ulohy">Úlohy </a></li>
                        </ul>
                    </li>
                    <li><a data-submenu="sub" class=" drop " href="index.php?navod=system_hry">Systém hry </a></li>
                    <li><a data-submenu="submsys" class=" dropdown-btn " onclick="return false;" href="index.php?navod=system_ligy">Systém ligy, turnajov, reprezentácie </a>
                        <ul class="sub submsys <?php active(explode(",", "system_ligy,system_turnajov,system_repre"))?>">
                            <li><a class="level1" href="index.php?navod=system_ligy">Systém ligy </a></li>
                            <li><a class="level1" href="index.php?navod=system_turnajov">Systém turnajov</a></li>
                            <li><a class="level1" href="index.php?navod=system_repre">Systém reprezentácie</a></li>
                        </ul>
                    </li>
                    <li><a data-submenu="subminf" class=" dropdown-btn " onclick="return false;" href="index.php?navod=novinky_muzstve">Informácie o mužstve</a>
                        <ul class="sub subminf <?php active(explode(",", "novinky_muzstve,informacie_muzstve,pocet_hracov_muzstve,fanklub,nalada_muzstve,dovera_majitelov,zastup,kalendar,priatelsky_zapas,priatelsky_zapas_vyzvy"))?>">
                            <li><a class="level1" href="index.php?navod=novinky_muzstve">Novinky v mužstve</a></li>
                            <li><a class="level1" href="index.php?navod=informacie_muzstve">Detailné informácie o mužstve</a></li>
                            <li><a class="level1" href="index.php?navod=pocet_hracov_muzstve">Počet hráčov v mužstve</a></li>
                            <li><a class="level1" href="index.php?navod=fanklub">Počet členov fanklubu</a></li>
                            <li><a class="level1" href="index.php?navod=nalada_muzstve">Nálada v mužstve</a></li>
                            <li><a class="level1" href="index.php?navod=dovera_majitelov">Dôvera majiteľov</a></li>
                            <li><a class="level1" href="index.php?navod=zastup">Zástup</a></li>
                            <li><a class="level1" href="index.php?navod=kalendar">Kalendár</a></li>
                            <li><a class="level1" href="index.php?navod=priatelsky_zapas">Priateľský zápas</a></li>
                            <li><a class="level1" href="index.php?navod=priatelsky_zapas_vyzvy">Odoslanie výzvy na priateľský zápas</a></li>
                        </ul>
                    </li>
                    <li><a data-submenu="submplayer" class=" dropdown-btn " onclick="return false;" href="index.php?navod=zakladne_atributy">Hráči</a>
                        <ul class="sub  submplayer <?php active(explode(",", "zakladne_atributy,dalsie_atributy,statistiky,hviezdy,hviezda_tyzdna,klucovy_hrac,specialne_dresy,darovanie_dresu,zranenia_choroby,zivotnost_hracov"))?>">
                            <li><a class="level1" href="index.php?navod=zakladne_atributy">Základné atribúty</a></li>
                            <li><a class="level1" href="index.php?navod=dalsie_atributy">Ďalšie atribúty hráča</a></li>
                            <li><a class="level1" href="index.php?navod=statistiky">Štatistiky</a></li>
                            <li><a class="level1" href="index.php?navod=hviezdy">Hviezdy</a></li>
                            <li><a class="level1" href="index.php?navod=hviezda_tyzdna">Hviezda týždňa</a></li>
                            <li><a class="level1" href="index.php?navod=klucovy_hrac">Kľúčový hráč </a></li>
                            <li><a class="level1" href="index.php?navod=specialne_dresy">Špeciálne dresy hráčov</a></li>
                            <li><a class="level1" href="index.php?navod=darovanie_dresu">Darovanie dresu</a></li>
                            <li><a class="level1" href="index.php?navod=zranenia_choroby">Zranenia a choroby</a></li>
                            <li><a class="level1" href="index.php?navod=zivotnost_hracov">Životnosť hráčov </a></li>
                        </ul>
                    </li>
                    <li><a data-submenu="submfor" class=" dropdown-btn " onclick="return false;" href="index.php?navod=nastavenie_zostavy">Formácie a taktiky</a>
                        <ul class="sub  submfor <?php active(explode(",", "nastavenie_zostavy,specialne_formacie,najazdy,takticke_specializacie,takticke_moznosti,zohranost_formacie"))?>">
                            <li><a class="level1" href="index.php?navod=nastavenie_zostavy">Nastavenie zostavy (formácií) a náhradníkov</a></li>
                            <li><a class="level1" href="index.php?navod=specialne_formacie">Špec. formácie (PP / PK )</a></li>
                            <li><a class="level1" href="index.php?navod=najazdy">Nájazdy </a></li>
                            <li><a class="level1" href="index.php?navod=takticke_specializacie">Taktické špecializácie formácií </a></li>
                            <li><a class="level1" href="index.php?navod=takticke_moznosti">Taktické možnosti formácií </a></li>
                            <li><a class="level1" href="index.php?navod=zohranost_formacie">Zohranosť formácie</a></li>
                        </ul>
                    </li>
                    <li><a data-submenu="submmatch" class=" dropdown-btn " onclick="return false;" href="index.php?navod=cena_vstupenky">Nastavenie zápasu</a>
                        <ul class="sub  submmatch <?php active(explode(",", "cena_vstupenky,dolezitost_zapasu,motivacna_odmena,mierenie_strelby,rozdelenie_casu,pokrocile_taktiky,hra_telom,vypustanie_zapasov"))?>">
                            <li><a class="level1" href="index.php?navod=cena_vstupenky">Cena vstupenky </a></li>
                            <li><a class="level1" href="index.php?navod=dolezitost_zapasu">Dôležitosť zápasu </a></li>
                            <li><a class="level1" href="index.php?navod=motivacna_odmena">Motivačná odmena</a></li>
                            <li><a class="level1" href="index.php?navod=mierenie_strelby">Mierenie streľby</a></li>
                            <li><a class="level1" href="index.php?navod=rozdelenie_casu">Rozdelenie času na ľade </a></li>
                            <li><a class="level1" href="index.php?navod=pokrocile_taktiky">Pokročilé zápasové taktiky </a></li>
                            <li><a class="level1" href="index.php?navod=hra_telom">Hra telom </a></li>
                            <li><a class="level1" href="index.php?navod=vypustanie_zapasov">Vypúšťanie zápasov </a></li>
                        </ul>
                    </li>
                    <li><a data-submenu="submtrain" class=" dropdown-btn " onclick="return false;" href="index.php?navod=trening">Tréning, režimy, prospecty</a>
                        <ul class="sub  submtrain <?php active(explode(",", "trening,rezimy,klesanie_atributov_%,prospecty"))?>">
                            <li><a class="level1" href="index.php?navod=trening">Tréning </a></li>
                            <li><a class="level1" href="index.php?navod=rezimy">Režimy </a></li>
                            <li><a class="level1" href="index.php?navod=klesanie_atributov_%">Klesanie atribútov v % </a></li>
                            <li><a class="level1" href="index.php?navod=prospecty">Prospecty </a></li>
                        </ul>
                    </li>
                    <li><a data-submenu="submmarket" class=" dropdown-btn " onclick="return false;" href="index.php?navod=volni_hraci">Trh</a>
                        <ul class="sub  submmarket <?php active(explode(",", "volni_hraci,hraci_na_predaj,nechraneni_hraci,vyhladavanie,posledne_ponuky,porovnanie_hracov"))?>">
                            <li><a class="level1" href="index.php?navod=volni_hraci">Voľní chránení hráči</a></li>
                            <li><a class="level1" href="index.php?navod=hraci_na_predaj">Hráči na predaj</a></li>
                            <li><a class="level1" href="index.php?navod=nechraneni_hraci">Nechránení hráči</a></li>
                            <li><a class="level1" href="index.php?navod=vyhladavanie">Vyhľadávanie</a></li>
                            <li><a class="level1" href="index.php?navod=posledne_ponuky">Zoznam posledných ponúk</a></li>
                            <li><a class="level1" href="index.php?navod=porovnanie_hracov">Porovnanie hráčov</a></li>
                        </ul>
                    </li>
                    <li><a data-submenu="submstad" class=" dropdown-btn " onclick="return false;" href="index.php?navod=stadion">Štadión a zázemie</a>
                        <ul class="sub  submstad <?php active(explode(",", "stadion,zazemie,juniori,draft,informacie_op"))?>">
                            <li><a class="level1" href="index.php?navod=stadion">Štadión </a></li>
                            <li><a class="level1" href="index.php?navod=zazemie">Zázemie </a></li>
                            <li><a class="level1" href="index.php?navod=juniori">Juniorská prípravka – juniori </a></li>
                            <li><a class="level1" href="index.php?navod=draft">Draft </a></li>
                            <li><a class="level1" href="index.php?navod=informacie_op">Informácie z odd. prieskumu </a></li>
                        </ul>
                    </li>
                    <li><a data-submenu="submfinance" class=" dropdown-btn " onclick="return false;" href="index.php?navod=financie"> Financie</a>
                        <ul class="sub  submfinance <?php active(explode(",", "financie,hotovost,sponzor,odmeny,kseftovanie"))?>">
                            <li><a class="level1" href="index.php?navod=financie">Základné informácie </a></li>
                            <li><a class="level1" href="index.php?navod=hotovost">Hotovosť v hornej lište</a></li>
                            <li><a class="level1" href="index.php?navod=sponzor">Sponzor / reklamný partneri v lige </a></li>
                            <li><a class="level1" href="index.php?navod=odmeny">Odmeny </a></li>
                            <li><a class="level1" href="index.php?navod=kseftovanie">Kšeftovanie</a></li>
                        </ul>
                    </li>
                    <li><a data-submenu="submB" class=" dropdown-btn " onclick="return false;" href="index.php?navod=b_muzstvo"> B / U23 / Reprezentácia </a>
                        <ul class="sub  submB <?php active(explode(",", "b_muzstvo,u23_muzstvo,reprezentacia"))?>">
                            <li><a class="level1" href="index.php?navod=b_muzstvo">B mužstvo </a></li>
                            <li><a class="level1" href="index.php?navod=u23_muzstvo">U23 mužstvo </a></li>
                            <li><a class="level1" href="index.php?navod=reprezentacia">Reprezentácia </a></li>
                        </ul>
                    </li>
                    <li><a data-submenu="submother" class=" dropdown-btn " onclick="return false;" href="index.php?navod=narocnost_ligy">Rôzne</a>
                        <ul class="sub  submother <?php active(explode(",", "narocnost_ligy,nastavenie_zapasu,stavkova_kancelaria,posta,doplnky_(addons),skratky"))?>">
                            <li><a class="level1" href="index.php?navod=narocnost_ligy">Náročnosť ligy</a></li>
                            <li><a class="level1" href="index.php?navod=nastavenie_zapasu">Nastavenie názvu </a></li>
                            <li><a class="level1" href="index.php?navod=stavkova_kancelaria">Stávková kancelária </a></li>
                            <li><a class="level1" href="index.php?navod=posta">Pošta </a></li>
                            <li><a class="level1" href="index.php?navod=doplnky_(addons)">Doplnky pre HA (addons) </a></li>
                            <li><a class="level1" href="index.php?navod=skratky">Skratky</a></li>
                        </ul>
                    </li>
                    <li><a data-submenu="sub" class=" drop " href="index.php?navod=sponzorsky_balik">Sponzorský balík</a></li>
                    <li><a data-submenu="sub" class=" comments " href="index.php?navod=pripomienky_manazerov">Pripomienky manažérov</a></li>
                    <li><a data-submenu="sub" class=" hlp " href="https://www.hockeyarena.net/sk/index.php?p=helpers.inc">Zoznam _ HLP</a></li>
                    <li><a class="navstevnost" href="https://www.toplist.sk/stat/1273971/"><script language="JavaScript" type="text/javascript" charset="utf-8">
                            <!--
                            document.write('<img class="pocitadlo" src="https://toplist.sk/count.asp?id=1273971&logo=mc&http='+
                            encodeURIComponent(document.referrer)+'&t='+encodeURIComponent(document.title)+'&l='+encodeURIComponent(document.URL)+
                            '&wi='+encodeURIComponent(window.screen.width)+'&he='+encodeURIComponent(window.screen.height)+'&cd='+
                            encodeURIComponent(window.screen.colorDepth)+'" width="88" height="60" border=0 alt="TOPlist" />');
                            //--></script><noscript><img src="https://toplist.sk/count.asp?id=1273971&logo=mc&njs=1" border="0"
                            alt="TOPlist" width="88" height="60" /></noscript></a></li>
                </ul>
            </nav>