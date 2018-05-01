@extends('layouts.default')
@section('content')
<div class ="container">
	<h3 class="title_">LAS POCZĄTEK ZIMY</h3>
	<div class="custom-text" id="custom-text">

	</div>
	<p class="dispNone">
		0x24  - Rampa
		0x20 - Rampa
		0x22 - pulpit 8 pkt
	</p>
	<ul class="expanders">
		<p class="dispNone">Ekspander 3 0x24 szyna 1 0x00</p>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="glogdwuszyjkowy.mp3"
						relayId="relay1"
						expander="0x22 0x01 "
						external="true"
						pin="1">głóg</a>
				<input  type="hidden" value="Głóg dwuszyjkowy to rodzimy krzew z rodziny różowatych, w Polsce występujący pospolicie na całym niżu oraz w niższych położeniach górskich. Jest odporny na suszę i ciężkie warunki klimatyczne, zarasta widne lasy, zarośla, polany. Ma formę krzewu do 4 m bądź niewielkiego drzewa dorastającego do 8 metrów wysokości; rośnie bardzo powoli, ale może dożyć nawet 200 lat. Miododajne białe kwiaty pojawiają się w maju - są one cenionym surowcem zielarskim o działaniu poprawiającym pracę serca i uspokajającym. Z owoców można robić nalewki, wina, dżemy i herbatki, mają one jednak słabsze działanie.
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="dzikaroza.mp3"
						relayId="relay2"
						expander="0x22 0x01 "
						external="true"
						pin="1">dzika róża</a>
						<input  type="hidden" value="Dzika róża, zwana też psią różą, to pospolity ciernisty krzew, porastający zarośla, skraje lasów i przydroża całego kraju. Kwitnie od maja do lipca, a jej nasiona są rozsiewane przez zwierzęta. Zarówno aromatyczne kwiaty, jak i owoce tego krzewu od bardzo dawna służą ludziom do leczenia niektórych schorzeń oraz są wykorzystywane w kuchni - szczególnie popularna jest konfitura używana do nadziewania pączków, otrzymywana z płatków dzikiej róży.
						" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio="sarna.mp3"
			   relayId="relay3"
			   expander="0x22 0x01 "
			   external="true"
			   pin="1">sarna</a>
			<input  type="hidden" value="Kozioł, samiec sarny europejskiej, zwany również rogaczem, należy do ssaków parzystokopytnych. Sarna jest najmniejszym przedstawicielem jeleniowatych w Europie. Żyje na terenach lesistych, choć w ostatnich latach coraz częściej spotyka się stada żyjące na polach. Wyróżniono nawet ekotyp sarny, zwanej polną. W lasach sarna żyje pojedynczo, podczas gdy na uprawach polnych zbiera się w rudle, czyli stada, liczące nawet po kilkadziesiąt osobników. Sarny, na skutek działalności człowieka, często opuszczają lasy. Stadny tryb życia na otwartych przestrzeniach gwarantuje im większe bezpieczeństwo. Smukłe kończyny sarny zwane są cewkami. Sierść, czyli tzw. suknia zimowa jest szarawa, letnia zaś – ruda. Pożywienie sarny stanowią: zioła, młode liście, mech, porosty, trawy oraz niektóre jagody i grzyby. Kozioł, samiec sarny europejskiej, zwany również rogaczem, należy do ssaków parzystokopytnych. Sarna jest najmniejszym przedstawicielem jeleniowatych w Europie. Żyje na terenach lesistych, choć w ostatnich latach coraz częściej spotyka się stada żyjące na polach. Wyróżniono nawet ekotyp sarny, zwanej polną. W lasach sarna żyje pojedynczo, podczas gdy na uprawach polnych zbiera się w rudle, czyli stada, liczące nawet po kilkadziesiąt osobników. Stadny tryb życia na otwartych przestrzeniach gwarantuje im większe bezpieczeństwo. Smukłe kończyny sarny zwane są cewkami. Sierść, czyli tzw. suknia zimowa jest szarawa, letnia zaś – ruda. Pożywienie sarny stanowią: zioła, młode liście, mech, porosty, trawy oraz niektóre jagody i grzyby.
						" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1 hidden-element"
						audio="lis.mp3"
						relayId="relay4"
						expander="0x22 0x01 "
						external="true"
						style="visibility:hidden;"
						pin="1">lis</a>
						<input  type="hidden" value="Lis rudy to jeden z dwóch przedstawicieli dziko żyjących psowatych w Polsce. Aktywny po zmroku, poluje na małe ssaki, ptaki i bezkręgowce. Oprócz tego zjada sporo pożywienia roślinnego. Ten doskonały łowca świetnie pływa i biega z szybkością nawet 40 km/h. Zapasy pokarmu ukrywa starannie pod śniegiem lub liśćmi. Lisy kopią głębokie nory o bardzo rozbudowanych korytarzach, długich nawet do kilkunastu metrów. Służą im one przez wiele kolejnych lat. Lisy posiadają gruczoły zapachowe, których wydzielina pachnie jak fiołki. Dawniej były zmorą wiejskich kurników, dziś coraz częściej korzystają z tego, co zostawia człowiek w śmietnikach. Zdarza się, że przenoszą się w okolice miast, gdzie dużo łatwiej jest znaleźć pokarm i schronienie. W samym Londynie w Wielkiej Brytanii żyje prawdopodobnie około trzech tysięcy lisów. Na lisy poluje się dla pięknego futra, ze względu na szkody czynione wśród drobnej zwierzyny łownej oraz roznoszenie przez nie groźnej choroby – wścieklizny. Lis pospolity to jeden z dwóch przedstawicieli dziko żyjących psowatych w Polsce. Aktywny po zmroku, poluje na małe ssaki, ptaki i bezkręgowce. Oprócz tego zjada sporo pożywienia roślinnego. Ten doskonały łowca świetnie pływa i biega z szybkością nawet 40 km/h. Zapasy pokarmu ukrywa starannie pod śniegiem lub liśćmi. Lisy kopią głębokie nory o bardzo rozbudowanych korytarzach, długich nawet do kilkunastu metrów. Służą im one przez wiele kolejnych lat. Lisy posiadają gruczoły zapachowe, których wydzielina pachnie jak fiołki. Dawniej były zmorą wiejskich kurników, dziś coraz częściej korzystają z tego, co zostawia człowiek w śmietnikach. Zdarza się, że przenoszą się w okolice miast, gdzie dużo łatwiej jest znaleźć pokarm i schronienie. W samym Londynie w Wielkiej Brytanii żyje prawdopodobnie około trzech tysięcy lisów. Na lisy poluje się dla pięknego futra, ze względu na szkody czynione wśród drobnej zwierzyny łownej oraz roznoszenie przez nie groźnej choroby - wścieklizny.
						" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1 hidden-element"
						audio="myszlesna.mp3"
						relayId="relay5"
						expander="0x22 0x01 "
						external="true"
						pin="1">mysz</a>
						<input  type="hidden" value="Mysz leśna, jak sama nazwa na to wskazuje, jest najbardziej typowym mieszkańcem lasów - przede wszystkim mieszanych i liściastych, ale także ogrodów i parków. Nazywana jest też myszą wielkooką, gdyż ze względu na wybitnie nocny tryb życia, charakteryzuje się dużymi, nieco wyłupiastymi czarnymi oczami. Poruszając się po ściółce leśnej, w której żyje, robi długie susy niczym mały kangur. Świetnie radzi sobie również na drzewach, a także w wodzie. Nory, które wykopuje, mogą być głębokie nawet na 1,5 metra. Podstawę jej pokarmu stanowią nasiona drzew, lubi także podbierać jaja z ptasich gniazd, czy zjadać owady. Ogryza też młode drzewka i krzewy, powodując szkody w szkółkach leśnych. Mieszkańcy domów położonych blisko lasu dobrze znają tego gryzonia, który w poszukiwaniu pokarmu zagląda do nich jesienią.
						" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="zajac.mp3"
						relayId="relay6"
						expander="0x22 0x01 "
						external="true"
						pin="1">zajac</a>
				<input  type="hidden" value="Zając szarak to roślinożerny ssak występujący na terenie całej Polski, przy czym jego liczebność wynosi około 0,5 mln osobników i systematycznie maleje. Zając lubi przede wszystkim otwarte przestrzenie: łąki czy pola uprawne - w takich miejscach potrafi biegać z prędkością nawet 70 km/h. Nie kopie nor, śpi natomiast w wyciśniętych w ziemi nieckach, zwanych kotlinkami. Zając prowadzi samotniczy tryb życia i jest aktywny o świcie i zmierzchu. W lecie futro o szarej barwie pozwala na maskowanie się wśród gęstwiny traw - w zimie za to staje się jaśniejsze i gęstsze.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay7"
			   expander="0x22 0x01 "
			   external="true"
			   pin="1"></a>
			<input  type="hidden" value="Gil z rodziny łuszczaków występuje na niżu kraju w borach świerkowych, jodłowych i lasach mieszanych. Najłatwiej rozróżnić płeć gila po upierzeniu brzuszka - samiec ma je czerwonawe, samica brązowawe. U gili występuje nieczęste u innych ptaków zachowanie - poza samcami śpiewają również samice. Gila znamy głównie z okresu zimowego, gdy pojawia się w stadkach na drzewach z owocami; w okresie lęgowym jest za to skryty i trudno go zobaczyć; swoje gniazdo ukrywa wśród gęstych gałęzi, zwykle świerka. Zjada nasiona, pąki, wiosną także bezkręgowce.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay8"
			   expander="0x22 0x01 "
			   external="true"
			   pin="1">paszkot</a>
			<input  type="hidden" value="Paszkot to nasz największy drozd; występuje w całym kraju, choć liczniej w górach. Mimo że w niektórych okolicach nie jest ptakiem rzadkim, zwykle uchodzi uwadze przez płochliwość i dość skryty tryb życia. Zamieszkuje przede wszystkim obrzeża starych i rozległych borów iglastych. Gniazdo buduje w koronie sosny, ale żeruje przeważnie na ziemi; na polanach blisko swojego siedliska szuka bezkręgowców, czasem też nasion. Część paszkotów zimuje w kraju, a pozostałe wędrują niedaleko na południe.
				" class="text-to-append dispNone" />
		</li>
	</ul>
	<ul class="expanders">
		<p class="dispNone">Ekspander 0x24 szyna 2</p>
		<li>
                        <a href="#" class="expanders__relay relayexp1 hidden-element" 
                           audio="gil.mp3"
                           relayId="relay1"
                           expander="0x22 0x00 "
                           external="true"
                           pin="1">gil</a>
                        <input  type="hidden" value="Gil z rodziny łuszczaków występuje na niżu kraju w borach świerkowych, jodłowych i lasach mieszanych. Najłatwiej rozróżnić płeć gila po upierzeniu brzuszka - samiec ma je czerwonawe, samica brązowawe. U gili występuje nieczęste u innych ptaków zachowanie - poza samcami śpiewają również samice. Gila znamy głównie z okresu zimowego, gdy pojawia się w stadkach na drzewach z owocami; w okresie lęgowym jest za to skryty i trudno go zobaczyć; swoje gniazdo ukrywa wśród gęstych gałęzi, zwykle świerka. Zjada nasiona, pąki, wiosną także bezkręgowce. 
                                " class="text-to-append dispNone" />
                </li>
                <li>
                        <a href="#" class="expanders__relay relayexp1"
                           audio="paszkot.mp3"
                           relayId="relay2"
                           expander="0x22 0x00 "
                           external="true"
                           pin="1">paszkot</a>
                        <input  type="hidden" value=" Paszkot to nasz największy drozd; występuje w całym kraju, choć liczniej w górach. Mimo że w niektórych okolicach nie jest ptakiem rzadkim, zwykle uchodzi uwadze przez płochliwość i dość skryty tryb życia. Zamieszkuje przede wszystkim obrzeża starych i rozległych borów iglastych. Gniazdo buduje w koronie sosny, ale żeruje przeważnie na ziemi; na polanach blisko swojego siedliska szuka bezkręgowców, czasem też nasion. Część paszkotów zimuje w kraju, a pozostałe wędrują niedaleko na południe.
			 " class="text-to-append dispNone" />
                </li>

		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="kwiczol.mp3"
						relayId="relay3"
						expander="0x22 0x00 "
						external="true"
						pin="1">kwiczoł</a>
				<input  type="hidden" value="Kwiczoł, z rodziny drozdowatych, to towarzyski i hałaśliwy ptak - nazwę zawdzięcza właśnie swojemu skrzeczącemu śpiewowi. Zamieszkuje niewielkie zadrzewienia, doliny rzek, obrzeża lasów, a coraz częściej miejskie parki. Gniazdo w formie czarki z traw, gałązek i liści buduje w rozwidleniu gałęzi. Ma on rzadki wśród ptaków śpiewających zwyczaj gromadnego atakowania i przeganiania intruzów, nawet znacznie większych od siebie. Zimą kwiczoły skupiają się często w stada liczące po kilkaset osobników, gromadnie obsiadając drzewa i krzewy z owocami. Żywią się bezkręgowcami znajdowanymi na ziemi, a zimą zjadają jagody, najchętniej jałowca.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="wrobel.mp3"
						relayId="relay4"
						expander="0x22 0x00 "
						external="true"
						pin="1">wróbel</a>
				<input  type="hidden" value="Wróbel to pospolity i bardzo liczny ptak ściśle związany z osadami ludzkimi - tylko wyjątkowo gniazduje poza nimi. Zimę spędza w kraju. Gniazdo w kształcie kuli z bocznym wejściem buduje w otworach budynków, dziuplach czy skrzynkach lęgowych. Żeruje zarówno na ziemi, jak i w roślinności, szukając nasion i owadów. Wróbel jest najdłużej związanym z człowiekiem ptakiem, zasiedlającym ludzkie osady już od kilku tysięcy lat.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="kos.mp3"
						relayId="relay5"
						expander="0x22 0x00 "
						external="true"
						pin="1">kos</a>
				<input  type="hidden" value="Kos z rodziny drozdowatych, pierwotnie ptak leśny, obecnie występuje licznie w różnych zadrzewieniach całego kraju, nawet w miastach. Znany jest ze swojego śpiewu godowego, wykonywanego przez samce na wiosnę. Są dość płochliwe i ostrzegają się nawzajem głośnym krzykiem, gdy dostrzegą człowieka. Około 50 lat temu wykształcił się jednak gatunek określany jako miejski - ptaki te nie obawiają się człowieka i żyją w pobliżu osad ludzkich. Gniazdo w formie czarki kosy umieszczają na gałęziach drzew. Pożywienia szukają za to na ziemi - mogą to być ślimaki, owady, dżdżownice, ale też owoce. Kosy miejskie zwykle nie wylatują na zimę, leśne są za to wędrowne i zimują w rejonie śródziemnomorskim. 
			" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="krogulec.mp3"
						relayId="relay6"
						expander="0x22 0x00 "
						external="true"
						pin="1">krogulec</a>
				<input  type="hidden" value="Krogulec z rodziny jastrzębiowatych żyje w gęstych borach iglastych, najliczniej na wschodzie kraju. Swoje gniazdo zakłada na skraju lasu, w pobliżu terenów otwartych. Drapieżny krogulec jest postrachem drobnych ptaków i ssaków; polując, wykorzystuje element zaskoczenia - aby dostać się niepostrzeżenie w pobliże ofiary, kryje się za osłoną, np. murem czy krzakami, po czym błyskawicznie atakuje. Zwany jest wróblarzem, gdyż to wróble najczęściej padają jego ofiarą. Na zimowanie wylatuje do południowej Azji.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="grubodziob.mp3"
						relayId="relay7"
						expander="0x22 0x00 "
						external="true"
						pin="1">grubodziób</a>
				<input  type="hidden" value="Grubodziób z rodziny łuszczaków zamieszkuje strefę umiarkowaną Eurazji. W porze lęgowej jest ptakiem typowo leśnym - przebywa w gnieździe w koronach drzew liściastych, w których trudno go dojrzeć; dopiero jesienią i zimą pojawia się w stadach na otwartych terenach, żerując często na ziemi. Zwany jest pestkojadem, gdyż potrafi wyłuskiwać pestki z owoców, które miażdży wyjątkowo mocnym dziobem, wywierającym nacisk aż do 70 kilogramów! Na wiosnę zjada też pokarm zwierzęcy - gąsienice i inne bezkręgowce.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio="kruk.mp3"
			   relayId="relay8"
			   expander="0x22 0x00 "
			   external="true"
			   pin="1">kruk</a>
			<input  type="hidden" value="Kruk zwyczajny w Polsce jest średnio liczny. Zakłada swoje masywne gniazda z gałęzi i mchów na wierzchołkach drzew iglastych, a czasem nawet na słupach energetycznych; często przerabia siedziby porzucone przez inne ptaki - tak parokrotnie nadbudowane gniazdo może mieć nawet metr wysokości i znaczną wagę. Konkuruje o gniazdo z innymi ptakami np. kaniami. Kruki są wszystkożerne, ale zwykle zjadają pokarm mięsny - nie gardzą nawet padliną. Żerują zwykle na ziemi, używając do łapania ofiary nie tylko dziób, ale też pazury i łapy. Kruki uważane są za bardzo inteligentne oraz skore do zabaw. Przez tysiące lat obrosło wokół nich wiele legend, zarówno pozytywnych, jak i mających mroczny odcień; przez większość kultur bywały przy tym uznawane za ptaki prorocze, zwiastujące przyszłość. Kruk zwyczajny w Polsce jest średnio liczny. Zakłada swoje masywne gniazda z gałęzi i mchów na wierzchołkach drzew iglastych, a czasem nawet na słupach energetycznych; często przerabia siedziby porzucone przez inne kruki - tak parokrotnie nadbudowane gniazdo może mieć nawet metr wysokości i znaczną wagę. Kruki są wszystkożerne, ale zwykle zjadają pokarm mięsny - nie gardzą nawet padliną. Żerują zwykle na ziemi, używając do łapania ofiary nie tylko dziób, ale też pazury i łapy. Kruki uważane są za bardzo inteligentne oraz skore do zabaw. Przez tysiące lat obrosło wokół nich wiele legend, zarówno pozytywnych, jak i mających mroczny odcień; przez większość kultur bywały przy tym uznawane za ptaki prorocze, zwiastujące przyszłość.
				" class="text-to-append dispNone" />
		</li>
		<li>
	</ul>

	<ul class="expanders">
		<p class="dispNone">Ekspander 1 0x20 szyna 1 0x00</p>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio="modraszka.mp3"
			   relayId="relay1"
			   expander="0x24 0x01 "
			   external="false"
			   pin="1">sikorka modra</a>
			<input  type="hidden" value="Modraszka, zwana sikorą modrą, to przepięknie upierzony mały ptaszek. Doskonale komponuje się u niej kolor żółty z błękitnym - modrym (stąd zresztą nazwa gatunku). Preferuje głównie świetliste lasy liściaste i mieszane, rzadziej iglaste, zamieszkiwane również przez dzięcioła dużego, w którego opuszczonych dziuplach gniazduje. Żywi się głównie owadami i pajęczakami, zimą natomiast roślinami, odwiedza też chętnie karmniki, ceniąc przede wszystkim słonecznik, orzeszki ziemne i słoninę. Głos modraszki jest wysoki, przypominający gwizd, podobny do głosów innych przedstawicieli rodziny sikor. Nie jest zagrożona wyginięciem, w kraju jest nawet liczna, podobnie jak wszystkie sikory objęta jest ochroną gatunkową.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="sikorabogatka.mp3"
						relayId="relay2"
						expander="0x24 0x01 "
						external="false"
						pin="1">sikorka bogatka</a>
				<input  type="hidden" value="Sikora bogatka jest największą z naszych sikor i znajduje się pod ścisłą ochroną. Zamieszkuje różnorodne lasy, a także parki i ogrody. Wyróżnia się wyjątkowo bogatym repertuarem głosów. Bogatka potrafi sama wykuć dziuplę, ale tylko w miękkim, spróchniałym drewnie - za gniazdo mogą jej też służyć rurki ogrodzeniowe, skrzynki na listy, a nawet otwory wentylacyjne. Ptak ten spędza zimę w Polsce, przemieszcza się tylko w miejsca, gdzie łatwiej mu znaleźć pokarm - zwykle do miast. Sikorki często widujemy przy karmnikach zajadające słoninę - poza okresem zimowym żywią się owadami.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1 "
						audio="gil.mp3"
						relayId="relay3"
						expander="0x24 0x01 "
						external="false"
						pin="1">Gil</a>
				<input  type="hidden" value="Gil z rodziny łuszczaków występuje na niżu kraju w borach świerkowych, jodłowych i lasach mieszanych. Najłatwiej rozróżnić płeć gila po upierzeniu brzuszka - samiec ma je czerwonawe, samica brązowawe. U gili występuje nieczęste u innych ptaków zachowanie - poza samcami śpiewają również samice. Gila znamy głównie z okresu zimowego, gdy pojawia się w stadkach na drzewach z owocami; w okresie lęgowym jest za to skryty i trudno go zobaczyć; swoje gniazdo ukrywa wśród gęstych gałęzi, zwykle świerka. Zjada nasiona, pąki, wiosną także bezkręgowce.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1 hidden-element"
						audio="gil.mp3"
						relayId="relay4"
						expander="0x24 0x01 "
						external="false"
						pin="1">Gil</a>
				<input  type="hidden" value="Gil z rodziny łuszczaków występuje na niżu kraju w borach świerkowych, jodłowych i lasach mieszanych. Najłatwiej rozróżnić płeć gila po upierzeniu brzuszka - samiec ma je czerwonawe, samica brązowawe. U gili występuje nieczęste u innych ptaków zachowanie - poza samcami śpiewają również samice. Gila znamy głównie z okresu zimowego, gdy pojawia się w stadkach na drzewach z owocami; w okresie lęgowym jest za to skryty i trudno go zobaczyć; swoje gniazdo ukrywa wśród gęstych gałęzi, zwykle świerka. Zjada nasiona, pąki, wiosną także bezkręgowce. 
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay5"
						expander="0x24 0x01 "
						external="false"
						pin="1"></a>
				<input  type="hidden" value="Dzięcioł zielony to najbarwniejszy krajowy dzięcioł, występujący głównie na obrzeżach lasów liściastych środkowej i wschodniej Polski. Ze względu na raczej naziemny tryb życia, dzięcioł ten rzadko bębni - częściej odzywa się donośnym pogwizdywaniem. Dziób ma słabszy niż inne dzięcioły, więc dziuple wykuwa raczej w miękkim drewnie topoli, osiki lub wierzby, skąd wydobywa owady i ich larwy. Chętnie odwiedza mrowiska, z których przy pomocy swojego długiego, lepkiego języka wyjada mrówki; zimą zjada nasiona drzew iglastych, owoce, a także padlinę oraz wieszaną w karmnikach słoninę, za to wiosną często nakłuwa korę brzóz i pije wyciekający sok.
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay6"
						expander="0x24 0x01 "
						external="false"
						pin="1"></a>
				<input  type="hidden" value="Dzięcioł czarny, największy dzięcioł naszego kontynentu, posiada zupełnie czarne ubarwienie piór, za wyjątkiem charakterystycznej, czerwonej „czapeczki” u samców. Do przeżycia wymaga dojrzałych, starych drzew, najlepiej iglastych lub buków, w których wykuwa otwory, poszukując pod korą larw owadów czy mrówek. Dzięki temu zapewnia wielu gatunkom zwierząt dostępność obszernych dziupli. To ważny gatunek parasolowy, czyli osłonowy, co znaczy, że jego ochrona pozwala chronić również szereg innych gatunków, w jakimś stopniu od niego zależnych. Kluczowym zagrożeniem dla istnienia tego ptaka jest usuwanie obumierających i martwych drzew, a także ujednolicanie struktury wiekowej drzewostanów. Dzięcioł czarny, największy dzięcioł naszego kontynentu, posiada zupełnie czarne ubarwienie piór, za wyjątkiem charakterystycznej, czerwonej „czapeczki” u samców. Do przeżycia wymaga dojrzałych, starych drzew, najlepiej iglastych lub buków, w których wykuwa otwory, poszukując pod korą larw owadów czy mrówek. Dzięki temu zapewnia wielu gatunkom zwierząt dostępność obszernych dziupli. To ważny gatunek parasolowy, czyli osłonowy, co znaczy, że jego ochrona pozwala chronić również szereg innych gatunków, w jakimś stopniu od niego zależnych. Z jego dziupli często korzysta sóweczka. Kluczowym zagrożeniem dla istnienia tego ptaka jest usuwanie obumierających i martwych drzew, a także ujednolicanie struktury wiekowej drzewostanów.
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay7"
						expander="0x24 0x01 "
						external="false"
						pin="1"></a>
				<input  type="hidden" value="Jemiołuszka to typowo północny gatunek, zamieszkujący w okresie letnim tajgę - w naszym kraju gości tylko na zimę i spędza ją w zadrzewieniach, parkach i lasach liściastych, w których występują drzewa i krzewy owocowe. To właśnie na nich żeruje podczas zimowiska, zjadając jagody i owoce - m.in. jemioły, skąd wzięła się polska nazwa gatunku. W okresie lęgowym, który spędza na północy, jamiołuszka jest jednak głównie owadożerna.
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay8"
						expander="0x24 0x01 "
						external="false"
						pin="1"></a>
				<input  type="hidden" value="Zając szarak to roślinożerny ssak występujący na terenie całej Polski, przy czym jego liczebność wynosi około 0,5 mln osobników i systematycznie maleje. Zając lubi przede wszystkim otwarte przestrzenie: łąki czy pola uprawne - w takich miejscach potrafi biegać z prędkością nawet 70 km/h. Nie kopie nor, śpi natomiast w wyciśniętych w ziemi nieckach, zwanych kotlinkami. Zając prowadzi samotniczy tryb życia i jest aktywny o świcie i zmierzchu. W lecie futro o szarej barwie pozwala na maskowanie się wśród gęstwiny traw - w zimie za to staje się jaśniejsze i gęstsze.
				" class="text-to-append dispNone"/>
		</li>
	</ul>
	<ul class="expanders">
		<p class="dispNone">Ekspander 1 0x20 szyna 2 0x01</p>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay1"
			   expander="0x20 0x00 "
			   external="false"
			   pin="1"></a>
			<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay2"
						expander="0x21 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay3"
						expander="0x21 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay4"
						expander="0x21 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay5"
						expander="0x21 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay6"
						expander="0x21 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay7"
						expander="0x21 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay8"
						expander="0x21 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
		</li>
	</ul>

	<ul class="expanders">
		<p class="dispNone">Ekspander 2 0x22 szyna 1 0x00</p>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay1"
			   expander="0x27 0x01 "
			   external="false"
			   pin="1"></a>
			<input  type="hidden" value="Krzyżak ogrodowy to pospolity pająk o charakterystycznym wzorze białego krzyża na odwłoku. Zamieszkuje lasy, łąki, ogrody i parki, czasem też budynki. Na zdobycz czai się, siedząc w kryjówce lub w środku sieci; swoje ofiary - owady - poraża ukłuciem jadu, który rozpuszcza ich wnętrzności, dzięki czemu pająk może je wyssać. Jad ten jest niegroźny dla człowieka - może spowodować jedynie lekką opuchliznę w miejscu ukąszenia. Zachowanie pająków krzyżaków wykorzystywano niegdyś do przepowiadania pogody; dla przykładu, pająki wędrujące po ścianach w porze zimowej zapowiadają nadejście odwilży, a budowanie przez nie dużych pajęczyn podczas deszczu zwiastuje przejaśnienia. Krzyżak ogrodowy to pospolity pająk o charakterystycznym wzorze białego krzyża na odwłoku. Zamieszkuje lasy, łąki, ogrody i parki, czasem też budynki. Na zdobycz czai się, siedząc w kryjówce lub w środku sieci; swoje ofiary - owady - poraża ukłuciem jadu, rozpuszcza ich wnętrzności, trawiąc je na zewnątrz aby je po tym wyssać. Jad ten jest niegroźny dla człowieka - może spowodować jedynie lekką opuchliznę w miejscu ukąszenia. Zachowanie pająków krzyżaków wykorzystywano niegdyś do przepowiadania pogody; dla przykładu, pająki wędrujące po ścianach w porze zimowej zapowiadają nadejście odwilży, a budowanie przez nie dużych pajęczyn podczas deszczu zwiastuje przejaśnienia.
			" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay2"
			   expander="0x27 0x01 "
			   external="false"
			   pin="1"></a>
			<input  type="hidden" value="Gacek brunatny, zwany też wielkouchym, to nietoperz z rodziny mroczkowatych, występujący pospolicie w całej Europie za wyjątkiem północy. Jego duże uszy mają fałdki, które umożliwiają ich składanie - gdy odpoczywa, chowa je pod skrzydłami. Preferuje miejsca zagospodarowane przez człowieka, zwłaszcza tereny rolnicze. Żyje samotnie lub tworzy małe kolonie. Zajmuje dziuple, budynki, jaskinie czy piwnice i tam też zimuje od października do końca marca, zapadając w sen zimowy. Poluje całą noc na owady i ich larwy oraz pająki, chwytając je z powierzchni ziemi lub w locie, a zjadając dopiero w spoczynku. W polowaniu i orientacji w terenie posługuje się echolokacją. Co ciekawe, gacek wielkouch łatwo się oswaja.
			" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay3"
			   expander="0x27 0x01 "
			   external="false"
			   pin="1"></a>
			<input  type="hidden" value=""/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay4"
			   expander="0x27 0x01 "
			   external="false"
			   pin="1"></a>
			<input  type="hidden" value=""/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay5"
			   expander="0x27 0x01 "
			   external="false"
			   pin="1"></a>
			<input  type="hidden" value=""/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay6"
			   expander="0x27 0x01 "
			   pin="1"> </a>
			<input  type="hidden" value=""/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay7"
			   expander="0x27 0x01 "
			   pin="1"> </a>
			<input  type="hidden" value=""/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay8"
			   expander="0x27 0x01 "
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
				   expander="0x27 0x00 "
				   external="false"
				   pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
			</li>
		<li>
				<a href="#" class="expanders__relay relayexp1"
				   audio=".mp3"
				   relayId="relay2"
				   expander="0x27 0x00 "
				   external="true"
				   pin="1"> </a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
			</li>
		<li>
				<a href="#" class="expanders__relay relayexp1"
				   audio=".mp3"
				   relayId="relay3"
				   expander="0x27 0x00 "
				   external="true"
				   pin="1"> </a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
			</li>
		<li>
				<a href="#" class="expanders__relay relayexp1"
				   audio=".mp3"
				   relayId="relay4"
				   expander="0x27 0x00 "
				   external="true"
				   pin="1"> </a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
			</li>
		<li>
				<a href="#" class="expanders__relay relayexp1"
				   audio=".mp3"
				   relayId="relay5"
				   expander="0x27 0x00 "
				   external="true"
				   pin="1"> </a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
			</li>
		<li>
				<a href="#" class="expanders__relay relayexp1"
				   audio=".mp3"
				   relayId="relay6"
				   expander="0x27 0x00 "
				   external="true"
				   pin="1"> </a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
			</li>
		<li>
				<a href="#" class="expanders__relay relayexp1"
				   audio=".mp3"
				   relayId="relay7"
				   expander="0x27 0x00 "
				   external="true"
				   pin="1"> </a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
			</li>
		<li>
				<a href="#" class="expanders__relay relayexp1"
				   audio=".mp3"
				   relayId="relay8"
				   expander="0x27 0x00 "
				   external="true"
				   pin="1"> </a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
			</li>
	</ul>

	<div class="rasp__wrapper">
		<ul class="expanders">
			<li>
				<a href="#" class="expanders__relay rasp__defaults rasp-custom-button relayexp1"
				   audio="laspoczatekzimy.mp3"
				   relayId="relay8"
				   expander="0x00 0x00"
				   pin="1">LAS POCZĄTEK ZIMY</a>
				<input  type="hidden" value="
				Zima to odpowiednia pora, aby z wyprzedzeniem zadbać o faunę leśną. Skrzynki lęgowe dla ptaków - czyści się wtedy dokładnie, usuwając stare gniazda, 
lub w miarę potrzeb wiesza się nowe. Leśnicy nie zapominają też o zwierzętach zimujących w lasach, które przez grubą pokrywę śnieżną nie są w stanie dotrzeć do pokarmu: wywieszają 
karmę dla ptaków, a także ścinają drzewa, pozostawiając je w lesie - kora z tych drzew, zwanych ogryzowymi, stanowi pokarm dla saren, danieli oraz jeleni. W specjalnych paśnikach 
wykładane są też dla nich buraki, marchew i siano, a obok ustawiane są lizawki z solą. Dzięki temu najedzone zwierzęta w mniejszym stopniu ogryzają drzewka, które mają stanowić w 
przyszłości drzewostan.  Pokrywa śnieżna umożliwia leśnikom policzenie zwierząt, które bytują w lasach i na łąkach wykorzystuje się w nich tropy, 
które pozostawiają zwierzęta. 

 " class="text-to-append dispNone" />
 </li>
		</ul>

		<a href="#" class="rasp__defaults expanders__relay" id="switchAllOn">Podświetl Wszystko</a>
		<a href="#" class="rasp__defaults expanders__relay" id="switchAllOff">Wyłącz wszystko</a>
		<a href="#" class="rasp__defaults expanders__relay media-show" id="desktopon">Włącz pulpit</a>
		<a href="#" class="rasp__defaults expanders__relay media-show" id="desktopoff">Wyłącz pulpit</a>
	</div>
</div>
@stop
