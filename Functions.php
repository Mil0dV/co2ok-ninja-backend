<?php
	error_reporting(false);
	$url = $_GET['url'];

	function FindTLD($url){
           preg_match('|ebay\K[^/]*|', $url, $match);
           return $match[0];
	}

	function readArray($url){

		$tld = FindTLD($url);

		$Land_code = array("at" => "5221-53469-19255-0" , "com.au" => "705-53470-19255-0", "be" => "1553-53471-19255-0", "ca" => "706-53473-19255-0", "ch" => "5222-53480-19255-0", "de" => "707-53477-19255-0", "es" => "1185-53479-19255-0", "fr" => "709-53476-19255-0", "ie" => "5282-53468-19255-0", "it" => "724-53478-19255-0","ss" => "420-02001-09020-0", "nl" => "1346-53482-19255-0", "co.uk" => "710-53481-19255-0", "com" => "711-53200-19255-0", );

		switch ($tld) {
			case '.at':
				return $Land_code['at'];
				break;
			case '.com.au':
				return $Land_code['com.au'];
				break;
			case '.be':
				return $Land_code['be'];
				break;
			case '.ca':
				return $Land_code['ca'];
				break;
			case '.ch':
				return $Land_code['ch'];
				break;
			case '.de':
				return $Land_code['de'];
				break;
			case '.es':
				return $Land_code['es'];
				break;
			case '.fr':
				return $Land_code['fr'];
				break;
			case '.ie':
				return $Land_code['ie'];
				break;
			case '.it':
				return $Land_code['it'];
				break;
			case '.nl':
				return $Land_code['nl'];
				break;
			case '.co.uk':	
				return $Land_code['co.uk'];
				break;
			case '.com':
				return $Land_code['com'];
				break;
		}
	}

	function FindSiteName($url){
		preg_match('|www.\K[^.]*|', $url, $match);
		return $match[0];
	}

	function FindURLplusTLD($url){
		preg_match('|www.\K[^/]*|', $url, $match);
		return $match[0];
	}

	function FindURI($url){
		preg_match('^[^/]*/[^/]*/[^/]*/(.*)$', $url, $match);
		return $match[0];
	}

	function FindAwinMid($url){
		$FAM = FindURLplusTLD($url);

		$AwinMid = array("lesara.se" => "10006", "jaarbeurs.nl" => "8315", "gearbest.com" => "6607");
		return $AwinMid[$FAM];
	}

	$FindDaisy = array("drogisterij.net" => array("ds1.nl", "35", "11507"),"happyhome.nl" => array("ds1.nl", "73", "11545"),"123tijdschrift.nl" => array("ds1.nl", "129", "11601"),"manymorestores.com" => array("ds1.nl", "164", "11636"),"lacasita.com" => array("ds1.nl", "203", "11675"),"nationaletijdschriftenbon.nl" => array("ds1.nl", "215", "11687"),"knuffelparadijs.nl" => array("ds1.nl", "260", "13685"),"ritel.nl" => array("ds1.nl", "276", "13915"),"nha.nl" => array("ds1.nl", "285", "14623"),"ponyparkcity.nl" => array("ds1.nl", "323", "16318"),"e-matching.nl" => array("ds1.nl", "333", "16583"),"opvakantievanafeindhoven.nl" => array("ds1.nl", "387", "23293"),"opvakantievanafrotterdam.nl" => array("ds1.nl", "389", "23295"),"opvakantievanafeelde.nl" => array("ds1.nl", "390", "23296"),"kamernet.nl" => array("ds1.nl", "447", "26287"),"parship.nl" => array("ds1.nl", "457", "26628"),"cardelmar.com" => array("ds1.nl", "461", "26962"),"nl.gay-parship.com" => array("ds1.nl", "493", "28421"),"be2.nl" => array("ds1.nl", "532", "31833"),"golfreizen.nu" => array("ds1.nl", "653", "38798"),"maxivillas.com" => array("ds1.nl", "688", "40929"),"simpel.nl" => array("ds1.nl", "858", "51048"),"newfigure.com" => array("ds1.nl", "940", "56261"),"suntip.nl" => array("ds1.nl", "951", "57956"),"datingeasy.nl" => array("ds1.nl", "955", "59255"),"trendy-hotels.nl" => array("ds1.nl", "978", "62965"),"jambo.nl" => array("ds1.nl", "1204", "76001"),"nle.nl" => array("ds1.nl", "1231", "77652"),"doenkado.nl" => array("ds1.nl", "1305", "80616"),"office-deals.nl" => array("ds1.nl", "1441", "86251"),"freshlabelz.nl" => array("ds1.nl", "1446", "86699"),"tennisdirect.nl" => array("ds1.nl", "1474", "88693"),"voetbaldirect.nl" => array("ds1.nl", "1475", "88694"),"fitnessmerken.nl" => array("ds1.nl", "1504", "90381"),"eugrowshop.eu" => array("ds1.nl", "1574", "95251"),"sprookjescamping.nl" => array("ds1.nl", "1669", "100693"),"weetwiejedate.nl" => array("ds1.nl", "1708", "102086"),"oranje-artikelen-winkel.nl" => array("ds1.nl", "1726", "102730"),"eenvakantiehuisje.nl" => array("ds1.nl", "1773", "105565"),"vakantieveluwe.nl" => array("ds1.nl", "1777", "105569"),"verkleedkledingwinkel.nl" => array("ds1.nl", "2004", "118358"),"funenfeestwinkel.nl" => array("ds1.nl", "2006", "118360"),"partyshopper.be" => array("ds1.nl", "2022", "119184"),"BeleefAmerika.nl" => array("ds1.nl", "2062", "122118"),"vx.nl" => array("ds1.nl", "2078", "122974"),"zoweg.nl" => array("ds1.nl", "2122", "126624"),"de-speelgoedwinkel.nl" => array("ds1.nl", "2388", "142940"),"feestpruikenwinkel.nl" => array("ds1.nl", "2446", "144922"),"vijftigplusdating.nl" => array("ds1.nl", "2770", "158824"),"hotels.nl" => array("ds1.nl", "2830", "161478"),"ondeugend-daten.nl" => array("ds1.nl", "2964", "1110826"),"tomtom.nl" => array("ds1.nl", "2967", "1111007"),"golftest.nl" => array("ds1.nl", "2984", "1112226"),"wildlands.nl" => array("ds1.nl", "3071", "1132353"),"5cc.nl" => array("ds1.nl", "3316", "1157092"),"plein.nl" => array("ds1.nl", "3366", "1161224"),"brandeal.nl" => array("ds1.nl", "3534", "1172339"),"vouchervandaag.nl" => array("ds1.nl", "3758", "1212732"),"subsidesports.nl" => array("ds1.nl", "3770", "1213688"),"no-ice.nl" => array("ds1.nl", "3792", "1215428"),"brandsupply.nl" => array("ds1.nl", "3869", "1219909"),"wandel-geest.nl" => array("ds1.nl", "4040", "1233710"),"tennis-geest.nl" => array("ds1.nl", "4042", "1233712"),"winter-geest.nl" => array("ds1.nl", "4044", "1233713"),"keukensduitsland.nl" => array("ds1.nl", "4093", "1235758"),"vanmourikschoenen.nl" => array("ds1.nl", "5613", "1258864"),"yumeko.nl" => array("ds1.nl", "5632", "1263824"),"lowlens.nl" => array("ds1.nl", "5638", "1264350"),"vitaminstore.nl" => array("ds1.nl", "5676", "1266442"),"worldwidecampers.com" => array("ds1.nl", "5734", "1268236"),"topsnowshop.nl" => array("ds1.nl", "5857", "1272575"),"iparts4u.nl" => array("ds1.nl", "5897", "1273901"),"succubus.nl" => array("ds1.nl", "6140", "1285440"),"vanoutlet.nl" => array("ds1.nl", "6266", "1291124"),"voordeeluitjes.nl" => array("ds1.nl", "6411", "1319493"),"meditel.nl" => array("ds1.nl", "6419", "1298009"),"123wonen.nl" => array("ds1.nl", "6581", "1308381"),"wunderlandkalkar.eu" => array("ds1.nl", "6611", "1309181"),"robinmobile.nl" => array("ds1.nl", "6693", "1312627"),"yoursminc.nl" => array("ds1.nl", "6971", "1322109"),"zorgtoeslag.nl" => array("ds1.nl", "7063", "1327151"),"hipinderegen.nl" => array("ds1.nl", "7067", "1327305"),"kwik-fit.nl" => array("ds1.nl", "7101", "1329357"),"dagtickets.nl" => array("ds1.nl", "7115", "1329789"),"kekkekids.nl" => array("ds1.nl", "7157", "1331247"),"brievenbusbloemen.nl" => array("ds1.nl", "7248", "1336066"),"carldenig.nl" => array("ds1.nl", "7268", "1336888"),"mijndomeinauto.nl" => array("ds1.nl", "7320", "1341277"),"huurtoeslag.nl" => array("ds1.nl", "7369", "1342939"),"vergelijkers.daisycon.com" => array("ds1.nl", "7401", "1344059"),"iparkingschiphol.eu" => array("ds1.nl", "7477", "1350272"),"hardloop-geest.nl" => array("ds1.nl", "7499", "1350821"),"oad.nl" => array("ds1.nl", "7562", "1352504"),"morres.nl" => array("ds1.nl", "7585", "1353162"),"fotodevakman.nl" => array("ds1.nl", "7605", "1354137"),"flapoorstickers.nl" => array("ds1.nl", "7611", "1354399"),"nl.aliexpress.com" => array("ds1.nl", "7630", "1354896"),"dx.com" => array("ds1.nl", "7645", "1355927"),"sandalenshop.nl" => array("ds1.nl", "7684", "1357462"),"zorgthuiswinkel.nl" => array("ds1.nl", "7705", "1358519"),"voetbal-geest.nl" => array("ds1.nl", "7839", "1364843"),"fitness-geest.nl" => array("ds1.nl", "7845", "1365151"),"usedpc4sale.nl" => array("ds1.nl", "8137", "1375033"),"goedkoopste-kantoorartikelen.nl" => array("ds1.nl", "8191", "1377583"),"greenchoice.nl" => array("lt45.net", "8296", "1382600"),"247autoverkopen.nl" => array("ds1.nl", "8327", "1383977"),"webshopvoorhonden.nl" => array("ds1.nl", "8356", "1385220"),"webshopvoorkatten.nl" => array("ds1.nl", "8360", "1385278"),"trk.thinkaction.com" => array("ds1.nl", "8373", "1386041"),"mysurvey.nl" => array("ds1.nl", "8386", "1386082"),"globaltestmarket.com" => array("ds1.nl", "8400", "1386096"),"rec-eu.i-say.com" => array("ds1.nl", "8413", "1386231"),"opinieland.nl" => array("ds1.nl", "8433", "1386297"),"laptops4all.nl" => array("ds1.nl", "8473", "1388527"),"sportiek.com" => array("ds1.nl", "8485", "1389201"),"licentie2go.nl" => array("ds1.nl", "8501", "1389987"),"huisdierzaak.nl" => array("ds1.nl", "8552", "1391804"),"6deals.nl" => array("ds1.nl", "8567", "1391913"),"online-voordeelacties.nl" => array("ds1.nl", "8589", "1393045"),"samsam.samr.nl" => array("dt51.net", "8783", "1401943"),"blueprinteyewear.com" => array("dt51.net", "8915", "1409639"),"woononline.nl" => array("dt51.net", "9075", "1414365"),"shopndrop.nl" => array("dt51.net", "9081", "1414609"),"ikwilvanmijnautoaf.nl" => array("dt51.net", "9183", "1416027"),"geeektech.com" => array("dt51.net", "9312", "1420934"),"50liefde.nl" => array("dt51.net", "9519", "1427615"),"websa.nl" => array("dt51.net", "9538", "1429264"),"gsmweb.nl" => array("dt51.net", "9586", "1431360"),"sierbetononline.nl" => array("dt51.net", "9698", "1434632"),"toysforjoy.nl" => array("dt51.net", "9707", "1434767"),"remarkt.nl" => array("ds1.nl", "9711", "1434953"),"alltours.nl" => array("dt51.net", "9803", "1438619"),"d-reizen.nl" => array("dt51.net", "9806", "1439082"),"abcarrental.com" => array("at19.net", "9880", "1442252"),"wintersport-store.com" => array("at19.net", "9903", "1442863"),"maxguitarstore.com" => array("at19.net", "9913", "1443187"),"drogisterijplus.nl" => array("at19.net", "9983", "1446149"),"kesvisum.nl" => array("at19.net", "10051", "1448035"),"probeernu.nl" => array("at19.net", "10087", "1449139"),"shop4nl.com" => array("lt45.net", "10319", "1457089"),"comforttrends.nl" => array("lt45.net", "10349", "1457317"),"gezondmarkt.nl" => array("lt45.net", "10434", "1461588"),"pranayur.nl" => array("lt45.net", "10438", "1461592"),"sniztop.nl" => array("lt45.net", "10450", "1462112"),"sloffen-specialist.nl" => array("ds1.nl", "10456", "1462310"),"autovendi.nl" => array("lt45.net", "10614", "1468698"),"hbb24.nl" => array("lt45.net", "10624", "1469334"),"denksport.nl" => array("lt45.net", "10630", "1469982"),"gsmsale.nl" => array("ds1.nl", "10636", "1470952"),"panelclix.com" => array("lt45.net", "10710", "1475166"),"grotekadoshop.nl" => array("lt45.net", "10746", "1477008"),"cruisereizen.nl" => array("lt45.net", "10764", "1477952"),"ockyz.com" => array("lt45.net", "10776", "1478544"),"floowtravel.nl" => array("lt45.net", "10818", "1484052"),"estivant.nl" => array("lt45.net", "10820", "1484092"),"kinq.nl" => array("lt45.net", "10846", "1485388"),"wytegearre.nl" => array("ds1.nl", "10920", "1487870"),"feenstra.com" => array("lt45.net", "11082", "1492390"),"ikwilzitzakken.nl" => array("lt45.net", "11092", "1492826"),"gaborstore.nl" => array("lt45.net", "11098", "1492844"),"nle.nl" => array("ds1.nl", "11122", "1493506"),"bungalow.net" => array("lt45.net", "11126", "1493530"),"dierplagenshop.nl" => array("lt45.net", "11132", "1493630"),"spaonline.com" => array("lt45.net", "11136", "1493788"),"kantoormeubelenplus.nl" => array("lt45.net", "11150", "1494536"),"tix.nl" => array("lt45.net", "11172", "1495780"),"vitamineman.nl" => array("lt45.net", "11198", "1497174"),"ditverzinjeniet.nl" => array("lt45.net", "11208", "1497656"),"ditverzinjeniet.be" => array("lt45.net", "11222", "1497968"),"kidsgigant.nl" => array("lt45.net", "11252", "1498772"),"mobieltekoop.nl" => array("lt45.net", "11278", "1500062"),"ikwilvanmijnmotorfietsaf.nl" => array("dt51.net", "11312", "1502176"),"huurstunt.nl" => array("lt45.net", "11314", "1502196"),"kamerstunt.nl" => array("lt45.net", "11316", "1502198"),"timefortrends.nl" => array("lt45.net", "11354", "1502802"),"hbcare.nl" => array("lt45.net", "11364", "1502886"),"autobench.nl" => array("lt45.net", "11422", "1504736"),"puppyren.nl" => array("lt45.net", "11424", "1504738"),"verrekijkerdirect.nl" => array("lt45.net", "11426", "1504740"),"reisbench.nl" => array("lt45.net", "11428", "1504742"),"gratisuitgifte.nl" => array("lt45.net", "11450", "1505980"),"erovibes.nl" => array("lt45.net", "11454", "1506022"),"d-deals.nl" => array("dt51.net", "11512", "1511600"),"home8-alarm.nl" => array("lt45.net", "11518", "1511694"),"epine.nl" => array("lt45.net", "11520", "1511696"),"designbrands.nl" => array("lt45.net", "11552", "1512988"),"hoiveluwe.nl" => array("lt45.net", "11610", "1515538"),"msfinanciallease.nl" => array("lt45.net", "11622", "1516134"),"freddelabretoniere.com" => array("lt45.net", "11666", "1517924"),"shabbiesamsterdam.com" => array("lt45.net", "11668", "1517928"),"co88collection.nl" => array("lt45.net", "11670", "1518152"),"abonnement.topgear.nl" => array("lt45.net", "11702", "1518854"),"vitaminecompleet.nl" => array("lt45.net", "11708", "1519074"),"droomidee.nl" => array("lt45.net", "11792", "1521696"),"avs4you.com" => array("lt45.net", "11794", "1521752"),"sepagreen.energieaanvragen.net" => array("lt45.net", "11806", "1522026"),"meubis.be" => array("lt45.net", "11842", "1523340"),"vanarendonk.nl" => array("lt45.net", "11852", "1523584"),"m2trading.com" => array("lt45.net", "11882", "1525046"),"fotokonijnenberg.nl" => array("lt45.net", "11908", "1526066"),"cvketelvoordeel.nl" => array("lt45.net", "11916", "1526166"),"cewe.nl" => array("lt45.net", "11918", "1526258"),"mycooks.nl" => array("lt45.net", "11934", "1526882"),"historia.mijntijdschrift.net" => array("lt45.net", "11970", "1527698"),"wib.mijntijdschrift.net" => array("lt45.net", "11972", "1527700"),"oadbus.nl" => array("ds1.nl", "11988", "1528138"),"holidaysuites.be" => array("lt45.net", "12006", "1529050"),"legalparrot.nl" => array("lt45.net", "12024", "1529642"),"pricestunter.nl" => array("lt45.net", "12052", "1530582"),"wijkopenautos.nl" => array("lt45.net", "12082", "1532796"),"bungalows.nl" => array("lt45.net", "12098", "1533236"),"fietsparadijs.com" => array("lt45.net", "12168", "1536530"),"montel.nl" => array("lt45.net", "12178", "1536568"),"shoefresh.eu" => array("lt45.net", "12210", "1537390"),"living.mijntijdschrift.net" => array("lt45.net", "12226", "1537778"),"paleo.mijntijdschrift.net" => array("lt45.net", "12228", "1537780"),"eindelijkglasvezel.nl" => array("lt45.net", "12230", "1537874"),"duosleep.nl" => array("lt45.net", "12238", "1537968"),"topgear.nl" => array("lt45.net", "12240", "1538198"),"makrokerstpakketten.nl" => array("lt45.net", "12276", "1540242"),"fitwinkel.nl" => array("ds1.nl", "12318", "1541530"),"booqees.nl" => array("lt45.net", "12380", "1543628"),"beet.mijntijdschrift.net" => array("lt45.net", "12382", "1543718"),"karper.mijntijdschrift.net" => array("lt45.net", "12384", "1543720"),"play-start.com" => array("lt45.net", "12390", "1543886"),"gamesdeal.com" => array("lt45.net", "12440", "1545396"),"maxenluna.nl" => array("lt45.net", "12442", "1545402"),"oppasland.nl" => array("lt45.net", "12504", "1548166"),"landidee.mijntijdschrift.net" => array("lt45.net", "12534", "1548986"),"tuin.mijntijdschrift.net" => array("lt45.net", "12536", "1548992"),"tuinoptafel.mijntijdschrift.net" => array("lt45.net", "12540", "1549068"),"hvd.mijntijdschrift.net" => array("lt45.net", "12544", "1549128"),"morethanhip.nl" => array("lt45.net", "12562", "1549416"),"slagbijchatham.nl" => array("lt45.net", "12582", "1550186"),"kijoo.nl" => array("lt45.net", "12588", "1550346"),"startselect.com" => array("lt45.net", "12604", "1550574"),"duiken.mijntijdschrift.net" => array("lt45.net", "12634", "1551452"),"apotheekenhuid.nl" => array("lt45.net", "12650", "1551926"),"shopcore.nl" => array("lt45.net", "12660", "1552090"),"kompashosting.nl" => array("lt45.net", "12682", "1552430"),"vergelijkers.daisycon.com" => array("ds1.nl", "12688", "1552454"),"stuntpakker.nl" => array("lt45.net", "12722", "1555518"),"opposuits.nl" => array("lt45.net", "12730", "1556006"),"store.ubi.com" => array("lt45.net", "12734", "1556736"),"greenwatch.nl" => array("lt45.net", "12772", "1558676"),"zaful.com" => array("lt45.net", "12810", "1561444"),"volumerate.com" => array("lt45.net", "12835", "1565250"),"avh-outdoor.nl" => array("lt45.net", "12843", "1565444"),"oneplanetcrowd.com" => array("lt45.net", "12849", "1565865"),"jakosportkleding.nl" => array("lt45.net", "12855", "1566080"),"fnl.nl" => array("lt45.net", "12874", "1566882"),"maascomputers.nl" => array("lt45.net", "12877", "1567022"),"dailywatchclub.nl" => array("lt45.net", "12880", "1567064"),"vavaonderzoek.nl" => array("lt45.net", "12905", "1568026"),"cashze.nl" => array("lt45.net", "12906", "1568027"),"summertoys.nl" => array("lt45.net", "12910", "1568169"),"tijdschrift.nl" => array("lt45.net", "12913", "1568401"),"logistiekconcurrent.nl" => array("lt45.net", "12914", "1568535"),"goedgemerkt.nl" => array("lt45.net", "12921", "1569280"),"designonline24.be" => array("lt45.net", "12932", "1570141"),"acculaders.nl" => array("lt45.net", "12933", "1570313"),"fietstas.com" => array("lt45.net", "12934", "1570314"),"bladcadeau.nl" => array("lt45.net", "12963", "1571789"),"Marleyspoon.nl" => array("lt45.net", "12988", "1572481"),"intenswonen.nl" => array("lt45.net", "12997", "1572685"),"albeka.nl" => array("lt45.net", "13011", "1573177"),"123opzeggen.nl" => array("lt45.net", "13030", "1573595"),"lalashops.nl" => array("lt45.net", "13043", "1574088"),"webwinkel.ad.nl" => array("lt45.net", "13048", "1574297"),"webwinkel.bd.nl" => array("lt45.net", "13049", "1574298"),"webwinkel.ed.nl" => array("lt45.net", "13050", "1574299"),"webwinkel.bndestem.nl" => array("lt45.net", "13051", "1574300"),"webwinkel.pzc.nl" => array("lt45.net", "13052", "1574301"),"webwinkel.gelderlander.nl" => array("lt45.net", "13053", "1574302"),"webwinkel.tubantia.nl" => array("lt45.net", "13054", "1574303"),"webwinkel.destentor.nl" => array("lt45.net", "13055", "1574304"),"offerte.nl" => array("lt45.net", "13058", "1574504"),"well-fair.nl" => array("lt45.net", "13059", "1574505"),"antrekk.nl" => array("lt45.net", "13064", "1574622"),"freewear.nl" => array("lt45.net", "13066", "1574630"),"secretrooms.nl" => array("lt45.net", "13067", "1574676"),"topoutdoorshop.nl" => array("ds1.nl", "13076", "1575123"),"gfkpanel.nl" => array("lt45.net", "13077", "1575138"),"geniusclass.eu" => array("lt45.net", "13078", "1575151"),"ipadspullekes.nl" => array("lt45.net", "13079", "1575191"),"probeernu.nl" => array("lt45.net", "13085", "1575543"),
			"legalmatters.com" => array("lt45.net", "13087", "1575585"),"byfit.nl" => array("lt45.net", "13091", "1575784"),"icocryptex.io" => array("lt45.net", "13096", "1575925"),"alfredogonzales.com" => array("lt45.net", "13100", "1576117"),"nutritionmaniacs.com" => array("lt45.net", "13101", "1576156"),"donskussen.nl" => array("lt45.net", "13106", "1576627"),"bold-banana.nl" => array("lt45.net", "13117", "1577109"),"hetkleinsteloo.nl" => array("lt45.net", "13118", "1577110"),"scootmobielhulpdienst.nl" => array("lt45.net", "13121", "1577252"),"agu.com" => array("lt45.net", "13122", "1577277"),"jiggy.nl" => array("dt51.net", "13125", "1577381"),"abonnement.veronicamagazine.nl" => array("at19.net", "13128", "1577431"),"monteuraanhuis.nl" => array("lt45.net", "13135", "1577544"),"opposuits.be" => array("lt45.net", "13136", "1577545"),"goodiebox.nl" => array("lt45.net", "13137", "1577546"),"probeernu.nl" => array("lt45.net", "13151", "1577975"),"gereedschapdeal.com" => array("lt45.net", "13162", "1578585"),"autovoorkinderen.nl" => array("lt45.net", "13163", "1578586"),"haarcentrum.nl" => array("lt45.net", "13174", "1579023"),"lightsale.nl" => array("lt45.net", "13175", "1579044"),"debijlesmeester.nl" => array("lt45.net", "13183", "1579292"),"contentmods.com" => array("dt51.net", "13187", "1579428"),"goedkoopste-kantoormeubilair.nl" => array("ds1.nl", "13197", "1579697"),"mobrog.com" => array("lt45.net", "13199", "1579700"),"hempworx.nl" => array("lt45.net", "13206", "1579845"),"cbd-olie-shop.nl" => array("lt45.net", "13207", "1579846"),"icebluecbd.nl" => array("lt45.net", "13208", "1579979"),"opwaarderen.nl" => array("lt45.net", "13213", "1580069"),"spiru.nl" => array("lt45.net", "13214", "1580070"),"v-gan.mijntijdschrift.net" => array("lt45.net", "13216", "1580082"),"ixorg.nl" => array("lt45.net", "13224", "1580519"),"hetcosmeticahuis.nl" => array("lt45.net", "13228", "1580603"),"allyouplay.com" => array("lt45.net", "13256", "1581736"),"cinetree.nl" => array("lt45.net", "13257", "1581939"),"verisure.nl" => array("lt45.net", "13258", "1581959"),"nanoshi.com" => array("lt45.net", "13270", "1582438"),"birdwise.nl" => array("lt45.net", "13274", "1582623"),"stellafietsen.nl" => array("lt45.net", "13287", "1583575"));

	function FindDaisySi($url){
		$FS = FindURLplusTLD($url);

		global $FindDaisy;
		return $FindDaisy[$FS];
	}


	function readArraySite($url){
		$encode = urlencode($url);
		$uri_encode = urlencode(FindURI($url));

		$Als = readarray($url);

		$Site = FindSiteName($url);

		global $FindDaisy;

		$awin = array("jaarbeurs", "gearbest", "lesara");
		$anrdoezrs = array("101shavers");
		$tcfjump = array("0cm");
		$booking = array("booking");
		$bol = array("bol");
		$Cool = array("coolblue");
		$DX = array("dx");
		$TradeTracker = array("tradetracker");
		$DaisyCon = array("drogisterij", "happyhome", "123tijdschrift", "manymorestores", "lacasita", "nationaletijdschriftenbon", "knuffelparadijs", "ritel", "ponyparkcity", "opvakantievanafeindhoven", "opvakantievanafrotterdam", "opvakantievanafeelde", "parship", "cardelmar", "nl.gay-parship", "golfreizen", "maxivillas", "simpel", "newfigure", "suntip", "trendy-hotels", "jambo", "office-deals", "freshlabelz", "tennisdirect", "voetbaldirect", "eugrowshop", "bikesplaza", "oranje-artikelen-winkel", "eenvakantiehuisje", "vakantieveluwe", "verkleedkledingwinkel", "funenfeestwinkel", "partyshopper", "BeleefAmerika", "zoweg", "de-speelgoedwinkel", "feestpruikenwinkel", "hotels", "golftest", "5cc", "subsidesports", "no-ice", "brandsupply", "worldwidecampers", "topsnowshop", "iparts4u", "succubus", "vanoutlet", "meditel", "123wonen", "robinmobile", "yoursminc", "hipinderegen", "dagtickets", "kekkekids", "carldenig", "vergelijkers.daisycon", "iparkingschiphol", "fotodevakman", "flapoorstickers", "nl.aliexpress", "dx", "sandalenshop", "zorgthuiswinkel", "usedpc4sale", "goedkoopste-kantoorartikelen", "webshopvoorhonden", "webshopvoorkatten", "trk.thinkaction", "mysurvey", "globaltestmarket", "rec-eu.i-say", "opinieland", "laptops4all", "sportiek", "licentie2go", "huisdierzaak", "6deals", "samsam.samr", "woononline", "shopndrop", "geeektech", "websa", "sierbetononline", "toysforjoy", "remarkt", "abcarrental", "drogisterijplus", "kesvisum", "shop4nl", "comforttrends", "gezondmarkt", "pranayur", "sniztop", "sloffen-specialist", "autovendi", "denksport", "gsmsale", "panelclix", "grotekadoshop", "cruisereizen", "ockyz", "floowtravel", "estivant", "kinq", "bungalow", "dierplagenshop", "spaonline", "kantoormeubelenplus", "vitamineman", "ditverzinjeniet", "kidsgigant", "mobieltekoop", "timefortrends", "hbcare", "autobench", "puppyren", "verrekijkerdirect", "reisbench", "gratisuitgifte", "erovibes", "home8-alarm", "epine", "hoiveluwe", "msfinanciallease", "co88collection", "vitaminecompleet", "droomidee", "avs4you", "meubis", "vanarendonk", "mycooks", "holidaysuites", "legalparrot", "bungalows", "fietsparadijs", "shoefresh", "eindelijkglasvezel", "duosleep", "booqees", "play-start", "maxenluna", "slagbijchatham", "startselect", "kompashosting", "vergelijkers.daisycon", "greenwatch", "zaful", "volumerate", "jakosportkleding", "maascomputers", "vavaonderzoek", "goedgemerkt", "designonline24", "acculaders", "fietstas", "albeka", "well-fair", "antrekk", "secretrooms", "topoutdoorshop", "gfkpanel", "icocryptex", "bold-banana", "jiggy", "monteuraanhuis", "goodiebox", "contentmods", "goedkoopste-kantoormeubilair", "mobrog", "hempworx", "allyouplay", "verisure", "birdwise");

		if (in_array($Site, $awin)) {
			header('Location: http://www.awin1.com/cread.php?awinmid=8315&awinaffid=283879&clickref=chex&p=' . $encode);
		}elseif (in_array($Site, $anrdoezrs)) {
			header('Location: http://www.anrdoezrs.net/links/8106588/type/dlg/sid/chex/' . $encode);
		} elseif (in_array($Site, $tcfjump)) {
			header('Location:https://t.cfjump.com/50770/t/48059?Url='. $encode . '&UniqueId=chex');
		} elseif (in_array($Site, $booking)) {
			header('Location:http://booking.com?aid=1308879&label=chex');
		}elseif (in_array($Site, $tc_tt)) {
			header('Location:http://tc.tradetracker.net/?c=1118&m=12&a=282840&r=chex&u='. $encode);
		}elseif (in_array($Site, $a1)) {
			header('Location:http://www.a1travel.com/chadwell/?tt=8953_12_282840_chex&r='. $encode);
		}elseif (in_array($Site, $Al)) {
			header('Location:http://www.aluminiumwarehouse.co.uk/tin/?tt=9296_12_282840_chex&r='. $encode);
		}elseif (in_array($Site, $Arena)) {
			header('Location:http://www.arenascollection.com/design/?tt=1673_12_282840_chex&r='. $encode);
		}elseif (in_array($Site, $BangGoods)) {
			header('Location:http://www.banggood.com/bang/?tt=16943_12_282840_chex&r='. $encode);
		}elseif (in_array($Site, $Basic)) {
			header('Location:http://www.basic-travel.com/travel/?tt=2200_12_282840_chex&r='. $encode);
		}elseif (in_array($Site, $BirdFOOT)) {
			header('Location:http://www.birdfood.co.uk/tt/?tt=6544_12_282840_chex&r='. $encode);
		}elseif (in_array($Site, $biv)) {
			header('Location:http://www.bivolino.com/custom/index.aspx?tt=12298_12_282840_chex&r='. $encode);
		}elseif (in_array($Site, $Blind)) {
			header('Location:http://www.blindsdirectonline.co.uk/blinds/?tt=24293_12_282840_chex&r='. $encode);
		}elseif (in_array($Site, $Buy)) {
			header('Location:http://www.buyincoins.com/shopping/?tt=25773_12_282840_chex&r='. $encode);
		}elseif (in_array($Site, $Camping)) {
			header('Location:http://www.campingselection.com/uk/Partners/TradeTracker/?tt=8294_12_282840_chex&r='. $encode);
		}elseif (in_array($Site, $ClickBaid)) {
			header('Location:https://click.linksynergy.com/deeplink?id=XK9XruzkyUo&u1=chex&mid=35490&murl='. $encode);
		}elseif (in_array($Site, $Colway)) {
			header('Location:https://colwayinternational.online/beauty/?tt=26078_12_282840_chex&r='. $encode);
		}elseif (in_array($Site, $A4)) {
			header('Location:https://www.a4labels.com/labels/?tt=25370_12_282840_chex&r='. $encode);
		}elseif (in_array($Site, $CT)) {
			header('Location:https://www.chicretreats.com/hotels/?tt=25704_12_282840_chex&r='. $encode);
		}elseif(in_array($Site, $bol)) {
			header('Location:https://partner.bol.com/click/click?p=2&t=url&s=51851&f=TXL&url=' . $encode);
		}elseif(in_array($Site, $Cool)) {
			header('Location:https://prf.hn/click/camref:1011l3qZq/destination:' . $encode);
		}elseif(in_array($Site, $DX)) {
			header('Location:' . $url . '?TC=USD&&Utm_rid=78139600&Utm_source=affiliate');
		}elseif (in_array($Site, $DaisyCon)) {
			header('Location:https://' . FindDaisySi($url)[0] . '/c/?si=' . FindDaisySi($url)[1] . '&li=' . FindDaisySi($url)[2] . '&wi=303581&ws=&dl=' . $encode);
		}else{
			header('Location: http://rover.ebay.com/rover/1/' . $Als . '/1?ff3=4&pub=5575349754&toolid=11800&campid=5338219191&customid=chex&mpre=' . $encode);
		}
	}
?>