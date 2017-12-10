@extends('layouts.default')
@section('content')
<div class ="container">
	<h3 class="title_"> Diorama, pozyskanie drewna, las zimowy</h3>
	<div class="custom-text" id="custom-text">

	</div>
	<p class="dispNone">
		0x24  - Rampa - 6szt
		0x20 - none
		0x22 - pulpit 8 pkt
	</p>
	<ul class="expanders">
		<p class="dispNone">Ekspander 3 0x24 szyna 1 0x00</p>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="dzwonekbrzoskwiniowolistny.mp3"
						relayId="relay3"
						expander="0x24 0x01 "
						external="false"
						pin="1">dzwonek brzoskwiniowolistny</a>
				<input  type="hidden" value="Dzwonek brzoskwiniolistny to piękna rodzima bylina o delikatnych fioletowych kwiatach, które pojawiają się na wysokich łodygach w czerwcu. W Polsce jest dość pospolity na niżu i w Karpatach - rośnie w świetlistych lasach i zaroślach; jest też uprawiany jako roślina ozdobna.
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="borowkaczarna.mp3"
						relayId="relay4"
						expander="0x24 0x01 "
						external="false"
						pin="1">borówkaczarna</a>
						<input  type="hidden" value="Borówka czarna, znana również jako czernica, czernina lub czarna jagoda, to roślina z rodziny wrzosowatych, występująca w widnych iglastych lasach o glebie lekkiej, próchnicznej i piaszczystej. Kwitnie w okresie od kwietnia do czerwca, kiedy to na łodygach pojawiają się białoróżowawe delikatne kwiaty. Następnie kwiaty te przekształcają się w bardzo smaczne czarne jagody z niebieskawym nalotem. Owoce, a także liście borówki czarnej znane są z właściwości leczniczych, zarówno na świeżo, jak i w formie przetworzonej.
						" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio="gozdzikkartuzek.mp3"
			   relayId="relay6"
			   expander="0x24 0x01 "
			   external="false"
			   pin="1">goździk kartuzek</a>
			<input  type="hidden" value="Goździk kartuzek to wieloletnia i mrozoodporna roślina zielna, w Polsce dość pospolita na niżu. Jako że jest światło- i ciepłolubna, najczęściej można ją spotkać na suchych murawach, w świetlistych borach sosnowych, suchych łąkach i na piaskach; oprócz tego goździk uprawiany jest też jako roślina ozdobna.
			" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="dziurawiec.mp3"
						relayId="relay5"
						expander="0x24 0x01 "
						external="false"
						pin="1">dziurawiec</a>
						<input  type="hidden" value="Dziurawiec zwyczajny to bylina porastająca nasłonecznione łąki, polany, widne zarośla i skraje lasów. Zaczyna kwitnąć około 24 czerwca, czyli dnia świętego Jana, stąd też nazwa zwyczajowa - ziele świętego Jana lub świętojańskie. Nazwa dziurawiec pochodzi za to od małych wypustek, znajdujących się na liściach tej rośliny, które wyglądem przypominają otworki. To popularne zioło o wszechstronnym działaniu - jego wysuszone kwiaty stosuje się jako środek uspokajający, rozkurczowy, leczący rany i oparzenia. Dawniej przypisywano mu nawet działanie magiczne - wierzono, że roślina chroni przed czartami i złymi duchami. Dziurawiec zwyczajny to bylina porastająca nasłonecznione łąki, polany, widne zarośla i skraje lasów. Zaczyna kwitnąć około 24 czerwca, czyli dnia świętego Jana, stąd też nazwa zwyczajowa - ziele świętego Jana lub świętojańskie. Nazwa dziurawiec pochodzi za to od prześwitującej, kropkowanej blaszki – w kropkach występują olejki eteryczne. To popularne zioło o wszechstronnym działaniu - jego wysuszone kwiaty stosuje się jako środek uspokajający, rozkurczowy, leczący rany i oparzenia. Dawniej przypisywano mu nawet działanie magiczne - wierzono, że roślina chroni przed czartami i złymi duchami.
						" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="borowikszlachetny.mp3"
						relayId="relay7"
						expander="0x24 0x01 "
						external="false"
						pin="1">borowik szlachetny</a>
						<input  type="hidden" value="Borowik szlachetny, czyli tzw. prawdziwek, należący do grzybów jadalnych, jest wysoko ceniony ze względu na swój wyjątkowy smak. W Polsce bywa stosowany jako składnik wielu tradycyjnych potraw.  Grzyby te pojawiają się najliczniej w okresie od maja do listopada, zdarzają się także w grudniu. Wyrastają pojedynczo lub w niewielkich grupach. Rekordowy prawdziwek znaleziony w Polsce ważył prawie 7,5 kg. Borowik jadalny jest często mylony z goryczakiem żółciowym, czyli tzw. „szatanem”, pospolitym niejadalnym grzybem, który ma bardzo gorzki smak i często wywołuje poważne zatrucia.
						" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="borowikbrunatny.mp3"
						relayId="relay1"
						expander="0x24 0x01 "
						external="false"
						pin="1">borowik brunatny</a>
				<input  type="hidden" value="Borowik brunatny lub kasztanowy, zwany pospolicie podgrzybkiem, to grzyb jadalny o przyjemnym zapachu, który, choć nie jest tak smaczny jak borowik szlachetny, jest równie chętnie zbierany. Jego gładki i matowy kapelusz w odcieniu brązu może osiągnąć do 30 cm szerokości. Po deszczu robi się lepki. Rurki od spodu kapelusza są zwykle żółtawe, trzon jasnobrązowy, a miąższ twardy i biały, po przekrojeniu natomiast cały grzyb zmienia barwę na sino niebieskawą.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio="kozlarzczerwony.mp3"
			   relayId="relay2"
			   expander="0x24 0x01 "
			   external="false"
			   pin="1">koźlarz czerwony</a>
			<input  type="hidden" value="Koźlarz czerwony z rodziny borowikowatych, zwany kozakiem, w Polsce jest dość częsty. Jako grzyb mikoryzowy, wyrasta wyłącznie pod topolą osiką - od czerwca do października. Po przekrojeniu miąższ koźlarza czerwonego sinieje. Jest to grzyb jadalny i smaczny, nadaje się do duszenia i suszenia. Można go pomylić z podobnymi: koźlarzem pomarańczowożółtym, sosnowym oraz świerkowym, jednak rosną one pod innymi gatunkami drzew, a sama pomyłka nie jest znacząca - one również są jadalne.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio="mleczajrydz.mp3"
			   relayId="relay2"
			   expander="0x24 0x01 "
			   external="false"
			   pin="1">mleczaj rydz</a>
			<input  type="hidden" value="Mleczaj rydz, grzyb z rodziny gołąbkowatych, jest jednym z najbardziej poszukiwanych grzybów w naszym kraju. Tworzy on mikoryzę z sosnami, więc można go spotkać w borach i młodnikach sosnowych, przeważnie na piaszczystych glebach; rośnie od sierpnia do listopada. Bywa mylony z trującym mleczajem wełnianką.
				" class="text-to-append dispNone" />
		</li>
	</ul>
	<ul class="expanders">
		<p class="dispNone">Ekspander 0x24 szyna 2</p>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="pieprznikjadalny.mp3"
						relayId="relay1"
						expander="0x24 0x00 "
						external="false"
						pin="1">pieprznik jadalny</a>
				<input  type="hidden" value="Pieprznik jadalny, zwany potocznie kurką, to jadalny grzyb ceniony  ze względu na aromat, smak oraz twardość i chrupkość owocników. Rośnie w lasach liściastych i iglastych, często na piaszczystych, kwaśnych glebach, często pod świerkami pośród mchów. Występuje od czerwca do listopada. Może być pomylony z niejadalną lisówką pomarańczową.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="jez.mp3"
						relayId="relay1"
						expander="0x24 0x00 "
						external="false"
						pin="1">jeż</a>
				<input  type="hidden" value="Jeż europejski to często spotykany, największy ssak owadożerny w naszym kraju. W dzień śpi ukryty pod liśćmi lub w jamkach, o zmierzchu wychodzi z ukrycia i, pracowicie drepcząc, poszukuje jedzenia, np. owadów, robaków, drobnych gryzoni czy też grzybów i przejrzałych owoców. Co noc pokonuje w tym celu do 3 km. Ubarwienie ciała jeża jest szarobrunatne, a po stronie brzusznej szare lub brunatne. Jego spiczasty, zawsze wilgotny i ruchliwy nosek stanowi doskonały narząd czuciowy. Każdy jeż jest pokryty ok. 5 tysiącami kolców, które stroszy, gdy jest przestraszony, równocześnie zwijając się w kulkę. Jeże nie robią żadnych zapasów na zimę, w tym czasie zapadają w odrętwienie i odżywiają się tłuszczem nagromadzonym w organizmie. W naturalnych warunkach jeż żyje około 5 lat, w hodowli - nawet do 10 lat.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="wieworka.mp3"
						relayId="relay1"
						expander="0x24 0x00 "
						external="false"
						pin="1">wiewórka</a>
				<input  type="hidden" value="Wiewiórka pospolita, czy też ruda, to nadrzewny gryzoń często spotykany w lasach liściastych i iglastych, a także w parkach, na terenie całej Polski. W górach wiewiórki mogą być ciemno ubarwione - brązowe po niemal czarne. Ich długi puszysty ogonek odgrywa ważną rolę podczas skoków - służy do stabilizacji kierunku lotu. Pożywienie wiewiórek stanowią nasiona, grzyby i owoce, ale także owady, jaja i pisklęta. Zdarza się im suszyć grzyby na gałęziach, by mieć je na zimę; swoje zapasy chowa w ziemi, dziuplach lub szczelinach drzew, zamieszkuje natomiast wybudowane przez siebie gniazda z trawy i drobnych gałązek. Wiewiórka pospolita, to nadrzewny gryzoń często spotykany w lasach liściastych i iglastych, a także w parkach, na terenie całej Polski. W górach wiewiórki mogą być ciemno ubarwione - brązowe po niemal czarne. Ich długi puszysty ogonek odgrywa ważną rolę podczas skoków - służy do stabilizacji kierunku lotu. Pożywienie wiewiórek stanowią nasiona, grzyby i owoce, ale także owady, jaja i pisklęta. Zdarza się im suszyć grzyby na gałęziach, by mieć je na zimę; swoje zapasy chowa w ziemi, dziuplach lub szczelinach drzew. Zamieszkuje natomiast dziuple lub gniazda opuszczone przez inne zwierzęta dobudowując zadaszenia lub buduje własne w koronach drzew wykorzystując do tego trawy i drobne gałązki.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="kowalik.mp3"
						relayId="relay1"
						expander="0x24 0x00 "
						external="false"
						pin="1">kowalik</a>
				<input  type="hidden" value="Kowalik zwyczajny lub bargiel to osiadły ptak, lubiący lasy liściaste i mieszane. Jako jedyny z krajowych ptaków poszukując pożywienia potrafi chodzić po pniach drzew lub skałach, często głową w dół, a dzięki pazurom swych silnych palców wędruje także po spodzie gałęzi. Swym potężnym dłutowatym dziobem wyciąga ze szczelin w korze zdobycze - owady, larwy, pająki i inne bezkręgowce. Spędzający zimę w kraju kowalik nie gardzi też nasionami i owocami. Tworzy on monogamiczne pary, a w trakcie wysiadywania jaj samiec karmi swoją partnerkę.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="dzieciolzielony.mp3"
						relayId="relay1"
						expander="0x24 0x00 "
						external="false"
						pin="1">dzięcioł zielony</a>
				<input  type="hidden" value="Dzięcioł zielony to najbarwniejszy krajowy dzięcioł, występujący głównie na obrzeżach lasów liściastych środkowej i wschodniej Polski. Ze względu na raczej naziemny tryb życia, dzięcioł ten rzadko bębni - częściej odzywa się donośnym pogwizdywaniem. Dziób ma słabszy niż inne dzięcioły, więc dziuple wykuwa raczej w miękkim drewnie topoli, osiki lub wierzby, skąd wydobywa owady i ich larwy. Chętnie odwiedza mrowiska, z których przy pomocy swojego długiego, lepkiego języka wyjada mrówki; zimą zjada nasiona drzew iglastych, owoce, a także padlinę oraz wieszaną w karmnikach słoninę, za to wiosną często nakłuwa korę brzóz i pije wyciekający sok.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio="bielik.mp3"
			   relayId="relay2"
			   expander="0x24 0x00 "
			   external="false"
			   pin="1">bielik</a>
			<input  type="hidden" value="Bielik zwyczajny, inaczej birkut, z rodziny jastrzębiowatych, to największy krajowy ptak drapieżny o rozpiętości skrzydeł sięgającej 240 cm. Bieliki budują jedne z największych gniazd, zwykle w koronach starych drzew i w pobliżu zbiorników wodnych, gdzie polują na ryby, ptaki wodne i ssaki. Używane przez wiele lat gniazdo może przekraczać 2 m wysokości i osiągać ciężar nawet jednej tony. Dzięki ochronie miejsc gniazdowania bielik przestał być w naszym kraju rzadkością i jego liczebność systematycznie wzrasta - wynosi ok. 500 par. Bielik, inaczej birkut, z rodziny jastrzębiowatych, to największy krajowy ptak drapieżny o rozpiętości skrzydeł sięgającej 240 cm. Bieliki budują jedne z największych gniazd, zwykle w koronach starych drzew i w pobliżu zbiorników wodnych, gdzie polują na ryby, ptaki wodne i ssaki. Używane przez wiele lat gniazdo może przekraczać 2 m wysokości i osiągać ciężar nawet jednej tony. Dzięki ochronie miejsc gniazdowania bielik przestał być w naszym kraju rzadkością i jego liczebność systematycznie wzrasta - wynosi ok. 500 par.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio="jaszczurkazwinka.mp3"
			   relayId="relay2"
			   expander="0x24 0x00 "
			   external="false"
			   pin="1">jaszczurka zwinka</a>
			<input  type="hidden" value="Jaszczurka zwinka to najpospolitszy krajowy gad, preferujący siedliska nizinne. Zwinkę najczęściej można spotkać w niskiej trawie, wygrzewającą się w słońcu - jest bardzo ciepłolubna. Jej masywne ciało pokrywają ściśle do siebie przylegające łuski; mogą one mieć kolor od zielonego do brązowego. W chwili zagrożenia jaszczurka odrzuca ogon, który staje się zdobyczą dla drapieżnika, a ona sama ucieka; z czasem ogon odrasta do pierwotnej długości. Zwinki są drapieżnikami, polują głównie na owady i pająki.
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay1"
						expander="0x24 0x00 "
						external="false"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
	</ul>

	<ul class="expanders">
		<p class="dispNone">Ekspander 1 0x20 szyna 1 0x00</p>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay1"
			   expander="0x20 0x01 "
			   external="false"
			   pin="1"></a>
			<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay1"
						expander="0x20 0x01 "
						external="false"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay2"
						expander="0x20 0x01 "
						external="false"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay3"
						expander="0x20 0x01 "
						external="false"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay4"
						expander="0x20 0x01 "
						external="false"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay5"
						expander="0x20 0x01 "
						external="false"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay6"
						expander="0x20 0x01 "
						external="false"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay7"
						expander="0x20 0x01 "
						external="false"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
	</ul>
	<ul class="expanders">
		<p class="dispNone">Ekspander 1 0x20 szyna 2 0x01</p>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay8"
			   expander="0x20 0x00 "
			   external="false"
			   pin="1"></a>
			<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
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
						expander="0x20 0x00 "
						external="false"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay3"
						expander="0x20 0x00 "
						external="false"
						pin="1"></a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay4"
						expander="0x20 0x00 "
						external="false"
						pin="1"></a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay5"
						expander="0x20 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay6"
						expander="0x20 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay8"
						expander="0x20 0x00 "
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
			   expander="0x22 0x01 "
			   external="false"
			   pin="1">słup oddziałowy z numeracją</a>
			<input  type="hidden" value="
			" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay2"
			   expander="0x22 0x01 "
			   external="false"
			   pin="1">pusty</a>
			<input  type="hidden" value="
			" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay3"
			   expander="0x22 0x01 "
			   external="false"
			   pin="1">pusty</a>
			<input  type="hidden" value=""/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay4"
			   expander="0x22 0x01 "
			   external="false"
			   pin="1">pusty</a>
			<input  type="hidden" value=""/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay5"
			   expander="0x22 0x01 "
			   external="false"
			   pin="1">pusty</a>
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
	<ul class="expanders">
		<p class="dispNone">Ekspander 2 0x22 szyna 2 0x01</p>
		<li>
				<a href="#" class="expanders__relay relayexp1"
				   audio=".mp3"
				   relayId="relay1"
				   expander="0x22 0x00 "
				   external="false"
				   pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
			</li>
		<li>
				<a href="#" class="expanders__relay relayexp1"
				   audio=".mp3"
				   relayId="relay2"
				   expander="0x22 0x00 "
				   external="true"
				   pin="1"> </a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
			</li>
		<li>
				<a href="#" class="expanders__relay relayexp1"
				   audio=".mp3"
				   relayId="relay3"
				   expander="0x22 0x00 "
				   external="true"
				   pin="1"> </a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
			</li>
		<li>
				<a href="#" class="expanders__relay relayexp1"
				   audio=".mp3"
				   relayId="relay4"
				   expander="0x22 0x00 "
				   external="true"
				   pin="1"> </a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
			</li>
		<li>
				<a href="#" class="expanders__relay relayexp1"
				   audio=".mp3"
				   relayId="relay5"
				   expander="0x22 0x00 "
				   external="true"
				   pin="1"> </a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
			</li>
		<li>
				<a href="#" class="expanders__relay relayexp1"
				   audio=".mp3"
				   relayId="relay7"
				   expander="0x22 0x00 "
				   external="true"
				   pin="1"> </a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
			</li>
		<li>
				<a href="#" class="expanders__relay relayexp1"
				   audio=".mp3"
				   relayId="relay8"
				   expander="0x22 0x00 "
				   external="true"
				   pin="1"> </a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
			</li>
		<li>
				<a href="#" class="expanders__relay relayexp1"
				   audio=".mp3"
				   relayId="relay8"
				   expander="0x22 0x00 "
				   external="true"
				   pin="1"> </a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
			</li>
	</ul>

	<div class="rasp__wrapper">
		<ul class="expanders">
			<li>
				<a href="#" class="expanders__relay rasp__defaults rasp-custom-button relayexp1"
				   audio="pozyskiwaniedrewna.mp3"
				   relayId="relay8"
				   expander=""
				   pin="1">Diorama, pozyskanie drewna, las zimowy</a>
				<input  type="hidden" value=" Turystyka i rekreacja w lasach, późne lato" class="text-to-append dispNone" />
			</li>
		</ul>

		<a href="#" class="rasp__defaults expanders__relay" id="switchAllOn">Podświetl Wszystko</a>
		<a href="#" class="rasp__defaults expanders__relay" id="switchAllOff">Wyłącz wszystko</a>

	</div>
</div>

@stop
