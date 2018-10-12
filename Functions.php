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

	function FindAwinMid($url){
		$FAM = FindURLplusTLD($url);

		$AwinMid = array("lesara.se" => "10006", "jaarbeurs.nl" => "8315", "gearbest.com" => "6607");
		return $AwinMid[$FAM];
	}

	function FindDaisySi($url){
		$FS = FindURLplusTLD($url);

		$FindDaisy = array("drogisterij.net" => array("35", "11507"), "happyhome.nl" => array("73", "11545"), "123tijdschrift.nl" => array("129", "11601"), "manymorestores.com" => array("164", "11636"), "lacasita.com" => array("203", "11675"), "nationaletijdschriftenbon.nl" => array("215", "11687"), "knuffelparadijs.nl" => array("260", "13685"), "ritel.nl" => array("276", "13915"), "ponyparkcity.nl" => array("323", "16318"), "opvakantievanafeindhoven.nl" => array("387", "23293"), "opvakantievanafrotterdam.nl" => array("389", "23295"), "opvakantievanafeelde.nl" => array("390", "23296"), "parship.nl" => array("457", "26628"), "cardelmar.com" => array("461", "26962"), "nl.gay-parship.com" => array("493", "28421"), "golfreizen.nu" => array("653", "38798"), "maxivillas.com" => array("688", "40929"), "simpel.nl" => array("858", "51048"), "newfigure.com" => array("940", "56261"), "suntip.nl" => array("951", "57956"), "trendy-hotels.nl" => array("978", "62965"), "jambo.nl" => array("1204", "76001"), "office-deals.nl" => array("1441", "86251"), "freshlabelz.nl" => array("1446", "86699"), "tennisdirect.nl" => array("1474", "88693"), "voetbaldirect.nl" => array("1475", "88694"), "eugrowshop.eu" => array("1574", "95251"), "bikesplaza.nl" => array("1676", "100768"), "oranje-artikelen-winkel.nl" => array("1726", "102730"), "eenvakantiehuisje.nl" => array("1773", "105565"), "vakantieveluwe.nl" => array("1777", "105569"), "verkleedkledingwinkel.nl" => array("2004", "118358"), "funenfeestwinkel.nl" => array("2006", "118360"), "partyshopper.be" => array("2022", "119184"), "BeleefAmerika.nl" => array("2062", "122118"), "zoweg.nl" => array("2122", "126624"), "de-speelgoedwinkel.nl" => array("2388", "142940"), "feestpruikenwinkel.nl" => array("2446", "144922"), "hotels.nl" => array("2830", "161478"), "golftest.nl" => array("2984", "1112226"), "5cc.nl" => array("3316", "1157092"), "subsidesports.nl" => array("3770", "1213688"), "no-ice.nl" => array("3792", "1215428"), "brandsupply.nl" => array("3869", "1219909"), "worldwidecampers.com" => array("5734", "1268236"), "topsnowshop.nl" => array("5857", "1272575"), "iparts4u.nl" => array("5897", "1273901"), "succubus.nl" => array("6140", "1285440"), "vanoutlet.nl" => array("6266", "1291124"), "meditel.nl" => array("6419", "1298009"), "123wonen.nl" => array("6581", "1308381"), "robinmobile.nl" => array("6693", "1312627"), "yoursminc.nl" => array("6971", "1322109"), "hipinderegen.nl" => array("7067", "1327305"), "dagtickets.nl" => array("7115", "1329789"), "kekkekids.nl" => array("7157", "1331247"), "carldenig.nl" => array("7268", "1336888"), "vergelijkers.daisycon.com" => array("7401", "1344059"), "iparkingschiphol.eu" => array("7477", "1350272"), "fotodevakman.nl" => array("7605", "1354137"), "flapoorstickers.nl" => array("7611", "1354399"), "nl.aliexpress.com" => array("7630", "1354896"), "sandalenshop.nl" => array("7684", "1357462"), "zorgthuiswinkel.nl" => array("7705", "1358519"), "usedpc4sale.nl" => array("8137", "1375033"), "goedkoopste-kantoorartikelen.nl" => array("8191", "1377583"), "webshopvoorhonden.nl" => array("8356", "1385220"), "webshopvoorkatten.nl" => array("8360", "1385278"), "trk.thinkaction.com" => array("8373", "1386041"), "mysurvey.nl" => array("8386", "1386082"), "globaltestmarket.com" => array("8400", "1386096"), "rec-eu.i-say.com" => array("8413", "1386231"), "opinieland.nl" => array("8433", "1386297"), "laptops4all.nl" => array("8473", "1388527"), "sportiek.com" => array("8485", "1389201"), "licentie2go.nl" => array("8501", "1389987"), "huisdierzaak.nl" => array("8552", "1391804"), "6deals.nl" => array("8567", "1391913"), "samsam.samr.nl" => array("8783", "1401943"), "woononline.nl" => array("9075", "1414365"), "shopndrop.nl" => array("9081", "1414609"), "geeektech.com" => array("9312", "1420934"), "websa.nl" => array("9538", "1429264"), "sierbetononline.nl" => array("9698", "1434632"), "toysforjoy.nl" => array("9707", "1434767"), "remarkt.nl" => array("9711", "1434953"), "abcarrental.com" => array("9880", "1442252"), "drogisterijplus.nl" => array("9983", "1446149"), "kesvisum.nl" => array("10051", "1448035"), "shop4nl.com" => array("10319", "1457089"), "comforttrends.nl" => array("10349", "1457317"), "gezondmarkt.nl" => array("10434", "1461588"), "pranayur.nl" => array("10438", "1461592"), "sniztop.nl" => array("10450", "1462112"), "sloffen-specialist.nl" => array("10456", "1462310"), "autovendi.nl" => array("10614", "1468698"), "denksport.nl" => array("10630", "1469982"), "gsmsale.nl" => array("10636", "1470952"), "panelclix.com" => array("10710", "1475166"), "grotekadoshop.nl" => array("10746", "1477008"), "cruisereizen.nl" => array("10764", "1477952"), "ockyz.com" => array("10776", "1478544"), "floowtravel.nl" => array("10818", "1484052"), "estivant.nl" => array("10820", "1484092"), "kinq.nl" => array("10846", "1485388"), "bungalow.net" => array("11126", "1493530"), "dierplagenshop.nl" => array("11132", "1493630"), "spaonline.com" => array("11136", "1493788"), "kantoormeubelenplus.nl" => array("11150", "1494536"), "vitamineman.nl" => array("11198", "1497174"), "ditverzinjeniet.nl" => array("11208", "1497656"), "ditverzinjeniet.be" => array("11222", "1497968"), "kidsgigant.nl" => array("11252", "1498772"), "mobieltekoop.nl" => array("11278", "1500062"), "timefortrends.nl" => array("11354", "1502802"), "hbcare.nl" => array("11364", "1502886"), "autobench.nl" => array("11422", "1504736"), "puppyren.nl" => array("11424", "1504738"), "verrekijkerdirect.nl" => array("11426", "1504740"), "reisbench.nl" => array("11428", "1504742"), "gratisuitgifte.nl" => array("11450", "1505980"), "erovibes.nl" => array("11454", "1506022"), "home8-alarm.nl" => array("11518", "1511694"), "epine.nl" => array("11520", "1511696"), "hoiveluwe.nl" => array("11610", "1515538"), "msfinanciallease.nl" => array("11622", "1516134"), "co88collection.nl" => array("11670", "1518152"), "vitaminecompleet.nl" => array("11708", "1519074"), "droomidee.nl" => array("11792", "1521696"), "avs4you.com" => array("11794", "1521752"), "meubis.be" => array("11842", "1523340"), "vanarendonk.nl" => array("11852", "1523584"), "mycooks.nl" => array("11934", "1526882"), "holidaysuites.be" => array("12006", "1529050"), "legalparrot.nl" => array("12024", "1529642"), "bungalows.nl" => array("12098", "1533236"), "fietsparadijs.com" => array("12168", "1536530"), "shoefresh.eu" => array("12210", "1537390"), "eindelijkglasvezel.nl" => array("12230", "1537874"), "duosleep.nl" => array("12238", "1537968"), "booqees.nl" => array("12380", "1543628"), "play-start.com" => array("12390", "1543886"), "maxenluna.nl" => array("12442", "1545402"), "slagbijchatham.nl" => array("12582", "1550186"), "startselect.com" => array("12604", "1550574"), "kompashosting.nl" => array("12682", "1552430"), "vergelijkers.daisycon.com" => array("12688", "1552454"), "greenwatch.nl" => array("12772", "1558676"), "zaful.com" => array("12810", "1561444"), "volumerate.com" => array("12835", "1565250"), "jakosportkleding.nl" => array("12855", "1566080"), "maascomputers.nl" => array("12877", "1567022"), "vavaonderzoek.nl" => array("12905", "1568026"), "goedgemerkt.nl" => array("12921", "1569280"), "designonline24.be" => array("12932", "1570141"), "acculaders.nl" => array("12933", "1570313"), "fietstas.com" => array("12934", "1570314"), "albeka.nl" => array("13011", "1573177"), "well-fair.nl" => array("13059", "1574505"), "antrekk.nl" => array("13064", "1574622"), "secretrooms.nl" => array("13067", "1574676"), "topoutdoorshop.nl" => array("13076", "1575123"), "gfkpanel.nl" => array("13077", "1575138"), "icocryptex.io" => array("13096", "1575925"), "bold-banana.nl" => array("13117", "1577109"), "jiggy.nl" => array("13125", "1577381"), "monteuraanhuis.nl" => array("13135", "1577544"), "goodiebox.nl" => array("13137", "1577546"), "contentmods.com" => array("13187", "1579428"), "goedkoopste-kantoormeubilair.nl" => array("13197", "1579697"), "mobrog.com" => array("13199", "1579700"), "hempworx.nl" => array("13206", "1579845"), "allyouplay.com" => array("13256", "1581736"), "verisure.nl" => array("13258", "1581959"), "birdwise.nl" => array("13274", "1582623"));
		return $FindDaisy[$FS];
	}

	function readArraySite($url){
		$encode = urlencode($url);

		$Als = readarray($url);

		$Site = FindSiteName($url);

		$awin = array("jaarbeurs", "gearbest", "lesara");
		$anrdoezrs = array("101shavers");
		$tcfjump = array("0cm");
		$booking = array("booking");
		$bol = array("bol");
		$Cool = array("coolblue");
		$DX = array("dx");
		$TradeTracker = array("tradetracker");
		$DaisyCon = array("lacasita", "voetbaldirect");

		if (in_array($Site, $awin)) {
			// header('Location: http://www.awin1.com/cread.php?awinmid=8315&awinaffid=283879&clickref=chex&p=' . $encode);
				$awin1 = 'http://www.awin1.com/cread.php?awinmid=' . FindAwinMid($url) . '&awinaffid=283879&clickref=chex&p=' . $encode;
				echo $awin1;
		}elseif (in_array($Site, $anrdoezrs)) {
			// header('Location: http://www.anrdoezrs.net/links/8106588/type/dlg/sid/chex/' . $encode);
			$Eanrdoezrs = 'http://www.anrdoezrs.net/links/8106588/type/dlg/sid/chex/' . $encode;
			echo $Eanrdoezrs;
		} elseif (in_array($Site, $tcfjump)) {
			// header('Location:https://t.cfjump.com/50770/t/48059?Url='. $encode . '&UniqueId=chex');
			$Etcfjump = 'https://t.cfjump.com/50770/t/48059?Url='. $encode . '&UniqueId=chex';
			echo $Etcfjump;
		} elseif (in_array($Site, $booking)) {
			// header('Location:http://booking.com?aid=1308879&label=chex');
			$Book = 'http://booking.com?aid=1308879&label=chex';
			echo $Book;
		}elseif (in_array($Site, $tc_tt)) {
			// header('Location:http://tc.tradetracker.net/?c=1118&m=12&a=282840&r=chex&u='. $encode .);
			$tctt = 'http://tc.tradetracker.net/?c=1118&m=12&a=282840&r=chex&u=' . $encode;
			echo $tctt;
		}elseif (in_array($Site, $a1)) {
			// header('Location:http://www.a1travel.com/chadwell/?tt=8953_12_282840_chex&r='. $encode);
			$a1t = 'http://www.a1travel.com/chadwell/?tt=8953_12_282840_chex&r=' . $encode;
			echo $a1t;
		}elseif (in_array($Site, $Al)) {
			// header('Location:http://www.aluminiumwarehouse.co.uk/tin/?tt=9296_12_282840_chex&r='. $encode);
			$Aluminium = 'http://www.aluminiumwarehouse.co.uk/tin/?tt=9296_12_282840_chex&r=' . $encode;
			echo $Aluminium;
		}elseif (in_array($Site, $Arena)) {
			// header('Location:http://www.arenascollection.com/design/?tt=1673_12_282840_chex&r='. $encode);
			$AC = 'http://www.arenascollection.com/design/?tt=1673_12_282840_chex&r=' . $encode;
			echo $AC;
		}elseif (in_array($Site, $BangGoods)) {
			// header('Location:http://www.banggood.com/bang/?tt=16943_12_282840_chex&r='. $encode);
			$BG = 'http://www.banggood.com/bang/?tt=16943_12_282840_chex&r=' . $encode;
			echo $BG;
		}elseif (in_array($Site, $Basic)) {
			// header('Location:http://www.basic-travel.com/travel/?tt=2200_12_282840_chex&r='. $encode);
			$BT = 'http://www.basic-travel.com/travel/?tt=2200_12_282840_chex&r=' . $encode;
			echo $BT;
		}elseif (in_array($Site, $BirdFOOT)) {
			// header('Location:http://www.birdfood.co.uk/tt/?tt=6544_12_282840_chex&r='. $encode);
			$BF = 'http://www.birdfood.co.uk/tt/?tt=6544_12_282840_chex&r=' . $encode;
			echo $BF;
		}elseif (in_array($Site, $biv)) {
			// header('Location:http://www.bivolino.com/custom/index.aspx?tt=12298_12_282840_chex&r='. $encode);
			$BI = 'http://www.bivolino.com/custom/index.aspx?tt=12298_12_282840_chex&r=' . $encode;
			echo $BI;
		}elseif (in_array($Site, $Blind)) {
			// header('Location:http://www.blindsdirectonline.co.uk/blinds/?tt=24293_12_282840_chex&r='. $encode);
			$Blinds = 'http://www.blindsdirectonline.co.uk/blinds/?tt=24293_12_282840_chex&r=' . $encode;
			echo $Blinds;
		}elseif (in_array($Site, $Buy)) {
			// header('Location:http://www.buyincoins.com/shopping/?tt=25773_12_282840_chex&r='. $encode);
			$BC = 'http://www.buyincoins.com/shopping/?tt=25773_12_282840_chex&r=' . $encode;
			echo $BC;
		}elseif (in_array($Site, $Camping)) {
			// header('Location:http://www.campingselection.com/uk/Partners/TradeTracker/?tt=8294_12_282840_chex&r='. $encode);
			$Camp = 'http://www.campingselection.com/uk/Partners/TradeTracker/?tt=8294_12_282840_chex&r=' . $encode;
			echo $Camp;
		}elseif (in_array($Site, $ClickBaid)) {
			// header('Location:https://click.linksynergy.com/deeplink?id=XK9XruzkyUo&u1=chex&mid=35490&murl='. $encode);
			$clik = 'https://click.linksynergy.com/deeplink?id=XK9XruzkyUo&u1=chex&mid=35490&murl=' . $encode;
			echo $clik;
		}elseif (in_array($Site, $Colway)) {
			// header('Location:https://colwayinternational.online/beauty/?tt=26078_12_282840_chex&r='. $encode);
			$Col = 'https://colwayinternational.online/beauty/?tt=26078_12_282840_chex&r=' . $encode;
			echo $Col;
		}elseif (in_array($Site, $A4)) {
			// header('Location:https://www.a4labels.com/labels/?tt=25370_12_282840_chex&r='. $encode);
			$A4tje = 'https://www.a4labels.com/labels/?tt=25370_12_282840_chex&r=' . $encode;
			echo $A4tje;
		}elseif (in_array($Site, $CT)) {
			// header('Location:https://www.chicretreats.com/hotels/?tt=25704_12_282840_chex&r='. $encode);
			$Chick = 'https://www.chicretreats.com/hotels/?tt=25704_12_282840_chex&r=' . $encode;
			echo $Chick;
		}elseif(in_array($Site, $bol)) {
			header('Location:https://partner.bol.com/click/click?p=2&t=url&s=51851&f=TXL&url=' . $encode);
			// $boll = 'https://partner.bol.com/click/click?p=2&t=url&s=51851&f=TXL&url=' . $encode;
			// echo '<a href="' . $boll . '">Test Bitch</a>';
		}elseif(in_array($Site, $Cool)) {
			// header('Location:https://partner.bol.com/click/click?p=2&t=url&s=51851&f=TXL&url=' . $encode);
			$CB = 'https://prf.hn/click/camref:1101l3r4E/destination:' . $encode;
			echo '<a href="' . $CB . '">Test Bitch</a>';
		}elseif(in_array($Site, $DX)) {
			header('Location:' . $url . '?TC=USD&&Utm_rid=78139600&Utm_source=affiliate');
			// $xD = $url . '?TC=USD&&Utm_rid=78139600&Utm_source=affiliate';
			// echo '<a href="' . $xD . '">Test Bitch</a>';
		}elseif (in_array($Site, $DaisyCon)) {
			// header('Location:https://ds1.nl/c/?si=203&li=11675&wi=303581&ws=&dl=' . $encode);
			$ds1 = 'https://ds1.nl/c/?si=' . FindDaisySi($url)[0] . '&li=' . FindDaisySi($url)[1] . '&wi=303581&ws=&dl=' . $encode;
			echo $ds1;
		}else{
			// header('Location: http://rover.ebay.com/rover/1/' . $Als . '/1?ff3=4&pub=5575349754&toolid=11800&campid=5338219191&customid=chex&mpre=' . $encode);
			$ebay = 'http://rover.ebay.com/rover/1/' . $Als . '/1?ff3=4&pub=5575349754&toolid=11800&campid=5338219191&customid=chex&mpre=' . $encode;
			echo $ebay;
		}
	}
?>