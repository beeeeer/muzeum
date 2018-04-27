@extends('layouts.default')
@section('content')
    <div class="container">
        <h3 class="title_">Drągowina</h3>
        <div class="custom-text" id="custom-text">

        </div>
        <ul class="expanders">
            <p class="dispNone">Ekspander 3 0x24 szyna 1 0x00</p>
            <li>
                <a href="#" class="expanders__relay relayexp1 hidden-element"
                   audio="zawilecgajowy.mp3"
                   relayId="relay1"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">Zawilec Gajowy</a>
                <input type="hidden" value="Zawilec gajowy, zwany też dawniej niestrętkiem, należy do najgęściej rosnących roślin lasów liściastych. Dzięki rozrastaniu się cienkimi kłączami tuż pod powierzchnią gleby, tworzy na wiosnę szybko powiększające się skupiska, często wręcz pokrywa zwartymi łanami wielkie powierzchnie, wypełniając bezbarwny zimowy krajobraz lasu zielono-białym dywanem.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1 hidden-element"
                   audio="zawileczolty.mp3"
                   relayId="relay2"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">Zawilec Żółty</a>
                <input type="hidden" value="Zawilec żółty to bylina z rodziny jaskrowatych pospolita na całym niżu kraju, przy czym występuje rzadziej od zawilca gajowego. Rozmnaża się przez podział kłączy oraz z nasion, zarastając często całymi kępami wilgotne lasy i zarośla. Kwitnie od marca do maja, a jego kwiaty w ciągu dnia obracają się za słońcem, w nocy i w czasie złej pogody zamykają się. Cała roślina jest lekko trująca.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1 hidden-element"
                   audio="ziarnoplonwiosenny.mp3"
                   relayId="relay3"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">Ziarnopłon wiosenny</a>
                <input type="hidden" value="Ziarnopłon wiosenny to jaskier, występujący pospolicie w lasach liściastych i na wilgotnych łąkach całego kraju. Łodyga ziarnopłonu płoży się po ziemi, a od marca do maja pojawiają się na niej żółte kwiaty. Cała roślina, jak wszystkie jaskry, jest trująca. Zioła wykonane z ziarnopłonu mają jednak pewne właściwości lecznicze - dawniej używane były w medycynie ludowej do lecznia brodawek i hemoroidów.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1 hidden-element"
                   audio="szczawikzajeczy.mp3"
                   relayId="relay4"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">Szczawik Zajęczy</a>
                <input type="hidden" value="Szczawik zajęczy to niewysoka roślina o pełzającym kłączu, z którego wyrastają podobne do koniczyny sercowate liście i białe kwiaty z fioletowymi żyłkami i żółtą plamą u nasady płatka. Rośnie pospolicie w całym kraju, najchętniej w wilgotnych lasach, zrębach, zaroślach, często też na starych pniach drzew. To roślina o jadalnych, kwaskowatych liściach o właściwościach leczniczych - zawierają m.in. witaminę C.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1 hidden-element"
                   audio="miodunkacma.mp3"
                   relayId="relay5"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">Miodunka ćma</a>
                <input type="hidden" value="Miodunka ćma to roślina wieloletnia z rodziny ogórecznikowatych, w kraju występująca pospolicie w lasach liściastych i zaroślach, zwłaszcza nadrzecznych. Zakwita i rozwija liście wczesną wiosną, jeszcze przed wypuszczeniem liści przez drzewa, pod którymi rośnie. Kwiaty zapylane są przez błonkówki. Jest rośliną leczniczą, wpływającą korzystnie na drogi oddechowe.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1 hidden-element"
                   audio="przylaszczkapospolita.mp3"
                   relayId="relay6"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">Przyłaszczka pospolita</a>
                <input type="hidden" value="Przylaszczka pospolita z rodziny jaskrowatych to roślina wieloletnia, osiągająca nawet do stu lat. W Polsce występuje dość powszechnie w lasach liściastych. Jej liście są zimozielone - pozostają żywe do przedwiośnia, co znacznie przyspiesza rozwój rośliny; już od marca z pączków uformowanych jesienią roku poprzedniego rozwijają się kwiaty; w tym czasie więdną stare liście, a na ich miejsce wyrastają świeże. Nasiona roznoszone są przez mrówki. Jest to roślina trująca w większej ilości, mimo to jej liście stosowano dawniej jako surogat herbaty. Przylaszczka dzięki efektownym kwiatom pojawiającym się tuż po zimie jest rośliną lubianą i obecną w folklorze i tradycjach wielu krajów, zwłaszcza skandynawskich. Przypisywane jej też były magiczne właściwości - ziele noszone w woreczku przy kobiecie miało jej zagwarantować miłość mężczyzny.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1 hidden-element"
                   audio="mrowkarudnica.mp3"
                   relayId="relay7"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">Mrówka rudnica</a>
                <input type="hidden" value="
                Mrówka rudnica to pospolity owad leśny, żyjący głównie w lasach iglastych. Mrowisko rudnicy składa się z części nadziemnej - kopca o wysokości do 1 m - i podziemnej, sięgającej do 2 m. W jednym mrowisku może żyć nawet 100 tysięcy mrówek. Dzielą się one na trzy kasty: bezpłciowe robotnice, samicę (królową) i samce. Wszelkie prace wykonują robotnice, królowa jedynie składa jaja - dziennie nawet do 300. W przypadku zagrożenia mrowiska grupy robotnic pryskają kwasem mrówkowym w intruza. Odżywiają się drobnymi zwierzętami, głównie owadami i ich larwami, które transportują do mrowiska; zjadają też chętnie spadź wydzielaną przez mszyce. Mrówki odgrywają ważną rolę w lasach - usuwają martwe szczątki zwierząt, pełniąc funkcję 'czyścicieli' lasu; mrówki z jednego mrowiska zabijają też rocznie ok. 50 tysięcy larw owadów.
					" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="kokoryczpusta.mp3"
                   relayId="relay8"
                   expander="0x24 0x01 "
                   external="false"
                   pin="1">Kokorycz pusta</a>
                <input type="hidden" value="Kokorycz pusta z rodziny dymnicowatych jest dość pospolita na niżu, w Karpatach i Sudetach aż po regiel dolny; rośnie w cienistych żyznych lasach liściastych. W kwiatach, pojawiających się od końca marca, znajduje się nektar, do którego mogą się jednak dostać tylko owady o długich trąbkach. Nasiona kokoryczy zaopatrzone są w elajosomy, czyli obfite w tłuszcze wyrostki, spożywane przez mrówki, które przenosząc je do mrowiska rozsiewają nasiona. Kokorycz pusta, choć jest rośliną trującą, znana jest przez jej lecznicze, kojące działanie na suchą, popękaną skórę, np. w przypadku egzemy.
					" class="text-to-append dispNone"/>
            </li>
        </ul>
        <ul class="expanders">
            <p class="dispNone">Ekspander 1 0x20 szyna 1 0x00</p>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="kokoryczkawielkokwiatowa.mp3"
                   relayId="relay1"
                   expander="0x21 0x00 "
                   external="true"
                   pin="1">Kokorycz wielokwiatowa</a>
                <input type="hidden" value="Kokoryczka wielokwiatowa, bylina z rodziny szparagowatych, jest w Polsce dość powszechna na całym niżu i w niewysokich górach, głównie w lasach liściastych i bukowych. Rozmnaża się zarówno wegetatywnie, wyrastając z rozgałęzionego kłącza, jak i generatywnie, poprzez wysiew nasion. W wąskich kwiatach, pojawiających się już od kwietnia, znajduje się nektar, do którego dostać się mogą tylko trzmiele z długimi trąbkami. Owocem jest wypełniona nasionami czarna, oszroniona jagoda, która jest trująca - bywa czasem mylona z borówką czarną, powodując zatrucia u ludzi.
"
                       class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="konwaliamajowa.mp3"
                   relayId="relay2"
                   expander="0x21 0x00 "
                   external="true"
                   pin="1">Konwalia majowa</a>
                <input type="hidden" value="Konwalia majowa lub leśna, zwana też lanuszką, jest byliną z rodziny liliowatych, rosnącą w lasach liściastych i mieszanych oraz zaroślach, tworząc często rozległe kolonie. Jak sama nazwa wskazuje, konwalia zakwita w maju; po przekwitnięciu pojawiają się czerwone jagody. Gatunek ten rozmnaża się wegetatywnie za pomocą kłączy, ale też generatywnie dzięki ptakom jak kos i droździk, które spożywają jagody i wydalają niestrawione nasiona. Wszystkie części rośliny są trujące, jednak przy odpowiednim przetworzeniu i dawkowaniu kwiaty i liście stosuje się w medycynie jako składnik leków nasercowych. Ze względu na silne pobudzanie do kichania, proszek z suszonych kwiatów dodawany jest do tabaki. W średniowieczu konwalia była symbolem wiedzy i sztuki medycznej.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="sikorabogatka.mp3"
                   relayId="relay3"
                   expander="0x21 0x00 "
                   external="true"
                   pin="1">Sikora bogatka</a>
                <input type="hidden" value="Sikora bogatka jest największą z naszych sikor i znajduje się pod ścisłą ochroną. Zamieszkuje różnorodne lasy, a także parki i ogrody. Wyróżnia się wyjątkowo bogatym repertuarem głosów. Bogatka potrafi sama wykuć dziuplę, ale tylko w miękkim, spróchniałym drewnie - za gniazdo mogą jej też służyć rurki ogrodzeniowe, skrzynki na listy, a nawet otwory wentylacyjne. Ptak ten spędza zimę w Polsce, przemieszcza się tylko w miejsca, gdzie łatwiej mu znaleźć pokarm - zwykle do miast. Sikorki często widujemy przy karmnikach zajadające słoninę - poza okresem zimowym żywią się owadami.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="sikoramodraszka.mp3"
                   relayId="relay4"
                   expander="0x21 0x00 "
                   external="true"
                   pin="1">Sikora modraszka</a>
                <input type="hidden" value="Modraszka, zwana sikorą modrą, to przepięknie upierzony mały ptaszek. Doskonale komponuje się u niej kolor żółty z błękitnym - modrym (stąd zresztą nazwa gatunku). Preferuje głównie świetliste lasy liściaste i mieszane, rzadziej iglaste, zamieszkiwane również przez dzięcioła dużego, w którego opuszczonych dziuplach gniazduje. Żywi się głównie owadami i pajęczakami, zimą natomiast roślinami, odwiedza też chętnie karmniki, ceniąc przede wszystkim słonecznik, orzeszki ziemne i słoninę. Głos modraszki jest wysoki, przypominający gwizd, podobny do głosów innych przedstawicieli rodziny sikor. Nie jest zagrożona wyginięciem, w kraju jest nawet liczna, podobnie jak wszystkie sikory objęta jest ochroną gatunkową.
			"
                       class="text-to-append dispNone" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="zieba.mp3"
                   relayId="relay5"
                   expander="0x21 0x00 "
                   external="true"
                   pin="1">Zięba</a>
                <input type="hidden" value="Zięba zwyczajna zamieszkuje wszelkie typy zadrzewień. Samca można odróżnić od samicy po upierzeniu - jest ono barwniejsze i bardziej kontrastowe niż u samicy. Zięba żywi się pokarmem zarówno roślinnym, jak i zwierzęcym - w zależności od pory roku zjada: kiełki i pączki - wiosną; owady, ich larwy i pajęczaki - latem lub nasiona i jagody - w sezonie jesienno-zimowym. Śpiew tego ptaka uznawany jest za jeden z najładniejszych wśród polskich gatunków, przy czym melodie zięb z poszczególnych regionów nieco się różnią i są przekazywane z pokolenia na pokolenie.
			" class="text-to-append dispNone"/>
            </li>
            {{--lewo--}}
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="wiewiorka.mp3"
                   relayId="relay6"
                   expander="0x21 0x00 "
                   external="true"
                   pin="1">Wiewiórka</a>
                <input type="hidden" value="Wiewiórka pospolita, czy też ruda, to nadrzewny gryzoń często spotykany w lasach liściastych i iglastych, a także w parkach, na terenie całej Polski. W górach wiewiórki mogą być ciemno ubarwione - brązowe po niemal czarne. Ich długi puszysty ogonek odgrywa ważną rolę podczas skoków - służy do stabilizacji kierunku lotu. Pożywienie wiewiórek stanowią nasiona, grzyby i owoce, ale także owady, jaja i pisklęta. Zdarza się im suszyć grzyby na gałęziach, by mieć je na zimę; swoje zapasy chowa w ziemi, dziuplach lub szczelinach drzew, zamieszkuje natomiast wybudowane przez siebie gniazda z trawy i drobnych gałązek. Wiewiórka pospolita, to nadrzewny gryzoń często spotykany w lasach liściastych i iglastych, a także w parkach, na terenie całej Polski. W górach wiewiórki mogą być ciemno ubarwione - brązowe po niemal czarne. Ich długi puszysty ogonek odgrywa ważną rolę podczas skoków - służy do stabilizacji kierunku lotu. Pożywienie wiewiórek stanowią nasiona, grzyby i owoce, ale także owady, jaja i pisklęta. Zdarza się im suszyć grzyby na gałęziach, by mieć je na zimę; swoje zapasy chowa w ziemi, dziuplach lub szczelinach drzew. Zamieszkuje natomiast dziuple lub gniazda opuszczone przez inne zwierzęta dobudowując zadaszenia lub buduje własne w koronach drzew wykorzystując do tego trawy i drobne gałązki.

			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="fioleklesny.mp3"
                   relayId="relay7"
                   expander="0x21 0x00 "
                   external="true"
                   pin="1">Fiołek leśny</a>
                <input type="hidden" value="Fiołek leśny, z rodziny fiołkowatych, to wieloletnia rodzima roślina występująca pospolicie w lasach na całym niżu i w niższych położeniach górskich Polski. Kwitnie od kwietnia do czerwca; jest zapylana przez pszczoły, wabione barwą kwiatów i nektarem. Owocem fiołka jest jajowata torebka z nasionami, pękająca na 3 klapy, które po wyschnięciu wyginają się, wyrzucając nasiona na kilka metrów.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="luskiewnikrozowy.mp3"
                   relayId="relay8"
                   expander="0x21 0x00 "
                   external="true"
                   pin="1">Łuskiewnik różowy </a>
                <input type="hidden" value="Łuskiewnik różowy z rodziny zarazowatych w kraju występuje pospolicie. Ta bezzieleniowa bylina nie zawiera chlorofilu i nie może przeprowadzać fotosyntezy, więc żywi się na innych organizmach. Jest pasożytem, pobierającym za pomocą ssawek substancje organiczne oraz wodę z solami mineralnymi z korzeni drzew liściastych - leszczyn, topoli i olszy. W Tatrach pasożytuje też na świerkach. Jej nazwa - łuskiewnik - pochodzi od łuskowatych liści, pokrywających podziemne kłącze; większą część roku znajduje się pod ziemią, a jedynie w czasie kwitnienia - od marca do maja - i owocowania wyrasta nadziemny pęd. Nasiona, aby efektywnie wykiełkować muszą znajdować się w glebie mniej niż 1 cm od korzeni rośliny żywicielskiej.
			" class="text-to-append dispNone"/>
            </li>
        </ul>

        <ul class="expanders">
            <p class="dispNone">Ekspander 1 0x20 szyna 2 0x01</p>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="gwiazdnicawielkokwiatowa.mp3"
                   relayId="relay1"
                   expander="0x21 0x01 "
                   external="true"
                   pin="1">Gwiazdnica wielkokwiatowa</a>
                <input type="hidden" value="Gwiazdnica wielkokwiatowa, z rodziny goździkowatych, w Polsce jest dość pospolita od niżu aż po wyżyny. To typowa roślina leśna, występująca głównie w lasach liściastych: dębowo-grabowych, bukowych i nadrzecznych olszynach, zasiedlająca też zarośla i żywopłoty. Kwitnie stopniowo od kwietnia do czerwca, zapylana jest przez owady. Co ciekawe, kwiaty gwiazdnicy zamykają się na noc oraz podczas deszczowej pogody - chronią w ten sposób słupek i pręciki.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="kowalikzwyczajny.mp3"
                   relayId="relay2"
                   expander="0x21 0x01 "
                   external="true"
                   pin="1">Kowalik</a>
                <input type="hidden" value="Kowalik zwyczajny lub bargiel to osiadły ptak, lubiący lasy liściaste i mieszane. Jako jedyny z krajowych ptaków poszukując pożywienia potrafi chodzić po pniach drzew lub skałach, często głową w dół, a dzięki pazurom swych silnych palców wędruje także po spodzie gałęzi. Swym potężnym dłutowatym dziobem wyciąga ze szczelin w korze zdobycze - owady, larwy, pająki i inne bezkręgowce. Spędzający zimę w kraju kowalik nie gardzi też nasionami i owocami. Tworzy on monogamiczne pary, a w trakcie wysiadywania jaj samiec karmi swoją partnerkę.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="liliazlotoglow.mp3"
                   relayId="relay3"
                   expander="0x21 0x01 "
                   external="true"
                   pin="1">Lilia złotogłów</a>
                <input type="hidden" value="Lilia złotogłów to roślina cebulowa z rodziny liliowatych, w kraju spotykana nielicznie w górach, na niżu bardzo rzadka. Rośnie w widnych lasach i zaroślach, na tatrzańskich halach można ją za to spotkać na zarośniętych trawą skałach. Kwitnie od czerwca, zwabiając owady zapachem, szczególnie intensywnym wieczorem i nocą; kolorowe plamki na płatkach kwiatów mają pokazywać owadom miejsce do zapylenia; dostęp do nektaru mają jednak tylko owady długotrąbkowe - motyle. Nasiona lilii rozsiewane są przez wiatr, potrafi ona rozmnażać się też wegetatywnie za pomocą cebulek powstających u nasady starej cebuli. Cebulki te zawierają dużo skrobi, dlatego dawniej uchodziły za przysmak zarówno na surowo, jak i gotowane i pieczone. Lilia złotogłów jest częstym motywem w sztuce ludowej Podhala, szczególnie w rzeźbie.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="podkolanbialy.mp3"
                   relayId="relay4"
                   expander="0x21 0x01 "
                   external="true"
                   pin="1">Podkolan biały</a>
                <input type="hidden" value="Podkolan biały rośnie w dobrze nasłonecznionych lasach oraz na ugorach. Roślina ta posiada dwie bulwy - jedna jest zeszłoroczna i to z niej wyrasta pęd nadziemny, druga natomiast jest tegoroczna i gromadzi substancje zapasowe dla przyszłorocznego pędu. Białe kwiaty, pojawiające się od maja do lipca, wydzielają przyjemny zapach wieczorami i nocą, dzięki czemu chętnie zapylają je motyle nocne
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="sikoraczubatka.mp3"
                   relayId="relay5"
                   expander="0x21 0x01 "
                   external="true"
                   pin="1">Sikora czubatka</a>
                <input type="hidden" value="Czubatka europejska z rodziny sikor wyróżnia się swoim czarno-białym czubkiem na głowie. Występuje średnio licznie w całym kraju, przy czym pozostaje tu na zimę, co sprzyja monogamii wśród tych ptaków. Zamieszkują one bory iglaste z próchniejącymi lub martwymi drzewami, gdzie samice mogą wykuć dziuplę. Czubatka stale przebywa w koronach drzew, skąd dobiega jej dźwięczny trel. Łowi tam owady i ich larwy, pająki oraz inne bezkręgowce. Zimą, gdy nie może znaleźć pokarmu zwierzęcego, odżywia się nasionami drzew iglastych - wtedy pożywienia szuka na ziemi. Podobnie jak inne sikory, gromadzi też zapasy na zimę, wciskając owady i nasiona w zakamarki kory drzewa.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="sikorasosnowka.mp3"
                   relayId="relay6"
                   expander="0x21 0x01 "
                   external="true"
                   pin="1">Sikora sosnówka</a>
                <input type="hidden" value="Sosnówka to nasza najmniejsza przedstawicielka rodziny sikor, występująca licznie w górach i na północy kraju, za to nielicznie w pozostałej części Polski. Jak sama nazwa wskazuje, sikora ta preferuje bory iglaste, w których może znaleźć wykute przez dzięcioła gotowe dziuple. Zwinnie porusza się w koronach drzew, gdzie żeruje, wyszukując owadów, ich gąsienic, ale też pająków czy innych bezkręgowców. Na zimę robi zapasy pożywienia na zimę, ukrywając nasiona drzew iglastych w spękaniach kory.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="szczygiel.mp3"
                   relayId="relay8"
                   expander="0x21 0x01 "
                   external="true"
                   pin="1">Szczygieł</a>
                <input type="hidden" value="Szczygieł z rodziny łuszczaków to jeden z najbarwniejszych naszych ptaków. Występuje średnio licznie na całym niżu w niewielkich zadrzewieniach lub na skrajach lasów. Misterne gniazdo z korzonków, traw i mchu buduje na końcach gałązek drzewa liściastego. Śpiew szczygła jest bardzo szczebiotliwy. Jego głównym pożywieniem są nasiona, ale wiosną zjada też bezkręgowce. Szczygły zimują w kraju i właśnie wtedy najbardziej rzucają się w oczy - żerujące w dużych stadach na polach i ugorach.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay7"
                   expander="0x21 0x01 "
                   external="true"
                   pin="1"> </a>
                <input type="hidden" value="" class="text-to-append dispNone"/>
            </li>
        </ul>

        <ul class="expanders">
            <p class="dispNone">Ekspander 2 0x22 szyna 1 0x00</p>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="wawrzynekwilczelyko.mp3"
                   relayId="relay1"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1">Wawrzynek wilczełyko</a>
                <input type="hidden" value="Wawrzynek wilczełyko to niewielki krzew, występujący w Polskich lasach. Jest on rośliną miododajną i kwitnie przed wypuszczeniem liści. Po przekwitnięciu natomiast pojawiają się gęsto skupione owoce o soczyście czerwonej barwie. Cała roślina jest bardzo trująca. Zjedzenie już 10 owoców o słodko-cierpkim smaku może spowodować śmierć dorosłego człowieka. Dla dziecka śmiertelnym może okazać się spożycie nawet 1 owocu. Roślina działa szkodliwie również na skórę, powodując zaczerwienienie i obrzęki oraz pojawienie się pęcherzy.

			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="dzieciolczarny.mp3"
                   relayId="relay2"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1">Dzięcioł czarny</a>
                <input type="hidden" value="Dzięcioł czarny, największy dzięcioł naszego kontynentu, posiada zupełnie czarne ubarwienie piór, za wyjątkiem charakterystycznej, czerwonej „czapeczki” u samców. Do przeżycia wymaga dojrzałych, starych drzew, najlepiej iglastych lub buków, w których wykuwa otwory, poszukując pod korą larw owadów czy mrówek. Dzięki temu zapewnia wielu gatunkom zwierząt dostępność obszernych dziupli. To ważny gatunek parasolowy, czyli osłonowy, co znaczy, że jego ochrona pozwala chronić również szereg innych gatunków, w jakimś stopniu od niego zależnych. Kluczowym zagrożeniem dla istnienia tego ptaka jest usuwanie obumierających i martwych drzew, a także ujednolicanie struktury wiekowej drzewostanów. Dzięcioł czarny, największy dzięcioł naszego kontynentu, posiada zupełnie czarne ubarwienie piór, za wyjątkiem charakterystycznej, czerwonej „czapeczki” u samców. Do przeżycia wymaga dojrzałych, starych drzew, najlepiej iglastych lub buków, w których wykuwa otwory, poszukując pod korą larw owadów czy mrówek. Dzięki temu zapewnia wielu gatunkom zwierząt dostępność obszernych dziupli. To ważny gatunek parasolowy, czyli osłonowy, co znaczy, że jego ochrona pozwala chronić również szereg innych gatunków, w jakimś stopniu od niego zależnych. Z jego dziupli często korzysta sóweczka. Kluczowym zagrożeniem dla istnienia tego ptaka jest usuwanie obumierających i martwych drzew, a także ujednolicanie struktury wiekowej drzewostanów.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="dziecilpstry.mp3"
                   relayId="relay3"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1">Dzięcioł pstry</a>
                <input type="hidden" value="Dzięcioł duży to najpospolitszy dzięcioł w kraju – występuje we wszelkich drzewostanach. Jego płeć łatwo rozpoznać po czerwonej plamce na potylicy występującej tylko u samca. Dzięcioł latem zjada wydłubywane z pni drzew larwy, owady i gąsienice; zimą natomiast jego główny pokarm stanowią nasiona sosnowe - by je wydobyć, wtyka szyszkę w szczelinę pnia drzewa, dzięki czemu może łatwo wydziobać z niej nasiona - takie miejsce w drzewie nazywamy ‘kuźnią’ dzięcioła.
		" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="golabgrzywacz.mp3"
                   relayId="relay4"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1">Gołąb grzywacz </a>
                <input type="hidden" value="Grzywacz to największy krajowy gołąb, występujący dość licznie w całej Polsce. Grzywacze, będąc pierwotnie ptakami leśnymi, w XIX wieku zaczęły się osiedlać w podbliżu osad ludzkich i obecnie występują licznie w miejskich parkach. Gniazdo - luźną platformę z patyczków - budują nawet na pojedynczych drzewach. Odzywają się chętnie - gruchają szczególnie o świcie. Zjadają nasiona, owoce, liście oraz ślimaki. Zimują w północnej Afryce, a do swoich siedlisk wracają już od marca.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="czworolistpospolity.mp3"
                   relayId="relay5"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1">Czworolist pospolity</a>
                <input type="hidden" value="Czworolist pospolity, czy też jednojagoda czworolistna, rośnie w podmokłych lasach liściastych i mieszanych. Czworolist jest byliną z całorocznym kłączem podziemnym, żyjącym nawet ponad 200 lat. Rozmnaża się zarówno wegetatywnie, poprzez usamodzielniające się z czasem odgałęzienia kłącza, jak i przez wysiew nasion z jagody. Ze względu na charakterystyczną, pojedynczą, czarną, jagodę, na Podhalu nazywana jest też wronim okiem. Wszystkie części rośliny są trujące.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="jez.mp3"
                   relayId="relay6"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1">Jeż </a>
                <input type="hidden" value="Jeż europejski to często spotykany, największy ssak owadożerny w naszym kraju. W dzień śpi ukryty pod liśćmi lub w jamkach, o zmierzchu wychodzi z ukrycia i, pracowicie drepcząc, poszukuje jedzenia, np. owadów, robaków, drobnych gryzoni czy też grzybów i przejrzałych owoców. Co noc pokonuje w tym celu do 3 km. Ubarwienie ciała jeża jest szarobrunatne, a po stronie brzusznej szare lub brunatne. Jego spiczasty, zawsze wilgotny i ruchliwy nosek stanowi doskonały narząd czuciowy. Każdy jeż jest pokryty ok. 5 tysiącami kolców, które stroszy, gdy jest przestraszony, równocześnie zwijając się w kulkę. Jeże nie robią żadnych zapasów na zimę, w tym czasie zapadają w odrętwienie i odżywiają się tłuszczem nagromadzonym w organizmie. W naturalnych warunkach jeż żyje około 5 lat, w hodowli - nawet do 10 lat.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="borsuk.mp3"
                   relayId="relay7"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1">Borsuk </a>
                <input type="hidden" value="Borsuk, czy też jaźwiec, wszystkożerny drapieżnik, uwielbiający przebywać w pobliżu terenów podmokłych i wody. Posiada on wydzielający bardzo nieprzyjemną woń gruczoł zapachowy, który służy do znaczenia terytorium oraz sygnalizowania gotowości do rozmnażania. Borsuki budują podziemne nory-schronienia o bardzo skomplikowanym układzie korytarzy i komór, w których przesiadują za dnia, by dopiero po zmierzchu wybrać się na żerowanie. Z nastaniem mrozów zasypiają w norze, jednak w dniach ocieplenia budzą się i wychodzą, by coś przekąsić. Mimo to, w czasie zimowania borsuk żyje głównie nagromadzonym w organizmie tłuszczem, przez co traci na wadze do 7 kg. Borsuk, czy też jaźwiec, wszystkożerny drapieżnik, uwielbiający przebywać w pobliżu terenów podmokłych i wody. Posiada on wydzielający bardzo nieprzyjemną woń gruczoł zapachowy, który służy do znaczenia terytorium oraz sygnalizowania gotowości do rozmnażania. Borsuki budują podziemne nory-schronienia o bardzo skomplikowanym układzie korytarzy i komór, w których przesiadują za dnia, by dopiero po zmierzchu wybrać się na żerowanie. Z nastaniem mrozów zasypiają w norze, jednak w dniach ocieplenia budzą się i wychodzą, by coś przekąsić. Mimo to, w czasie zimowania borsuk korzysta głównie z nagromadzonego w organizmie tłuszczu, przez co traci na wadze do 7 kg.
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="zawilecgajowy.mp3"
                   relayId="relay8"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1">Zawilec Gajowy </a>
                <input type="hidden" value="
                Zawilec gajowy, zwany też dawniej niestrętkiem, należy do najgęściej rosnących roślin lasów liściastych. Dzięki rozrastaniu się cienkimi kłączami tuż pod powierzchnią gleby, tworzy na wiosnę szybko powiększające się skupiska, często wręcz pokrywa zwartymi łanami wielkie powierzchnie, wypełniając bezbarwny zimowy krajobraz lasu zielono-białym dywanem.
                "/>
            </li>
        </ul>
        <ul class="expanders">
            <p class="dispNone">Ekspander 2 0x22 szyna 2 0x01</p>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="zawileczolty.mp3"
                   relayId="relay1"
                   expander="0x22 0x00 "
                   external="true"
                   pin="1">Zawilec Żółty</a>
                <input type="hidden" value="
Zawilec żółty to bylina z rodziny jaskrowatych pospolita na całym niżu kraju, przy czym występuje rzadziej od zawilca gajowego. Rozmnaża się przez podział kłączy oraz z nasion, zarastając często całymi kępami wilgotne lasy i zarośla. Kwitnie od marca do maja, a jego kwiaty w ciągu dnia obracają się za słońcem, w nocy i w czasie złej pogody zamykają się. Cała roślina jest lekko trująca.
                 "/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="ziarnoplonwiosenny.mp3"
                   relayId="relay2"
                   expander="0x22 0x00 "
                   external="true"
                   pin="1">Ziarnopłon wiosenny </a>
                <input type="hidden" value="Ziarnopłon wiosenny to jaskier, występujący pospolicie w lasach liściastych i na wilgotnych łąkach całego kraju. Łodyga ziarnopłonu płoży się po ziemi, a od marca do maja pojawiają się na niej żółte kwiaty. Cała roślina, jak wszystkie jaskry, jest trująca. Zioła wykonane z ziarnopłonu mają jednak pewne właściwości lecznicze - dawniej używane były w medycynie ludowej do lecznia brodawek i hemoroidów.
                "/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="szczawikzajeczy.mp3"
                   relayId="relay3"
                   expander="0x22 0x00 "
                   external="true"
                   pin="1">Szczawik Zajęczy</a>
                <input type="hidden" value="Szczawik zajęczy to niewysoka roślina o pełzającym kłączu, z którego wyrastają podobne do koniczyny sercowate liście i białe kwiaty z fioletowymi żyłkami i żółtą plamą u nasady płatka. Rośnie pospolicie w całym kraju, najchętniej w wilgotnych lasach, zrębach, zaroślach, często też na starych pniach drzew. To roślina o jadalnych, kwaskowatych liściach o właściwościach leczniczych - zawierają m.in. witaminę C.
                "/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="miodunkacma.mp3"
                   relayId="relay4"
                   expander="0x22 0x00 "
                   external="true"
                   pin="1">Miodunka ćma</a>
                <input type="hidden" value="
Miodunka ćma to roślina wieloletnia z rodziny ogórecznikowatych, w kraju występująca pospolicie w lasach liściastych i zaroślach, zwłaszcza nadrzecznych. Zakwita i rozwija liście wczesną wiosną, jeszcze przed wypuszczeniem liści przez drzewa, pod którymi rośnie. Kwiaty zapylane są przez błonkówki. Jest rośliną leczniczą, wpływającą korzystnie na drogi oddechowe.
                "/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="przylaszczkapospolita.mp3"
                   relayId="relay5"
                   expander="0x22 0x00 "
                   external="true"
                   pin="1">Przyłaszczka pospolita</a>
                <input type="hidden" value="Przylaszczka pospolita z rodziny jaskrowatych to roślina wieloletnia, osiągająca nawet do stu lat. W Polsce występuje dość powszechnie w lasach liściastych. Jej liście są zimozielone - pozostają żywe do przedwiośnia, co znacznie przyspiesza rozwój rośliny; już od marca z pączków uformowanych jesienią roku poprzedniego rozwijają się kwiaty; w tym czasie więdną stare liście, a na ich miejsce wyrastają świeże. Nasiona roznoszone są przez mrówki. Jest to roślina trująca w większej ilości, mimo to jej liście stosowano dawniej jako surogat herbaty. Przylaszczka dzięki efektownym kwiatom pojawiającym się tuż po zimie jest rośliną lubianą i obecną w folklorze i tradycjach wielu krajów, zwłaszcza skandynawskich. Przypisywane jej też były magiczne właściwości - ziele noszone w woreczku przy kobiecie miało jej zagwarantować miłość mężczyzny.
                "/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="mrowkarudnica.mp3"
                   relayId="relay6"
                   expander="0x22 0x00 "
                   external="true"
                   pin="1">Mrówka rudnica </a>
                <input type="hidden" value="
                Mrówka rudnica to pospolity owad leśny, żyjący głównie w lasach iglastych. Mrowisko rudnicy składa się z części nadziemnej - kopca o wysokości do 1 m - i podziemnej, sięgającej do 2 m. W jednym mrowisku może żyć nawet 100 tysięcy mrówek. Dzielą się one na trzy kasty: bezpłciowe robotnice, samicę (królową) i samce. Wszelkie prace wykonują robotnice, królowa jedynie składa jaja - dziennie nawet do 300. W przypadku zagrożenia mrowiska grupy robotnic pryskają kwasem mrówkowym w intruza. Odżywiają się drobnymi zwierzętami, głównie owadami i ich larwami, które transportują do mrowiska; zjadają też chętnie spadź wydzielaną przez mszyce. Mrówki odgrywają ważną rolę w lasach - usuwają martwe szczątki zwierząt, pełniąc funkcję 'czyścicieli' lasu; mrówki z jednego mrowiska zabijają też rocznie ok. 50 tysięcy larw owadów.
                "/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1 hidden-element"
                   audio="kokoryczpusta.mp3"
                   relayId="relay7"
                   expander="0x22 0x00 "
                   external="true"
                   pin="1">Kokorycz pusta </a>
                <input type="hidden" value="Kokorycz pusta z rodziny dymnicowatych jest dość pospolita na niżu, w Karpatach i Sudetach aż po regiel dolny; rośnie w cienistych żyznych lasach liściastych. W kwiatach, pojawiających się od końca marca, znajduje się nektar, do którego mogą się jednak dostać tylko owady o długich trąbkach. Nasiona kokoryczy zaopatrzone są w elajosomy, czyli obfite w tłuszcze wyrostki, spożywane przez mrówki, które przenosząc je do mrowiska rozsiewają nasiona. Kokorycz pusta, choć jest rośliną trującą, znana jest przez jej lecznicze, kojące działanie na suchą, popękaną skórę, np. w przypadku egzemy.
                "/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay8"
                   expander="0x22 0x00 "
                   external="true"
                   pin="1"> </a>
                <input type="hidden" value=""/>
            </li>
        </ul>

        <div class="rasp__wrapper">
            <ul class="expanders">
                <li>
                    <a href="#" class="expanders__relay rasp__defaults rasp-custom-button relayexp1"
                       audio="dragowina.mp3"
                       relayId="relay8"
                       expander=""
                       pin="1"> Drągowina</a>
                    <input type="hidden" value="
Po tyczkowinie, las przechodzi w fazę drągowiny. Etap ten trwa od około 40 do 60 roku życia drzew – w tym okresie kończy się ich wzmożony wzrost, a zaczyna się szybszy przyrost na grubość. Następuje już rozluźnienie zwarcia koron, dzięki czemu światło dociera w głąb lasu, umożliwiając roślinności wzrost. Na ubogiej, piaszczystej glebie borów sosnowych są jednak w stanie przetrwać jedynie najbardziej pionierskie gatunki roślin.
Drągowina stanowi miejsce schronienia wielu ptaków, w tym dzięciołów, które „leczą” sosny, wyjadając szkodniki oraz wykuwają dziuple, które stają się domem dla innych gatunków ptaków oraz nadrzewnych gryzoni. Niedobór dziupli leśnicy uzupełniają skrzynkami lęgowymi – każdy gatunek wymaga odpowiednio dobranego rozmiaru skrzynki, muszą też one posiadać otwór o właściwej średnicy. Bardzo ważną funkcję „czyścicieli” lasów odgrywają mrówki, usuwające martwe szczątki zwierząt i zjadające larwy szkodliwych dla lasu owadów. Również leśnicy chronią drzewa przed szkodnikami. Monitorują ich ilość, umieszczając w lesie pułapki feromonowe, stosując na drzewach tzw. opaski lepowe, do których przyklejają się szkodniki owadzie wędrujące po pniu, czy też wykładając drzewa pułapkowe służące do zwabiania i niszczenia chrząszczy i ich larw.

				" class="text-to-append dispNone"/>
                </li>
            </ul>

            <a href="#" class="rasp__defaults expanders__relay" id="switchAllOn">Podświetl Wszystko</a>
            <a href="#" class="rasp__defaults expanders__relay" id="switchAllOff">Wyłącz wszystko</a>
            <a href="#" class="rasp__defaults expanders__relay media-show" id="desktopon">Włącz pulpit</a>
            <a href="#" class="rasp__defaults expanders__relay media-show" id="desktopoff">Wyłącz pulpit</a>
        </div>
    </div>

@stop
