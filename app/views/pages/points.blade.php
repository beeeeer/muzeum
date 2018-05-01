@extends('layouts.default')
@section('content')
    <div class="container">
        <h3 class="title_"> Diorama, pozyskanie drewna, las zimowy</h3>
        <div class="custom-text" id="custom-text">

        </div>
        <p class="dispNone">
            0x24 - Rampa - 6szt
            0x20 - none
            0x22 - pulpit 8 pkt
        </p>
        <ul class="expanders">
            <p class="dispNone">Ekspander 3 0x24 szyna 1 0x00</p>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="pilarz.mp3"
                   relayId="relay1"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1">pilarz</a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="x.mp3"
                   relayId="relay2"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1">klin</a>
                <input type="hidden" value="
						" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="x.mp3"
                   relayId="relay3"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1">siekiera,młot</a>
                <input type="hidden" value="
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="x.mp3"
                   relayId="relay4"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1">klupa</a>
                <input type="hidden" value="
						" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="x.mp3"
                   relayId="relay5"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1">miara, plakietki</a>
                <input type="hidden" value="
						" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="x.mp3"
                   relayId="relay6"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1">numerator</a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay7"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay8"
                   expander="0x22 0x01 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
        </ul>
        <ul class="expanders">
            <p class="dispNone">Ekspander 0x24 szyna 2</p>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio="pracawlesie.mp3"
                   relayId="relay1"
                   expander="0x24 0x00 "
                   external="true"
                   pin="1">Maszyna na zrębie</a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay2"
                   expander="0x24 0x00 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay3"
                   expander="0x24 0x00 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay4"
                   expander="0x24 0x00 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay5"
                   expander="0x24 0x00 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay6"
                   expander="0x24 0x00 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay7"
                   expander="0x24 0x00 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay8"
                   expander="0x24 0x00 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
        </ul>

        <ul class="expanders">
            <p class="dispNone">Ekspander 1 0x20 szyna 1 0x00</p>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay1"
                   expander="0x11 0x01 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay1"
                   expander="0x11 0x01 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay2"
                   expander="0x11 0x01 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay3"
                   expander="0x11 0x01 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay4"
                   expander="0x11 0x01 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay5"
                   expander="0x11 0x01 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay6"
                   expander="0x11 0x01 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay7"
                   expander="0x11 0x01 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
        </ul>
        <ul class="expanders">
            <p class="dispNone">Ekspander 1 0x20 szyna 2 0x01</p>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay8"
                   expander="0x11 0x00 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay1"
                   expander="0x11 0x00 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay2"
                   expander="0x11 0x00 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay3"
                   expander="0x11 0x00 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay4"
                   expander="0x11 0x00 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay5"
                   expander="0x11 0x00 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay6"
                   expander="0x11 0x00 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay8"
                   expander="0x11 0x00 "
                   external="true"
                   pin="1"></a>
                <input type="hidden" value="" class="text-to-append dispNone"/>
            </li>
        </ul>

        <ul class="expanders">
            <p class="dispNone">Ekspander 2 0x22 szyna 1 0x00</p>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay1"
                   expander="0x11 0x01 "
                   external="false"
                   pin="1"></a>
                <input type="hidden" value="
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay2"
                   expander="0x11 0x01 "
                   pin="1"></a>
                <input type="hidden" value="
			" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay3"
                   expander="0x11 0x01 "
                   external="false"
                   pin="1"></a>
                <input type="hidden" value=""/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay4"
                   expander="0x11 0x01 "
                   external="false"
                   pin="1"></a>
                <input type="hidden" value=""/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay5"
                   expander="0x11 0x01 "
                   external="false"
                   pin="1"></a>
                <input type="hidden" value=""/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay6"
                   expander="0x11 0x01 "
                   pin="1"> </a>
                <input type="hidden" value=""/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay7"
                   expander="0x11 0x01 "
                   pin="1"> </a>
                <input type="hidden" value=""/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay8"
                   expander="0x11 0x01 "
                   pin="1"> </a>
                <input type="hidden" value=""/>
            </li>
        </ul>
        <ul class="expanders">
            <p class="dispNone">Ekspander 2 0x22 szyna 2 0x01</p>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay1"
                   expander="0x11 0x00 "
                   external="false"
                   pin="1"></a>
                <input type="hidden" value="
				" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay2"
                   expander="0x11 0x00 "
                   external="true"
                   pin="1"> </a>
                <input type="hidden" value="" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay3"
                   expander="0x11 0x00 "
                   external="true"
                   pin="1"> </a>
                <input type="hidden" value="" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay4"
                   expander="0x11 0x00 "
                   external="true"
                   pin="1"> </a>
                <input type="hidden" value="" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay5"
                   expander="0x11 0x00 "
                   external="true"
                   pin="1"> </a>
                <input type="hidden" value="" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay7"
                   expander="0x11 0x00 "
                   external="true"
                   pin="1"> </a>
                <input type="hidden" value="" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay8"
                   expander="0x11 0x00 "
                   external="true"
                   pin="1"> </a>
                <input type="hidden" value="" class="text-to-append dispNone"/>
            </li>
            <li>
                <a href="#" class="expanders__relay relayexp1"
                   audio=".mp3"
                   relayId="relay8"
                   expander="0x11 0x00 "
                   external="true"
                   pin="1"> </a>
                <input type="hidden" value="" class="text-to-append dispNone"/>
            </li>
        </ul>

        <div class="rasp__wrapper">
            <ul class="expanders">

                <li>
                    <a href="#" class="expanders__relay rasp__defaults rasp-custom-button relayexp1"
                       audio="drewno.mp3"
                       relayId="relay8"
                       expander=""
                       pin="1"> DIORAMA, POZYSKANIE DREWNA, LAS ZIMOWY </a>
                    <input type="hidden" value="
Zima to czas, w którym lasy wymagają szczególnej pielęgnacji. W miarę potrzeb usuwa się śniegołomy, wiatrołomy i wywroty, aby nie zostały one zasiedlone przez szkodniki wtórne takie jak korniki czy cetyńce. W młodszych drzewostanach wykonuje się cięcia pielęgnacyjne, czyli trzebieże, których celem jest usunięcie z lasu niepożądanych drzew. Dzięki trzebieży korzenie drzew nie muszą ze sobą ‘konkurować’ o wodę w glebie, a korony zyskują lepszy dostęp do światła. Drzewa rosną przez to intensywniej zarówno na grubość, jak i na wysokość, rozwijają się też ich korony. 
Lasy gospodarcze, czyli takie, w których prowadzi się między innymi planową produkcję drewna, nie dożywają starości, gdyż na etapie dojrzałości pozyskuje się z nich drewno. Zręby zwykle wykonuje się planowo, jednak zdarza się też nieplanowane usuwanie drzewostanów zniszczonych przez różnego rodzaju klęski żywiołowe, choroby czy gradacje szkodników. Ścinka drzew odbywa się najczęściej przy użyciu pilarek spalinowych i wymaga od pilarzy nie lada umiejętności i sprawności. Przy ścince pilarzom towarzyszą młot, kliny, dźwignia obracaka, tyczka kierunkowa, klupa i miara do mierzenia drewna. W miarę, średnicomierz, numerator, rejestrator oraz plakietki do oznaczania wyposażony jest natomiast prowadzący odbiórkę drewna leśnik. Z pomocą przy pracach pozyskaniowych przychodzi  także nowoczesna technologia w postaci specjalistycznych maszyn, zwanych harvesterami. Nie mają one najmniejszego problemu ze ścinką drzewa, okrzesaniem go – czyli usunięciem bocznych gałęzi – i przecięciem drewna czyli manipulacją na krótsze odcinki: kłody, wyrzynki czy też wałki. Zrywką drewna, czyli przewiezieniem go na miejsce składowania, zajmują się specjalne ciągniki leśne, zwane forwarderami – podczas przewożenia nie niszczą one leśnego podłoża w takim stopniu, jak to ma miejsce w przypadku ciągnięcia drewna za zwykłymi traktorami. Na zrębie wiosną kolejnego roku leśnicy sadzą drzewa, zakładając nowe uprawy leśne.
Surowiec uzyskany przez zrąb - drewno - to materiał trwały i naturalnie piękny – jest znany i ceniony od tysięcy lat. Nawet w dzisiejszym świecie znajduje ok. 30 000 zastosowań – z drewna wykonuje się różnego rodzaju drewniane konstrukcje, meble, papier, łodzie, instrumenty i wiele innych rzeczy, bez których nie wyobrażamy sobie codziennego życia.
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
