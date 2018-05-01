@extends('layouts.default')
@section('content')
<div class ="container">
	<h3 class="title_">Hodowla lasu</h3>
	<div class="custom-text" id="custom-text">

	</div>
<ul class="expanders">
		<p class="dispNone">Ekspander 3 0x24 szyna 1 0x00</p>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio="hodowlalasu.mp3"
					relayId="relay1" 
					expander="0x24 0x01 "
					external="false" 
					pin="1">ogólne</a>
			<input  type="hidden" value="

Lasy Nadleśnictwa stanowią głównie bory sosnowe posadzone po latach 20-tych, po katastrofalnej gradacji strzygonii choinówki - motyla, którego gąsienice zniszczyły wielkie obszary Puszczy Noteckiej. Sosna zajmuje dziś ponad 88% powierzchni leśnej - te wielkie połacie sośnin są bardzo podatne na działanie szkodników oraz pożary, dlatego też w dzisiejszych czasach leśnicy starają się urozmaicać gatunkowo następne pokolenia lasu - zwiększają oni w ten sposób odporność lasów. Takie działanie, polegające na odtwarzaniu i wzbogacaniu istniejących lasów zwane jest odnawianiem lasu, za to tworzenie nowych lasów to zalesianie. Są to podstawowe cele hodowli lasu. Leśnicy hodowlę zaczynają od zbioru nasion, które częściowo przechowują aby wysiać je wiosną, a częściowo wysiewają jeszcze latem lub jesienią, w szkółce leśnej, by wyrosły z nich sadzonki. Wysadzają je w lesie - każdego roku w Polsce leśnicy sadzą ponad 500 mln drzew; w samym Nadleśnictwie Krucz sadzi się ok. dwóch milionów drzewek rocznie, z czego 75 % to sosny, a pozostałe to brzoza, dąb, buk, olcha, świerk, lipa i inne gatunki. Młody, nowo założony las nazywa się uprawą leśną. Okres uprawy obejmuje czas od posadzenia sadzonek do momentu tzw. zwarcia, gdy boczne gałęzie drzewek zaczną się stykać – zwykle dzieje się to po ok. 10 latach. Uprawy leśne wymagają opieki, którą nazywa się pielęgnowaniem lasu; prace te polegają m. in. na spulchnianiu gleby, niszczeniu chwastów, przerzedzaniu zbyt gęstych siewów czy usuwaniu chorych drzewek. 

			"/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay2" 
					expander="0x24 0x01 " 
					external="false"
					pin="1"></a>
			<input  type="hidden" value=""/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay3" 
					expander="0x24 0x01 " 
					external="false"
					pin="1"></a>
			<input  type="hidden" value="Szeliniak sosnowiec"/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay4" 
					expander="0x24 0x01 " 
					external="false"
					pin="1"></a>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay5" 
					expander="0x24 0x01 " 
					external="false"
					pin="1"></a>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay6" 
					expander="0x24 0x01 " 
					external="false"
					pin="1"></a>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay7" 
					expander="0x24 0x01 " 
					external="false"
					pin="1"></a>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay8" 
					expander="0x24 0x01 " 
					external="false"
					pin="1"></a>
	</li>
</ul>
<ul class="expanders">
	<p class="dispNone">Ekspander 1 0x20 szyna 1 0x00</p>
	<li>
		<a href="#" class="expanders__relay relayexp1"
		   audio="chrabaszczmajowy.mp3"
		   relayId="relay1"
		   expander="0x20 0x01 "
		   external="true"
		   pin="1">Chrabąszcz Majowy</a>
		<input  type="hidden" value="
Chrabąszcz majowy to duży chrząszcz z rodziny żukowatych. Żywi się liśćmi różnych drzew liściastych. Jego larwy, nazywane pędrakami, mają silny, gryzący aparat gębowy, który umożliwia im żerowanie na korzeniach roślin zielnych, krzewów i drzew. Mogą one w ten sposób uszkadzać system korzeniowy młodych roślin - z punktu widzenia człowieka są więc szkodnikami szkółek, upraw oraz trawników. Pełny rozwój chrabąszcza od jaja do imago trwa 4-5 lat. Dorosłe osobniki i pędraki zimują w glebie na głębokości około 1 m. Jeszcze na początku XX w. we Francji i Niemczech przygotowywano zupę z chrabąszczy majowych
		"/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1"
		   audio="szeliniaksosnowy.mp3"
		   relayId="relay2"
		   expander="0x20 0x01 "
		   external="true"
		   pin="1">Szeliniak sosnowiec</a>
		<input  type="hidden" value="
Szeliniak sosnowy, chrząszcz z rodziny ryjkowcowatych, to szkodnik młodych sosen i świerków. Występuje pospolicie w młodnikach, ale też w szkółkach drzew iglastych. Każda samica składa w korzeniach młodego drzewa do 60 jaj; larwy wylęgają się już po 2-3 tygodniach i przepoczwarzają się jeszcze w tym samym roku lub po przezimowaniu. Dorosłe osobniki osiągają długość do 15 mm i żyją 2-3 lata. Chrząszcze żerują na korzeniach oraz pędach młodych drzew - zjadają korę i łyko; larwy żywią się samym łykiem, drążąc korytarze pod korą - w efekcie drzewka przestają rosnąć i obumierają; w ich korzeniach można znaleźć długie tuneliki, wypełnione trocinami i odchodami larw.
		"/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1"
					audio="borowkabrusznica.mp3"
					relayId="relay3"
					expander="0x20 0x01 "
					external="true"
					pin="1">Borówka Brusznica</a>
			<input  type="hidden" value="Borówka brusznica - znana u nas także pod nazwą borówki czerwonej. W kraju można ją spotkać w lasach sosnowych, na obrzeżach dostatecznie naświetlonych leśnych polan. Ze względu na ich cierpki smak, nie są zbyt chętnie spożywane na surowo, wykorzystuje się je jednak do produkcji przetworów, stanowiących świetny dodatek do mięsnych potraw. Owoce borówki są cenne ze względu na wysoką zawartość witamin i właściwości lecznicze. Borówka brusznica - znana u nas także pod nazwą borówki czerwonej. W kraju można ją spotkać w suchych borach sosnowych, świerkowych, wrzosowiskach, na obrzeżach dostatecznie naświetlonych leśnych polan. Ze względu na ich cierpki smak, nie są zbyt chętnie spożywane na surowo, wykorzystuje się je jednak do produkcji przetworów. Znakomita w galaretce z dodatkiem gruszek, skórką z pomarańczy i chrzanem jako świetny dodatek do ciemnych mięs – dziczyzny. Owoce borówki są cenne ze względu na wysoką zawartość witamin i właściwości lecznicze."
			class="text-to-append dispNone" />
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio="zajac.mp3"
					relayId="relay4"
					expander="0x20 0x01 "
					external="true"
					pin="1">Zając</a>
			<input  type="hidden" value="Zając szarak to roślinożerny ssak występujący na terenie całej Polski, przy czym jego liczebność wynosi około 0,5 mln osobników i systematycznie maleje. Zając lubi przede wszystkim otwarte przestrzenie: łąki czy pola uprawne - w takich miejscach potrafi biegać z prędkością nawet 70 km/h. Nie kopie nor, śpi natomiast w wyciśniętych w ziemi nieckach, zwanych kotlinkami. Zając prowadzi samotniczy tryb życia i jest aktywny o świcie i zmierzchu. W lecie futro o szarej barwie pozwala na maskowanie się wśród gęstwiny traw - w zimie za to staje się jaśniejsze i gęstsze.
		" class="text-to-append dispNone" />
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1 hidden-element" 
					audio="myszlesna.mp3"
					relayId="relay5"
					expander="0x20 0x01 "
					external="true"
					pin="1">Mysz Leśna</a>
			<input  type="hidden" value="Mysz leśna, jak sama nazwa na to wskazuje, jest najbardziej typowym mieszkańcem lasów - przede wszystkim mieszanych i liściastych, ale także ogrodów i parków. Nazywana jest też myszą wielkooką, gdyż ze względu na wybitnie nocny tryb życia, charakteryzuje się dużymi, nieco wyłupiastymi czarnymi oczami. Poruszając się po ściółce leśnej, w której żyje, robi długie susy niczym mały kangur. Świetnie radzi sobie również na drzewach, a także w wodzie. Nory, które wykopuje, mogą być głębokie nawet na 1,5 metra. Podstawę jej pokarmu stanowią nasiona drzew, lubi także podbierać jaja z ptasich gniazd, czy zjadać owady. Ogryza też młode drzewka i krzewy, powodując szkody w szkółkach leśnych. Mieszkańcy domów położonych blisko lasu dobrze znają tego gryzonia, który w poszukiwaniu pokarmu zagląda do nich jesienią.
"/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio="sojka.mp3"
					relayId="relay6"
					expander="0x20 0x01 "
					external="true"
					pin="1">Sójka</a>
			<input  type="hidden" value="Sójka zwyczajna z rodziny krukowatych występuje średnio licznie w lasach liściastych i mieszanych, ale też w dużych parkach, sadach i ogrodach. Gniazdo wije z cienkich patyków w koronie drzewa. Sójka pełni funkcję 'strażnika lasu' - zaniepokojona odzywa się ostrym skrzekiem, co alarmuje inne zwierzęta. Zjada drobne kręgowce, owady, jaja innych ptaków, a także pokarm roślinny - szczególnie przepada za żołędziami, które gromadzi w 'spiżarniach' w ziemi, dziupli czy szczelinie drzewa. Polskie populacje są raczej osiadłe, jedynie w latach nieurodzaju żołędzi krajowe sójki podejmują stadne migracje."
			class="text-to-append dispNone"/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio="zieba.mp3"
					relayId="relay7"
					expander="0x20 0x01 "
					external="true"
					pin="1">Zięba</a>
			<input  type="hidden" value="Zięba zwyczajna zamieszkuje wszelkie typy zadrzewień. Samca można odróżnić od samicy po upierzeniu - jest ono barwniejsze i bardziej kontrastowe niż u samicy. Zięba żywi się pokarmem zarówno roślinnym, jak i zwierzęcym - w zależności od pory roku zjada: kiełki i pączki - wiosną; owady, ich larwy i pajęczaki - latem lub nasiona i jagody - w sezonie jesienno-zimowym. Śpiew tego ptaka uznawany jest za jeden z najładniejszych wśród polskich gatunków, przy czym melodie zięb z poszczególnych regionów nieco się różnią i są przekazywane z pokolenia na pokolenie.
			" class="text-to-append dispNone"/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1 hidden-element" 
					audio="swiergotekdrzewny.mp3"
					relayId="relay8"
					expander="0x20 0x01 "
					external="true"
					pin="1">Świergotek drzewny</a>
			<input  type="hidden" value="Świergotek drzewny, z rodziny pliszkowatych, występuje średnio licznie w różnych lasach całego kraju. Gniazdo z traw i liści buduje w wygrzebanym w ziemi dołku pod osłoną traw. Pokarm zbiera z ziemi - są to drobne owady, ale też różne części roślin. Samce świergotka możemy ujrzeć na drzewie, gdy wykonują swoją pieśń, wzlatując i opadając na wierzchołek drzewa. Ptaki te zimują w południowej Europie i w Afryce.
			" class="text-to-append dispNone"/>
	</li>
</ul>

<ul class="expanders">
		<p class="dispNone">Ekspander 1 0x20 szyna 2 0x01</p>
	<li>
		<a href="#" class="expanders__relay relayexp1"
		   audio="trznadel.mp3"
		   relayId="relay1"
		   expander="0x20 0x00 "
		   external="true"
		   pin="1">Trznadel</a>
		<input  type="hidden" value="Trznadel zwyczajny lub żółtobrzuch obok skowronka jest najpospolitszym ptakiem terenów otwartych. Gniazdo wije w płytkim zagłębieniu w ziemi pod osłoną krzewu lub traw. Często śpiewa na czubkach drzew, na liniach energetycznych i innych wyeksponowanych miejscach. Zjada głównie nasiona, a w okresie lęgowym również bezkręgowce. Zimą trznadle zbierają się w stada, w których mogą znaleźć się inne gatunki.
			" class="text-to-append dispNone"/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1"
		   audio="gasiorek.mp3"
		   relayId="relay2"
		   expander="0x20 0x00 "
		   external="true"
		   pin="1">Gąsiorek</a>
		<input  type="hidden" value="Gąsiorek, z rodziny dzierzb, występuje na całym niżowu kraju. Polska nazwa 'Gąsiorek' pochodzi od jego charakterystycznego głosu zbliżonego do głosu gęsi - tzw. gęgania. Samiec jest łatwo rozpoznawalny po czarnej masce na popielatej głowie. Gąsiorek zimuje w Afryce, skąd powraca w maju i od razu zabiera się za przygotowania do lęgu - znajduje na skraju lasu nieduże, najlepiej kolczaste drzewko i w jego koronie buduje swoje gniazdo. Jest aktywny za dnia, poluje wtedy głównie na owady, ale też małe ptaki, gryzonie i jaszczurki. Jak na swe niewielkie rozmiary potrafi schwytać zaskakująco duże ofiary, ledwie ustępujące mu wielkością.
			" class="text-to-append dispNone"/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1 hidden-element"
					audio="poklaskwa.mp3"
					relayId="relay3"
					expander="0x20 0x00 "
					external="true"
					pin="1">Pokląskwa</a>
			<input  type="hidden" value="Pokląskwa z rodziny muchołówkowatych występuje na niżu kraju. Lubi otwarte, wilgotne tereny, przede wszystkim podmokłe łąki, bagna, czy torfowiska. Gniazdo buduje w płytkim dołku wśród gęstej roślinności, często na skarpie. Pokląskwę łatwo zauważyć, gdyż chętnie siada na szczycie krzaka lub wysokiej rośliny na łące i wabi uporczywym śpiewem, tzw. kląskaniem -stąd polska nazwa. Zjada drobne bezkręgowce zbierane z ziemi lub łowione w locie oraz rzadziej nasiona i jagody. Zimuje w środkowej i wschodniej Afryce.
			" class="text-to-append dispNone"/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio="bialorzytka.mp3"
					relayId="relay4"
					expander="0x20 0x00 "
					external="true" 
					pin="1">Białorzytka</a>
			<input  type="hidden" value="Białorzytka zwyczajna to ptak z rodziny muchołówek, którego można spotkać na otwartych, niezadrzewionych i kamienistych terenach. Ptak ten wykorzystuje skały i kamienie, by ukryć w ich szczelinach gniazdo. Żywi się owadami, larwami i innymi drobnymi bezkręgowcami zbieranymi na ziemi, nie gardzi też owocami i jagodami. Białorzytka migruje na duże odległości - zimuje w tropikalnej Afryce. W kraju jest bardzo nieliczna.
			" class="text-to-append dispNone"/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1 hidden-element" 
					audio="turkawka.mp3"
					relayId="relay5"
					expander="0x20 0x00 "
					external="true"					
					pin="1">Turkawka</a>
			<input  type="hidden" value="Turkawka to średnio liczny w naszym kraju gołąb, zamieszkujący obrzeża lasów różnego typu. Gniazdo z cienkiej warstwy gałązek buduje niewysoko w rozwidleniu gałęzi drzewa lub krzewu. Preferuje dietę roślinną –  zjada zebrane z ziemi nasiona, pączki i owoce. Zimuje w zachodniej i środkowej Afryce.
			" class="text-to-append dispNone"/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1 hidden-element" 
					audio="lerka.mp3"
					relayId="relay6"
					expander="0x20 0x00 "
					external="true"
					pin="1">Lerka</a>
			<input  type="hidden" value="Lerka, czy też skowronek borowy, to nasz najmniejszy skowronek, występujący nielicznie na obszarze całego kraju wraz z niższymi górami. Zasiedla suche bory sosnowe z polanami lub przynajmniej sąsiadujące z terenami otwartymi, gdyż to właśnie tam, w zagłębieniu w ziemi wśród gęstej roślinności, ukrywa swoje gniazdo. Lerki to jedne z nielicznych ptaków leśnych, które możemy usłyszeć śpiewające nocą. Żywią się drobnymi owadami i innymi bezkręgowcami, choć podczas wędrówek na zimowiska zjadają nawet nasiona.
			" class="text-to-append dispNone"/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio="skowronek.mp3"
					relayId="relay7"
					expander="0x20 0x00 "
					external="true" 
					pin="1">Skowronek</a>
			<input  type="hidden" value="Skowronek jest jednym z najbardziej znanych ptaków dzięki swej powszechności występowania oraz donośnemu śpiewowi, który rozbrzmiewa wiosną niemal nad każdym polem, łąką lub pastwiskiem. Samica buduje gniazdo z traw w płytkim dołku bezpośrednio na ziemi, dobrze ukrywając je wśród niskiej roślinności, np. w jarym zbożu. Dieta skowronków jest w równym stopniu zwierzęca, co roślinna. Zimują one w basenie Morza Śródziemnego. Skowronek niegdyś był zwierzęciem hodowanym w domach i zjadanym; w Europie Środkowej zostało to zabronione, ale w niektórych krajach na południu nadal poluje się na te ptaki.
			" class="text-to-append dispNone"/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio="myszolow.mp3"
					relayId="relay8"
					expander="0x20 0x00 "
					external="true" 
					pin="1">Myszołów</a>
			<input  type="hidden" value="Szybującego i krążącego myszołowa można rozpoznać po stosunkowo długich i szerokich skrzydłach oraz po szeroko rozpostartym ogonie. Barwa upierzenia jest bardzo zmienna, od ciemnobrunatnego do przeważającego białego. Samice są nieco większe od samców, jednak nie różnią się ubarwieniem. Można go ujrzeć na obszarach rolniczych z kępami pojedynczo stojących drzew, w kompleksach leśnych czy też w większych podmiejskich parkach. Myszołów poluje zazwyczaj z zasiadki, czatując na wyższym punkcie obserwacyjnym, rzadziej z niskiego lotu patrolowego, zawisając czasami w powietrzu. Jego głównym pokarmem są gryzonie, zwłaszcza norniki. Uzupełnieniem diety są małe ptaki, gady oraz płazy. Zimą myszołowy odżywają się także padliną. Rozpiętość skrzydeł myszołowa może dochodzić do 130 cm. Objęty jest ochroną gatunkową.
			" class="text-to-append dispNone"/>
	</li>
</ul>

<ul class="expanders">
		<p class="dispNone">Ekspander 2 0x22 szyna 1 0x00</p>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay1" 
					expander="0x22 0x00 " 
					external="false"
					pin="1"></a>
			<input  type="hidden" value=""/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay2" 
					expander="0x22 0x00 " 
					external="false"
					pin="1"></a>
			<input  type="hidden" value=""/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay3" 
					expander="0x22 0x00 " 
					external="false"
					pin="1"></a>
		<input  type="hidden" value=""/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay4" 
					expander="0x22 0x00 " 
					pin="1"> </a>
			<input  type="hidden" value=""/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay5" 
					expander="0x22 0x00 " 
					pin="1"> </a>
			<input  type="hidden" value=""/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay6" 
					expander="0x22 0x00 " 
					pin="1"> </a>
			<input  type="hidden" value=""/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay7" 
					expander="0x22 0x00 " 
					pin="1"> </a>
			<input  type="hidden" value=""/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay8" 
					expander="0x22 0x00 " 
					pin="1"> </a>
			<input  type="hidden" value=""/>
	</li>
</ul>
	<ul class="expanders">
		<p class="dispNone">Ekspander 2 0x22 szyna 2 0x01</p>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay1" 
					expander="0x22 0x01 " 
					external="false"
					pin="1"></a>
			<input  type="hidden" value=""/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay2" 
					expander="0x22 0x01 " 
					pin="1"> </a>
			<input  type="hidden" value=""/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay3" 
					expander="0x22 0x01 " 
					external="false"
					pin="1"></a>
			<input  type="hidden" value=""/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay4" 
					expander="0x22 0x01 " 
					external="false"
					pin="1"></a>
			<input  type="hidden" value=""/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay5" 
					expander="0x22 0x01 " 
					external="false"
					pin="1"></a>
			<input  type="hidden" value=""/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay6" 
					expander="0x22 0x01 " 
					pin="1"> </a>
			<input  type="hidden" value=""/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay7" 
					expander="0x22 0x01 " 
					pin="1"> </a>
			<input  type="hidden" value=""/>
	</li>
	<li>
		<a href="#" class="expanders__relay relayexp1" 
					audio=".mp3"
					relayId="relay8" 
					expander="0x22 0x01 " 
					pin="1"> </a>
			<input  type="hidden" value=""/>
	</li>
</ul>

	<div class="rasp__wrapper">
		<ul class="expanders">
			<li>
				<a href="#" class="expanders__relay rasp__defaults rasp-custom-button relayexp1"
				   audio=".mp3"
				   relayId="relay8"
				   expander=""
				   pin="1"> </a>
				<input  type="hidden" value="" class="text-to-append dispNone" />
			</li>
		</ul>

		<a href="#" class="rasp__defaults expanders__relay" id="switchAllOn">Podświetl Wszystko</a>
		<a href="#" class="rasp__defaults expanders__relay" id="switchAllOff">Wyłącz wszystko</a>
		<a href="#" class="rasp__defaults expanders__relay media-show" id="desktopon">Włącz pulpit</a>
		<a href="#" class="rasp__defaults expanders__relay media-show" id="desktopoff">Wyłącz pulpit</a>
	</div>
</div>

@stop
