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
						audio="pilarz.mp3"
						relayId="relay3"
						expander="0x24 0x01 "
						external="true"
						pin="1">pilarz</a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="x.mp3"
						relayId="relay4"
						expander="0x24 0x01 "
						external="true"
						pin="1">klin</a>
						<input  type="hidden" value="
						" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio="x.mp3"
			   relayId="relay6"
			   expander="0x24 0x01 "
			   external="true"
			   pin="1">sikiera,młot</a>
			<input  type="hidden" value="
			" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="x.mp3"
						relayId="relay5"
						expander="0x24 0x01 "
						external="true"
						pin="1">klupa</a>
						<input  type="hidden" value="
						" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="x.mp3"
						relayId="relay7"
						expander="0x24 0x01 "
						external="true"
						pin="1">miara, plakietki</a>
						<input  type="hidden" value="
						" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio="x.mp3"
						relayId="relay1"
						expander="0x24 0x01 "
						external="true"
						pin="1">numerator</a>
				<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay2"
			   expander="0x24 0x01 "
			   external="true"
			   pin="1"></a>
			<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay2"
			   expander="0x24 0x01 "
			   external="true"
			   pin="1"></a>
			<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
	</ul>
	<ul class="expanders">
		<p class="dispNone">Ekspander 0x24 szyna 2</p>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay1"
						expander="0x24 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay1"
						expander="0x24 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay1"
						expander="0x24 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay1"
						expander="0x24 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay1"
						expander="0x24 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay2"
			   expander="0x24 0x00 "
			   external="true"
			   pin="1"></a>
			<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay2"
			   expander="0x24 0x00 "
			   external="true"
			   pin="1"></a>
			<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay1"
						expander="0x24 0x00 "
						external="true"
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
			   external="true"
			   pin="1"></a>
			<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay1"
						expander="0x20 0x01 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay2"
						expander="0x20 0x01 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay3"
						expander="0x20 0x01 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay4"
						expander="0x20 0x01 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay5"
						expander="0x20 0x01 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay6"
						expander="0x20 0x01 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay7"
						expander="0x20 0x01 "
						external="true"
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
			   external="true"
			   pin="1"></a>
			<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay1"
						expander="0x20 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay2"
						expander="0x20 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="
				" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay3"
						expander="0x20 0x00 "
						external="true"
						pin="1"></a>
				<input  type="hidden" value="" class="text-to-append dispNone"/>
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
						audio=".mp3"
						relayId="relay4"
						expander="0x20 0x00 "
						external="true"
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
			   pin="1"></a>
			<input  type="hidden" value="
			" class="text-to-append dispNone" />
		</li>
		<li>
			<a href="#" class="expanders__relay relayexp1"
			   audio=".mp3"
			   relayId="relay2"
			   expander="0x22 0x01 "
			   pin="1"></a>
			<input  type="hidden" value="
			" class="text-to-append dispNone" />
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
