@extends('layouts.default')
@section('content')
    <div class="container game">
        <h3 class="title_">Ława</h3>
        <div class="custom-text" id="custom-text"></div>
        <ul class="expanders">
            <p class="dispNone">Ekspander 3 0x24 szyna 1 0x00</p>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="pliszkasiwa.mp3"
                   relayId="relay1"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">pliszka siwa </a>
                <input type="hidden" value="Pliszka siwa to najpospolitszy ptak Europy. Zamieszkuje tereny nadwodne, gdzie żeruje, łowiąc owady; może się jednak znacznie oddalać od zbiorników - spotykana jest żerująca przy drogach, na rozległych łąkach, czy też polach uprawnych, gdzie biega za pługiem i zbiera wykopane larwy i pędraki. Chodząc po ziemi, pliszki charakterystycznie kiwają ogonem w dół i w górę. Ich gniazda ukryte są na ziemi lub w różnych szczelinach i otworach, także budynków; pliszki są mało płochliwe i chętnie trzymają się w pobliżu człowieka. Tworzą przeważnie niewielkie stadka, którymi lecą na zimowiska na południe Europy lub do Afryki Północnej.
" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="pleszka.mp3"
                   relayId="relay2"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">pleszka </a>
                <input type="hidden" value="Pleszka, z rodziny muchołówkowatych, występuje na niżu kraju. Nie jest ona ptakiem licznym i pomimo jej barwnego upierzenia w terenie nie rzuca się w oczy. Zamieszkuje przede wszystkim obrzeża lasów liściastych i mieszanych, ale chętnie przebywa też w pobliżu osad ludzkich w zieleni miejskiej i wiejskiej. Gniazduje w obszernej dziupli lub w skrzynce lęgowej. Pleszki żywią się głównie owadami, które chwytają w locie lub zbierają z liści i ziemi, a jesienią zjadają też owoce. Migrują na duże odległości - zimują w Afryce Północnej.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="kopciuszek.mp3"
                   relayId="relay3"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1"> kopciuszek</a>
                <input type="hidden" value="Kopciuszek z rodziny drozdowatych to wędrowny ptak, występujący średnio licznie na całym obszarze kraju. Nazwa gatunku odnosi się do szarego ubarwienia u samic i ciemnoszarego - u samców; przez tę kolorystykę kopciuszek nazywany jest też kominiarczykiem.Przystosował się on świetnie się do życia mieście - zabudowa miejska stanowi dla niego namiastkę górskich terenów, na których pierwotnie gniazdował - występuje nawet w centrach wielkich miast, gdzie przy sztucznym oświetleniu jego głos rozbrzmiewa nawet w nocy. Dość rzadko jest za to spotykany na terenach wiejskich. Gniazda buduje z traw i korzonków w szczelinach skał lub budynków, pokarmu za to szuka na ziemi - zjada owady i inne bezkręgowce, jesienią również jagody.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="czyzyk.mp3"
                   relayId="relay4"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">Czyżyk</a>
                <input type="hidden" value="Czyżyk, ptak z rodziny łuszczykowatych, dość licznie występuje w całym paśmie gór, a nielicznie w pozostałej części Polski. Zimuje w kraju. W okresie lęgowym przebywa w borach iglastych, swoje gniazdo buduje na wysokości do kilkunastu metrów, tak dobrze ukrywając je w gęstych gałązkach świerka lub jodły, że niezbyt wielu ornitologów miało okazję je zobaczyć. Nie zapuszcza się też na bezdrzewne tereny. Latem odżywia się zarówno nasionami, jak i owadami, a jesienią i zimą trzyma się w olszynach, gdyż jego pokarmem w tym okresie są głównie nasiona olchy. Czyżyki żerują zazwyczaj w stadkach, często się do siebie odzywając.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="mysikrolik.mp3"
                   relayId="relay5"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">mysikrólik </a>
                <input type="hidden" value="Mysikrólik to najmniejszy ptak Europy, zamieszkujący bory świerkowe, jodłowe lub mieszane, rzadziej sosnowe. Jak na tak maleńkiego ptaka, buduje dość masywne, zamknięte z góry gniazda, które podwiesza pod gałęzią w koronie drzewa. Zimuje na południu Europy, północny Afryki, a nawet w Ameryce Północnej. Podczas toków samiec unosi swoje barwne pióra na wierzchu głowy, strosząc je w czubek. Polując na gałęziach na drobne bezkręgowce, głównie owady, często zawisa głową w dół. Na ziemię schodzi tylko wyjątkowo, w sytuacji znacznego głodu; ciężko jest więc go zauważyć, ale za to usłyszeć można jego wysoki, falujący śpiew.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="strzyzyk.mp3"
                   relayId="relay6"
                   expander="0x24 0x01 "
                   external="true"
                   pin="1"> strzyżyk</a>
                <input type="hidden" value="Strzyżyk zwyczajny, o charakterystycznym zadartym ogonku, występuje na niżu kraju i jest jednym z naszych najmniejszych ptaków. Żyje w lasach liściastych i mieszanych z bujnym podszytem; choć nie jest ptakiem rzadkim, ciężko go zobaczyć - trzyma się gęstych zarośli, jest skryty i rzadko pokazuje się na otwartych miejscach. Mimo swych niewielkich rozmiarów śpiewa wyjątkowo donośnym głosem i buduje stosunkowo duże gniazdo o kulistym kształcie, ukryte nisko wśród gęstych gałęzi. Gdy szuka pokarmu - owadów i innych bezkręgowców - prześlizguje się pomiędzy krzewami jak mysz.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="pierwiosnek.mp3"
                   relayId="relay7"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1"> pierwiosnek</a>
                <input type="hidden" value="Pierwiosnek z rodziny świstunek występuje licznie w całym kraju, zamieszkuąc różnego typu prześwietlone lasy i zadrzewienia. Ptak ten buduje kuliste gniazdo z otworem z boku, które ukrywa w gęstej roślinności nisko przy ziemi. Rozbrzmiewający wczesną wiosną śpiew pierwiosnka jest nie do pomylenia z żadnym innym ptakiem. Żeruje on, przemieszczając się pomiędzy krzewami i koronami drzew, choć nierzadko łapie owady również w locie; jesienią zajada też jagody. Krajowe pierwiosnki migrują na zimę w rejon śródziemnomorski i do Afryki.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="mucholowkaszara.mp3"
                   relayId="relay1"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">muchołówka szara</a>
                <input type="hidden" value="Muchołówka szara w Polsce jest średnio liczna i wędrowna - zimuje w Afryce. W prześwietlonych lasach różnego typu, starych parkach i ogrodach znajduje sobie dziuple lub skrzynki lęgowe, w których gniazduje. Siedzącą spokojnie muchołówkę trudno zauważyć w lesie - rzuca się w oczy dopiero, gdy zwinnym lotem chwyta w powietrzu owada. Również jej śpiew jest skromny i cichy, dlatego mimo iż pospolita, pozostaje ptakiem słabo znanym.
			" class="text-to-append dispNone"/>
            </li>
        </ul>
        <ul class="expanders answers">
            <p class="dispNone">Ekspander 0x24 szyna 2</p>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="pliszkasiwa.mp3"
                   relayId="relay1"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">pliszka siwa </a>
                <input type="hidden" value="Pliszka siwa to najpospolitszy ptak Europy. Zamieszkuje tereny nadwodne, gdzie żeruje, łowiąc owady; może się jednak znacznie oddalać od zbiorników - spotykana jest żerująca przy drogach, na rozległych łąkach, czy też polach uprawnych, gdzie biega za pługiem i zbiera wykopane larwy i pędraki. Chodząc po ziemi, pliszki charakterystycznie kiwają ogonem w dół i w górę. Ich gniazda ukryte są na ziemi lub w różnych szczelinach i otworach, także budynków; pliszki są mało płochliwe i chętnie trzymają się w pobliżu człowieka. Tworzą przeważnie niewielkie stadka, którymi lecą na zimowiska na południe Europy lub do Afryki Północnej.
" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="pleszka.mp3"
                   relayId="relay2"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">pleszka </a>
                <input type="hidden" value="Pleszka, z rodziny muchołówkowatych, występuje na niżu kraju. Nie jest ona ptakiem licznym i pomimo jej barwnego upierzenia w terenie nie rzuca się w oczy. Zamieszkuje przede wszystkim obrzeża lasów liściastych i mieszanych, ale chętnie przebywa też w pobliżu osad ludzkich w zieleni miejskiej i wiejskiej. Gniazduje w obszernej dziupli lub w skrzynce lęgowej. Pleszki żywią się głównie owadami, które chwytają w locie lub zbierają z liści i ziemi, a jesienią zjadają też owoce. Migrują na duże odległości - zimują w Afryce Północnej.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="kopciuszek.mp3"
                   relayId="relay3"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1"> kopciuszek</a>
                <input type="hidden" value="Kopciuszek z rodziny drozdowatych to wędrowny ptak, występujący średnio licznie na całym obszarze kraju. Nazwa gatunku odnosi się do szarego ubarwienia u samic i ciemnoszarego - u samców; przez tę kolorystykę kopciuszek nazywany jest też kominiarczykiem.Przystosował się on świetnie się do życia mieście - zabudowa miejska stanowi dla niego namiastkę górskich terenów, na których pierwotnie gniazdował - występuje nawet w centrach wielkich miast, gdzie przy sztucznym oświetleniu jego głos rozbrzmiewa nawet w nocy. Dość rzadko jest za to spotykany na terenach wiejskich. Gniazda buduje z traw i korzonków w szczelinach skał lub budynków, pokarmu za to szuka na ziemi - zjada owady i inne bezkręgowce, jesienią również jagody.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="czyzyk.mp3"
                   relayId="relay4"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">Czyżyk</a>
                <input type="hidden" value="Czyżyk, ptak z rodziny łuszczykowatych, dość licznie występuje w całym paśmie gór, a nielicznie w pozostałej części Polski. Zimuje w kraju. W okresie lęgowym przebywa w borach iglastych, swoje gniazdo buduje na wysokości do kilkunastu metrów, tak dobrze ukrywając je w gęstych gałązkach świerka lub jodły, że niezbyt wielu ornitologów miało okazję je zobaczyć. Nie zapuszcza się też na bezdrzewne tereny. Latem odżywia się zarówno nasionami, jak i owadami, a jesienią i zimą trzyma się w olszynach, gdyż jego pokarmem w tym okresie są głównie nasiona olchy. Czyżyki żerują zazwyczaj w stadkach, często się do siebie odzywając.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="mysikrolik.mp3"
                   relayId="relay5"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">mysikrólik </a>
                <input type="hidden" value="Mysikrólik to najmniejszy ptak Europy, zamieszkujący bory świerkowe, jodłowe lub mieszane, rzadziej sosnowe. Jak na tak maleńkiego ptaka, buduje dość masywne, zamknięte z góry gniazda, które podwiesza pod gałęzią w koronie drzewa. Zimuje na południu Europy, północny Afryki, a nawet w Ameryce Północnej. Podczas toków samiec unosi swoje barwne pióra na wierzchu głowy, strosząc je w czubek. Polując na gałęziach na drobne bezkręgowce, głównie owady, często zawisa głową w dół. Na ziemię schodzi tylko wyjątkowo, w sytuacji znacznego głodu; ciężko jest więc go zauważyć, ale za to usłyszeć można jego wysoki, falujący śpiew.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="strzyzyk.mp3"
                   relayId="relay6"
                   expander="0x24 0x01 "
                   external="true"
                   pin="1"> strzyżyk</a>
                <input type="hidden" value="Strzyżyk zwyczajny, o charakterystycznym zadartym ogonku, występuje na niżu kraju i jest jednym z naszych najmniejszych ptaków. Żyje w lasach liściastych i mieszanych z bujnym podszytem; choć nie jest ptakiem rzadkim, ciężko go zobaczyć - trzyma się gęstych zarośli, jest skryty i rzadko pokazuje się na otwartych miejscach. Mimo swych niewielkich rozmiarów śpiewa wyjątkowo donośnym głosem i buduje stosunkowo duże gniazdo o kulistym kształcie, ukryte nisko wśród gęstych gałęzi. Gdy szuka pokarmu - owadów i innych bezkręgowców - prześlizguje się pomiędzy krzewami jak mysz.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="pierwiosnek.mp3"
                   relayId="relay7"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1"> pierwiosnek</a>
                <input type="hidden" value="Pierwiosnek z rodziny świstunek występuje licznie w całym kraju, zamieszkuąc różnego typu prześwietlone lasy i zadrzewienia. Ptak ten buduje kuliste gniazdo z otworem z boku, które ukrywa w gęstej roślinności nisko przy ziemi. Rozbrzmiewający wczesną wiosną śpiew pierwiosnka jest nie do pomylenia z żadnym innym ptakiem. Żeruje on, przemieszczając się pomiędzy krzewami i koronami drzew, choć nierzadko łapie owady również w locie; jesienią zajada też jagody. Krajowe pierwiosnki migrują na zimę w rejon śródziemnomorski i do Afryki.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="mucholowkaszara.mp3"
                   relayId="relay1"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">muchołówka szara</a>
                <input type="hidden" value="Muchołówka szara w Polsce jest średnio liczna i wędrowna - zimuje w Afryce. W prześwietlonych lasach różnego typu, starych parkach i ogrodach znajduje sobie dziuple lub skrzynki lęgowe, w których gniazduje. Siedzącą spokojnie muchołówkę trudno zauważyć w lesie - rzuca się w oczy dopiero, gdy zwinnym lotem chwyta w powietrzu owada. Również jej śpiew jest skromny i cichy, dlatego mimo iż pospolita, pozostaje ptakiem słabo znanym.
			" class="text-to-append dispNone"/>
            </li>

        </ul>

        {{--<ul class="expanders">--}}
        {{--<p class="dispNone">Ekspander 1 0x20 szyna 1 0x00</p>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio="sikoraczarnoglowka.mp3"--}}
        {{--relayId="relay1"--}}
        {{--expander="0x20 0x00 "--}}
        {{--external="false"--}}
        {{--pin="1">sikora czarnogłówka</a>--}}
        {{--<input  type="hidden" value="Czarnogłówka z rodziny sikor występuje średnio licznie w całym kraju. Przeważnie jest to ptak osiadły i tylko w razie bardzo mroźnej zimy wylatuje na południe Europy, gdzie klimat jest łagodniejszy. Na siedliska wybiera miejsca wilgotne, zwłaszcza blisko wód, ale też lasy bagienne jak olsy. Co wyjątkowe u sikor, czarnogłówki wykuwają dziuple w wypróchniałym drzewie parami, gdyż wykucie i wysłanie dziupli wymaga od tych małych ptaków dużo wysiłku. Rzadko zlatują na ziemię - żerują w gęstej roślinności, stąd też trudno je zauważyć, a łatwiej usłyszeć. W okresie lęgowym zjadają owady, jednak jesienią w ich diecie dominują nasiona i drobne owoce.--}}
        {{--" class="text-to-append dispNone" />--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio="sroka.mp3"--}}
        {{--relayId="relay1"--}}
        {{--expander="0x20 0x00 "--}}
        {{--external="false"--}}
        {{--pin="1">sroka</a>--}}
        {{--<input  type="hidden" value="Sroka z rodziny krukowatych jest powszechnie znanym ptakiem, występującym na niżu kraju. Na siedlisko szuka miejsc z raczej niską roślinnością - kępy krzewów to dla nich odpowiednie kryjówki; jest przy tym wszędobylska i łatwo adaptuje się do nowych warunków - od niedawna jest stałym mieszkańcem w miastach, nawet tych bardzo ruchliwych. Te towarzyskie ptaki skupiają się w liczne stada. W koronach drzew lub w krzaczastych zaroślach budują wyjątkowe gniazda opatrzone zadaszeniem z patyków. W kwestii pożywienia sroka nie jest wybredna - zjada owady, jaja ptaków, małe ssaki, ale też padlinę, nasiona i różne odpadki. Przez jej wrodzoną ciekawość i zbieranie błyszczących przedmiotów uważano srokę za złodziejkę.--}}
        {{--" class="text-to-append dispNone" />--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio="mucholowkazalobna.mp3"--}}
        {{--relayId="relay2"--}}
        {{--expander="0x20 0x00 "--}}
        {{--external="false"--}}
        {{--pin="1">muchołówka żałobna</a>--}}
        {{--<input  type="hidden" value="--}}

        {{--" class="text-to-append dispNone" />--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio="popielica.mp3"--}}
        {{--relayId="relay3"--}}
        {{--expander="0x20 0x00 "--}}
        {{--external="false"--}}
        {{--pin="1">popielica</a>--}}
        {{--<input  type="hidden" value="Popielica – ładne, skryte zwierzątko z długim, puszystym ogonem o srebrzysto-szarym ubarwieniu, prowadzące nadrzewny tryb życia. Chroni się w dziuplach i budkach dla ptaków. Żywi się głównie nasionami i owocami drzew. Zdarza się, że na zimę szuka schronienia w zakamarkach budynków – w piwnicach, na strychach, pod podłogami.--}}
        {{--" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio="orzesznica.mp3"--}}
        {{--relayId="relay4"--}}
        {{--expander="0x20 0x00 "--}}
        {{--external="false"--}}
        {{--pin="1">orzesznica</a>--}}
        {{--<input  type="hidden" value="Orzesznica to niewielki gryzoń o wyjątkowo puszystym ogonku, żółtobrązowej sierści z wierzchu i białawej od spodu. Zwierzę charakteryzuje się dużymi, ciemnymi i wypukłymi oczami, co wskazuje na nocny tryb życia. Podstawę pożywienia orzesznicy stanowią nasiona i orzechy, nie gardzi jednak owocami i owadami. Jesienią zapada w sen zimowy, podczas którego oddycha bardzo rzadko - co 5-10 minut! - a temperatura jej ciała spada nawet do 2oC. Hibernuje nawet w okresie letnim przy niekorzystnej temperaturze. W sumie orzesznica przesypia nawet do 80% swojego życia.--}}
        {{--" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio="zolednica.mp3"--}}
        {{--relayId="relay5"--}}
        {{--expander="0x20 0x00 "--}}
        {{--external="false"--}}
        {{--pin="1">żołędnica</a>--}}
        {{--<input  type="hidden" value="Żołędnica europejska, gryzoń z rodziny popielicowatych, zamieszkuje lasy liściaste i mieszane. Wiedzie ona nadrzewny tryb życia; sama buduje kuliste gniazdo w rozwidleniu gałęzi lub nocuje w dziupli. Aktywna jest nocą, zbiera wtedy lubiane przez nią żołędzie, orzechy i jagody, ale też inne owoce i nasiona, które gromadzi w gnieździe. Zapasy zjada, kiedy budzi się z zimowego snu. Zimuje nawet kilka osobników w jednym gnieździe. Nie boi się przy tym sąsiedztwa człowieka, nierzadko nocując na strychach.--}}
        {{--" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay6"--}}
        {{--expander="0x20 0x00 "--}}
        {{--external="true"--}}
        {{--pin="1"></a>--}}
        {{--<input  type="hidden" value="--}}
        {{--" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay7"--}}
        {{--expander="0x20 0x00 "--}}
        {{--external="true"--}}
        {{--pin="1"></a>--}}
        {{--<input  type="hidden" value="--}}
        {{--" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--<ul class="expanders">--}}
        {{--<p class="dispNone">Ekspander 1 0x20 szyna 2 0x01</p>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay8"--}}
        {{--expander="0x20 0x01 "--}}
        {{--external="true"--}}
        {{--pin="1"></a>--}}
        {{--<input  type="hidden" value="--}}
        {{--" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay1"--}}
        {{--expander="0x20 0x01 "--}}
        {{--external="true"--}}
        {{--pin="1"></a>--}}
        {{--<input  type="hidden" value="--}}
        {{--" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay2"--}}
        {{--expander="0x20 0x01 "--}}
        {{--external="true"--}}
        {{--pin="1"></a>--}}
        {{--<input  type="hidden" value="--}}
        {{--" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay3"--}}
        {{--expander="0x20 0x01 "--}}
        {{--external="true"--}}
        {{--pin="1"></a>--}}
        {{--<input  type="hidden" value="" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay4"--}}
        {{--expander="0x20 0x01 "--}}
        {{--external="true"--}}
        {{--pin="1"></a>--}}
        {{--<input  type="hidden" value="" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay5"--}}
        {{--expander="0x20 0x01 "--}}
        {{--external="true"--}}
        {{--pin="1"></a>--}}
        {{--<input  type="hidden" value="" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay6"--}}
        {{--expander="0x20 0x01 "--}}
        {{--external="true"--}}
        {{--pin="1"></a>--}}
        {{--<input  type="hidden" value="" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay8"--}}
        {{--expander="0x20 0x01 "--}}
        {{--external="true"--}}
        {{--pin="1"></a>--}}
        {{--<input  type="hidden" value="" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--</ul>--}}

        {{--<ul class="expanders">--}}
        {{--<p class="dispNone">Ekspander 2 0x22 szyna 1 0x00</p>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay1"--}}
        {{--expander="0x22 0x00 "--}}
        {{--external="false"--}}
        {{--pin="1"></a>--}}
        {{--<input  type="hidden" value="--}}
        {{--" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay2"--}}
        {{--expander="0x22 0x00 "--}}
        {{--external="true"--}}
        {{--pin="1"> </a>--}}
        {{--<input  type="hidden" value="" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay3"--}}
        {{--expander="0x22 0x00 "--}}
        {{--external="true"--}}
        {{--pin="1"> </a>--}}
        {{--<input  type="hidden" value="" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay4"--}}
        {{--expander="0x22 0x00 "--}}
        {{--external="true"--}}
        {{--pin="1"> </a>--}}
        {{--<input  type="hidden" value="" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay5"--}}
        {{--expander="0x22 0x00 "--}}
        {{--external="true"--}}
        {{--pin="1"> </a>--}}
        {{--<input  type="hidden" value="" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay7"--}}
        {{--expander="0x22 0x00 "--}}
        {{--external="true"--}}
        {{--pin="1"> </a>--}}
        {{--<input  type="hidden" value="" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay8"--}}
        {{--expander="0x22 0x00 "--}}
        {{--external="true"--}}
        {{--pin="1"> </a>--}}
        {{--<input  type="hidden" value="" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay8"--}}
        {{--expander="0x22 0x00 "--}}
        {{--external="true"--}}
        {{--pin="1"> </a>--}}
        {{--<input  type="hidden" value="" class="text-to-append dispNone"/>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--<ul class="expanders">--}}
        {{--<p class="dispNone">Ekspander 2 0x22 szyna 2 0x01</p>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay1"--}}
        {{--expander="0x22 0x01 "--}}
        {{--external="false"--}}
        {{--pin="1"></a>--}}
        {{--<input  type="hidden" value=""/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay2"--}}
        {{--expander="0x22 0x01 "--}}
        {{--pin="1"> </a>--}}
        {{--<input  type="hidden" value=""/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay3"--}}
        {{--expander="0x22 0x01 "--}}
        {{--external="false"--}}
        {{--pin="1"></a>--}}
        {{--<input  type="hidden" value=""/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay4"--}}
        {{--expander="0x22 0x01 "--}}
        {{--external="false"--}}
        {{--pin="1"></a>--}}
        {{--<input  type="hidden" value=""/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay5"--}}
        {{--expander="0x22 0x01 "--}}
        {{--external="false"--}}
        {{--pin="1"></a>--}}
        {{--<input  type="hidden" value=""/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay6"--}}
        {{--expander="0x22 0x01 "--}}
        {{--pin="1"> </a>--}}
        {{--<input  type="hidden" value=""/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay7"--}}
        {{--expander="0x22 0x01 "--}}
        {{--pin="1"> </a>--}}
        {{--<input  type="hidden" value=""/>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#" class="expanders__relay relayexp1"--}}
        {{--audio=".mp3"--}}
        {{--relayId="relay8"--}}
        {{--expander="0x22 0x01 "--}}
        {{--pin="1"> </a>--}}
        {{--<input  type="hidden" value=""/>--}}
        {{--</li>--}}
        {{--</ul>--}}

        <div class="rasp__wrapper">
            {{--<ul class="expanders">--}}
            {{--<li>--}}
            {{--<a href="#" class="expanders__relay rasp__defaults rasp-custom-button relayexp1"--}}
            {{--audio=".mp3"--}}
            {{--relayId="relay8"--}}
            {{--expander=""--}}
            {{--pin="1"> </a>--}}
            {{--<input  type="hidden" value="" class="text-to-append dispNone" />--}}
            {{--</li>--}}
            {{--</ul>--}}

            <a href="/index.php/game" class="rasp__defaults expanders__relay" id="switchAllOn">Restart Gry</a>
            <a href="/" class="rasp__defaults expanders__relay" id="switchAllOff">Powrót do sterowania</a>

        </div>
    </div>

@stop
