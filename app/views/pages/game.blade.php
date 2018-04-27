@extends('layouts.default')
@section('content')
<meta charset="UTF-8">
<div class="container container-inner game">
	<h3 class="title_">ROZPOZNAJ DŹWIĘK PTAKA</h3>
       <!-- <h3 class="title_">Score: <score></score></h3> !-->
        <div class="custom-text" id="custom-text"></div>
        <ul class="expanders">
            <p class="dispNone">Ekspander 3 0x24 szyna 1 0x00</p>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="srokaglos.mp3"
                   relayId="relay2"
                   expander="0x24 0x01 "
                   external="true"
                   pin="1">Odtwarzanie</a>
                <input type="hidden" value="Sroka z rodziny krukowatych jest powszechnie znanym ptakiem, występującym na niżu kraju. Na siedlisko szuka miejsc z raczej niską roślinnością - kępy krzewów to dla nich odpowiednie kryjówki; jest przy tym wszędobylska i łatwo adaptuje się do nowych warunków - od niedawna jest stałym mieszkańcem w miastach, nawet tych bardzo ruchliwych. Te towarzyskie ptaki skupiają się w liczne stada. W koronach drzew lub w krzaczastych zaroślach budują wyjątkowe gniazda opatrzone zadaszeniem z patyków. W kwestii pożywienia sroka nie jest wybredna - zjada owady, jaja ptaków, małe ssaki, ale też padlinę, nasiona i różne odpadki. Przez jej wrodzoną ciekawość i zbieranie błyszczących przedmiotów uważano srokę za złodziejkę.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="pleszkaglos.mp3"
                   relayId="relay2"
                   expander="0x24 0x01 "
                   external="true"
                   pin="1">Odtwarzanie</a>
                <input type="hidden" value="Pleszka, z rodziny muchołówkowatych, występuje na niżu kraju. Nie jest ona ptakiem licznym i pomimo jej barwnego upierzenia w terenie nie rzuca się w oczy. Zamieszkuje przede wszystkim obrzeża lasów liściastych i mieszanych, ale chętnie przebywa też w pobliżu osad ludzkich w zieleni miejskiej i wiejskiej. Gniazduje w obszernej dziupli lub w skrzynce lęgowej. Pleszki żywią się głównie owadami, które chwytają w locie lub zbierają z liści i ziemi, a jesienią zjadają też owoce. Migrują na duże odległości - zimują w Afryce Północnej.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="kopciuszekglos.mp3"
                   relayId="relay3"
                   expander="0x24 0x01 "
                   external="true"
                   pin="1">Odtwarzanie</a>
                <input type="hidden" value="Kopciuszek z rodziny drozdowatych to wędrowny ptak, występujący średnio licznie na całym obszarze kraju. Nazwa gatunku odnosi się do szarego ubarwienia u samic i ciemnoszarego - u samców; przez tę kolorystykę kopciuszek nazywany jest też kominiarczykiem.Przystosował się on świetnie się do życia mieście - zabudowa miejska stanowi dla niego namiastkę górskich terenów, na których pierwotnie gniazdował - występuje nawet w centrach wielkich miast, gdzie przy sztucznym oświetleniu jego głos rozbrzmiewa nawet w nocy. Dość rzadko jest za to spotykany na terenach wiejskich. Gniazda buduje z traw i korzonków w szczelinach skał lub budynków, pokarmu za to szuka na ziemi - zjada owady i inne bezkręgowce, jesienią również jagody.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="czyzykglos.mp3"
                   relayId="relay4"
                   expander="0x24 0x01 "
                   external="true"
                   pin="1">Odtwarzanie</a>
                <input type="hidden" value="Czyżyk, ptak z rodziny łuszczykowatych, dość licznie występuje w całym paśmie gór, a nielicznie w pozostałej części Polski. Zimuje w kraju. W okresie lęgowym przebywa w borach iglastych, swoje gniazdo buduje na wysokości do kilkunastu metrów, tak dobrze ukrywając je w gęstych gałązkach świerka lub jodły, że niezbyt wielu ornitologów miało okazję je zobaczyć. Nie zapuszcza się też na bezdrzewne tereny. Latem odżywia się zarówno nasionami, jak i owadami, a jesienią i zimą trzyma się w olszynach, gdyż jego pokarmem w tym okresie są głównie nasiona olchy. Czyżyki żerują zazwyczaj w stadkach, często się do siebie odzywając.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="szpakglos.mp3"
                   relayId="relay5"
                   expander="0x24 0x01 "
                   external="true"
                   pin="1">Odtwarzanie</a>
                <input type="hidden" value="Szpak pierwotnie był ptakiem typowo leśnym, ale przystosował się do życia w mieście i obecnie zasiedla pospolicie różne zadrzewienia - parki, ogrody i sady, w których podbiera z drzew wiśnie, czereśnie i śliwki. Poza tym zjada pokarm zwierzęcy, jak owady czy dżdżownice. Gniazdo zakłada w dziupli, skrzynce lęgowej lub w szczelinie budynku. To uzdolniony śpiewak - potrafi naśladować głosy innych ptaków, przeplatając je ze swoim śpiewem; przy częstym kontakcie z ludźmi, naśladuje też ludzki głos. Część ptaków zimuje w kraju, pozostałe wylatują na południe.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="strzyzykglos.mp3"
                   relayId="relay6"
                   expander="0x24 0x01 "
                   external="true"
                   pin="1">Odtwórz</a>
                <input type="hidden" value="Strzyżyk zwyczajny, o charakterystycznym zadartym ogonku, występuje na niżu kraju i jest jednym z naszych najmniejszych ptaków. Żyje w lasach liściastych i mieszanych z bujnym podszytem; choć nie jest ptakiem rzadkim, ciężko go zobaczyć - trzyma się gęstych zarośli, jest skryty i rzadko pokazuje się na otwartych miejscach. Mimo swych niewielkich rozmiarów śpiewa wyjątkowo donośnym głosem i buduje stosunkowo duże gniazdo o kulistym kształcie, ukryte nisko wśród gęstych gałęzi. Gdy szuka pokarmu - owadów i innych bezkręgowców - prześlizguje się pomiędzy krzewami jak mysz.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="pierwiosnekglos.mp3"
                   relayId="relay7"
                   expander="0x24 0x01 "
                   external="true"
                   pin="1">Odtwarzanie</a>
                <input type="hidden" value="Pierwiosnek z rodziny świstunek występuje licznie w całym kraju, zamieszkuąc różnego typu prześwietlone lasy i zadrzewienia. Ptak ten buduje kuliste gniazdo z otworem z boku, które ukrywa w gęstej roślinności nisko przy ziemi. Rozbrzmiewający wczesną wiosną śpiew pierwiosnka jest nie do pomylenia z żadnym innym ptakiem. Żeruje on, przemieszczając się pomiędzy krzewami i koronami drzew, choć nierzadko łapie owady również w locie; jesienią zajada też jagody. Krajowe pierwiosnki migrują na zimę w rejon śródziemnomorski i do Afryki.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="sikoraczarnoglowkaglos.mp3"
                   relayId="relay8"
                   expander="0x24 0x01 "
                   external="true"
                   pin="1">Odtwarzanie</a>
                <input type="hidden" value="Czarnogłówka z rodziny sikor występuje średnio licznie w całym kraju. Przeważnie jest to ptak osiadły i tylko w razie bardzo mroźnej zimy wylatuje na południe Europy, gdzie klimat jest łagodniejszy. Na siedliska wybiera miejsca wilgotne, zwłaszcza blisko wód, ale też lasy bagienne jak olsy. Co wyjątkowe u sikor, czarnogłówki wykuwają dziuple w wypróchniałym drzewie parami, gdyż wykucie i wysłanie dziupli wymaga od tych małych ptaków dużo wysiłku. Rzadko zlatują na ziemię - żerują w gęstej roślinności, stąd też trudno je zauważyć, a łatwiej usłyszeć. W okresie lęgowym zjadają owady, jednak jesienią w ich diecie dominują nasiona i drobne owoce.
				" class="text-to-append dispNone"/>
            </li>
        </ul>
<br><br>
        <ul class="expanders answers">
            <p class="dispNone">Ekspander 0x24 szyna 2</p>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="s.mp3"
                   answer="srokaglos.mp3"
                   pin="1">Sroka </a>
                <input type="hidden" value="Sroka z rodziny krukowatych jest powszechnie znanym ptakiem, występującym na niżu kraju. Na siedlisko szuka miejsc z raczej niską roślinnością - kępy krzewów to dla nich odpowiednie kryjówki; jest przy tym wszędobylska i łatwo adaptuje się do nowych warunków - od niedawna jest stałym mieszkańcem w miastach, nawet tych bardzo ruchliwych. Te towarzyskie ptaki skupiają się w liczne stada. W koronach drzew lub w krzaczastych zaroślach budują wyjątkowe gniazda opatrzone zadaszeniem z patyków. W kwestii pożywienia sroka nie jest wybredna - zjada owady, jaja ptaków, małe ssaki, ale też padlinę, nasiona i różne odpadki. Przez jej wrodzoną ciekawość i zbieranie błyszczących przedmiotów uważano srokę za złodziejkę.

				" class="text-to-append dispNone"/>
            </li>
			<br>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="pleszkaglos.mp3"
                   answer="pleszkaglos.mp3"
                   pin="1">pleszka </a>
                <input type="hidden" value="Pleszka, z rodziny muchołówkowatych, występuje na niżu kraju. Nie jest ona ptakiem licznym i pomimo jej barwnego upierzenia w terenie nie rzuca się w oczy. Zamieszkuje przede wszystkim obrzeża lasów liściastych i mieszanych, ale chętnie przebywa też w pobliżu osad ludzkich w zieleni miejskiej i wiejskiej. Gniazduje w obszernej dziupli lub w skrzynce lęgowej. Pleszki żywią się głównie owadami, które chwytają w locie lub zbierają z liści i ziemi, a jesienią zjadają też owoce. Migrują na duże odległości - zimują w Afryce Północnej.
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="kopciuszekglos.mp3"
                   answer="kopciuszekglos.mp3"
                   pin="1"> kopciuszek</a>
                <input type="hidden" value="Kopciuszek z rodziny drozdowatych to wędrowny ptak, występujący średnio licznie na całym obszarze kraju. Nazwa gatunku odnosi się do szarego ubarwienia u samic i ciemnoszarego - u samców; przez tę kolorystykę kopciuszek nazywany jest też kominiarczykiem.Przystosował się on świetnie się do życia mieście - zabudowa miejska stanowi dla niego namiastkę górskich terenów, na których pierwotnie gniazdował - występuje nawet w centrach wielkich miast, gdzie przy sztucznym oświetleniu jego głos rozbrzmiewa nawet w nocy. Dość rzadko jest za to spotykany na terenach wiejskich. Gniazda buduje z traw i korzonków w szczelinach skał lub budynków, pokarmu za to szuka na ziemi - zjada owady i inne bezkręgowce, jesienią również jagody.
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="czyzykglos.mp3"
                   answer="czyzykglos.mp3"
                   pin="1">Czyżyk</a>
                <input type="hidden" value="Czyżyk, ptak z rodziny łuszczykowatych, dość licznie występuje w całym paśmie gór, a nielicznie w pozostałej części Polski. Zimuje w kraju. W okresie lęgowym przebywa w borach iglastych, swoje gniazdo buduje na wysokości do kilkunastu metrów, tak dobrze ukrywając je w gęstych gałązkach świerka lub jodły, że niezbyt wielu ornitologów miało okazję je zobaczyć. Nie zapuszcza się też na bezdrzewne tereny. Latem odżywia się zarówno nasionami, jak i owadami, a jesienią i zimą trzyma się w olszynach, gdyż jego pokarmem w tym okresie są głównie nasiona olchy. Czyżyki żerują zazwyczaj w stadkach, często się do siebie odzywając.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="szpakglos.mp3"
                   answer="szpakglos.mp3"
                   pin="1">Szpak </a>
                <input type="hidden" value="Szpak pierwotnie był ptakiem typowo leśnym, ale przystosował się do życia w mieście i obecnie zasiedla pospolicie różne zadrzewienia - parki, ogrody i sady, w których podbiera z drzew wiśnie, czereśnie i śliwki. Poza tym zjada pokarm zwierzęcy, jak owady czy dżdżownice. Gniazdo zakłada w dziupli, skrzynce lęgowej lub w szczelinie budynku. To uzdolniony śpiewak - potrafi naśladować głosy innych ptaków, przeplatając je ze swoim śpiewem; przy częstym kontakcie z ludźmi, naśladuje też ludzki głos. Część ptaków zimuje w kraju, pozostałe wylatują na południe.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="strzyzykglos.mp3"
                   answer="strzyzykglos.mp3"
                   pin="1"> strzyżyk</a>
                <input type="hidden" value="Strzyżyk zwyczajny, o charakterystycznym zadartym ogonku, występuje na niżu kraju i jest jednym z naszych najmniejszych ptaków. Żyje w lasach liściastych i mieszanych z bujnym podszytem; choć nie jest ptakiem rzadkim, ciężko go zobaczyć - trzyma się gęstych zarośli, jest skryty i rzadko pokazuje się na otwartych miejscach. Mimo swych niewielkich rozmiarów śpiewa wyjątkowo donośnym głosem i buduje stosunkowo duże gniazdo o kulistym kształcie, ukryte nisko wśród gęstych gałęzi. Gdy szuka pokarmu - owadów i innych bezkręgowców - prześlizguje się pomiędzy krzewami jak mysz.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="pierwiosnekglos.mp3"
                   answer="pierwiosnekglos.mp3"
                   pin="1"> pierwiosnek</a>
                <input type="hidden" value="Pierwiosnek z rodziny świstunek występuje licznie w całym kraju, zamieszkuąc różnego typu prześwietlone lasy i zadrzewienia. Ptak ten buduje kuliste gniazdo z otworem z boku, które ukrywa w gęstej roślinności nisko przy ziemi. Rozbrzmiewający wczesną wiosną śpiew pierwiosnka jest nie do pomylenia z żadnym innym ptakiem. Żeruje on, przemieszczając się pomiędzy krzewami i koronami drzew, choć nierzadko łapie owady również w locie; jesienią zajada też jagody. Krajowe pierwiosnki migrują na zimę w rejon śródziemnomorski i do Afryki.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="sikoraczarnoglowkaglos.mp3"
                   answer="sikoraczarnoglowkaglos.mp3"
                   pin="1">Sikora czarnogłówka</a>
                <input type="hidden" value="Czarnogłówka z rodziny sikor występuje średnio licznie w całym kraju. Przeważnie jest to ptak osiadły i tylko w razie bardzo mroźnej zimy wylatuje na południe Europy, gdzie klimat jest łagodniejszy. Na siedliska wybiera miejsca wilgotne, zwłaszcza blisko wód, ale też lasy bagienne jak olsy. Co wyjątkowe u sikor, czarnogłówki wykuwają dziuple w wypróchniałym drzewie parami, gdyż wykucie i wysłanie dziupli wymaga od tych małych ptaków dużo wysiłku. Rzadko zlatują na ziemię - żerują w gęstej roślinności, stąd też trudno je zauważyć, a łatwiej usłyszeć. W okresie lęgowym zjadają owady, jednak jesienią w ich diecie dominują nasiona i drobne owoce.
			" class="text-to-append dispNone"/>
            </li>
        </ul>

        <div class="container">
            <a href="/index.php/game" class="rasp__defaults expanders__relay" id="switchAllOn">Restart Gry</a>
            <a href="/index.php/points" class="rasp__defaults expanders__relay" id="switchAllOff">Powrót do sterowania</a>
	</div>
        </div>
    </div>

@stop
