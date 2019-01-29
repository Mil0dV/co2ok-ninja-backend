<?php
	include 'arrays.php';
	include 'FunctionsFind.php';
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
		preg_match('|[^.]*\K.\K[^/]*|', $url, $match);
		return $match[0];
	}

	function FindURLplusTLD($url){
		preg_match('|^[^/]*/[^/]*/\K.+?(?=/)|', $url, $match);
		return str_replace("www.", "", $match[0]);
	}

	function FindURI($url){
		preg_match('|^[^/]*/[^/]*/[^/]*/(.*)$|', $url, $match);
		return $match[1];
	}

	function readArraySite($url, $strip_url){
		$encode = urlencode($url);
		$uri_encode = urlencode(FindURI($url));

		$Als = readarray($url);

		$Site = (FindURLplusTLD($strip_url) ? FindURLplusTLD($strip_url) : $strip_url);

		global $TradeTrackersThingsElse;
		global $AwinMid;
		global $TradeTracker;
		global $FindDaisy;
		global $Coolblue;
		global $YieldKit;

		$anrdoezrs = array("101shavers");
		$tcfjump = array("0cm.com");
		$booking = array("booking.com");
		$bol = array("bol.com");
		$DX = array("dx.com");
		$ebay = array("ebay.at","ebay.be","ebay.ca","ebay.ch","ebay.co.uk","ebay.com","ebay.com.au","ebay.de","ebay.es","ebay.fr","ebay.ie","ebay.it","ebay.nl");

		if (isset($AwinMid[$Site])) {
			return 'http://www.awin1.com/cread.php?awinmid=' . FindAwinMid($url) . '&awinaffid=533371&clickref=chex&p=' . $encode;
		}elseif (in_array($Site, $anrdoezrs)) {
			return 'http://www.anrdoezrs.net/links/8106588/type/dlg/sid/chex/' . $encode;
		} elseif (in_array($Site, $tcfjump)) {
			return 'https://t.cfjump.com/50770/t/48059?Url='. $encode . '&UniqueId=chex';
		} elseif (in_array($Site, $booking)) {
			return 'http://booking.com?aid=1627502&label=chex';
		}elseif (isset($TradeTracker[$Site])){
			return 'http://tc.tradetracker.net/?c=' . FindTradeTrackers($url) . '&m=12&a=315369&u=' . $uri_encode;
		}
		// elseif (in_array($Site, $a1)) {
		// 	return 'http://www.a1travel.com/chadwell/?tt=8953_12_282840_chex&r='. $encode;
		// }elseif (in_array($Site, $Al)) {
		// 	return 'http://www.aluminiumwarehouse.co.uk/tin/?tt=9296_12_282840_chex&r='. $encode;
		// }elseif (in_array($Site, $Arena)) {
		// 	return 'http://www.arenascollection.com/design/?tt=1673_12_282840_chex&r='. $encode;
		// }elseif (in_array($Site, $BangGoods)) {
		// 	return 'http://www.banggood.com/bang/?tt=16943_12_282840_chex&r='. $encode;
		// }elseif (in_array($Site, $Basic)) {
		// 	return 'http://www.basic-travel.com/travel/?tt=2200_12_282840_chex&r='. $encode;
		// }elseif (in_array($Site, $BirdFOOT)) {
		// 	return 'http://www.birdfood.co.uk/tt/?tt=6544_12_282840_chex&r='. $encode;
		// }elseif (in_array($Site, $biv)) {
		// 	return 'http://www.bivolino.com/custom/index.aspx?tt=12298_12_282840_chex&r='. $encode;
		// }elseif (in_array($Site, $Blind)) {
		// 	return 'http://www.blindsdirectonline.co.uk/blinds/?tt=24293_12_282840_chex&r='. $encode;
		// }elseif (in_array($Site, $Buy)) {
		// 	return 'http://www.buyincoins.com/shopping/?tt=25773_12_282840_chex&r='. $encode;
		// }elseif (in_array($Site, $Camping)) {
		// 	return 'http://www.campingselection.com/uk/Partners/TradeTracker/?tt=8294_12_282840_chex&r='. $encode;
		// }elseif (in_array($Site, $ClickBaid)) {
		// 	return 'https://click.linksynergy.com/deeplink?id=XK9XruzkyUo&u1=chex&mid=35490&murl='. $encode;
		// }elseif (in_array($Site, $Colway)) {
		// 	return 'https://colwayinternational.online/beauty/?tt=26078_12_282840_chex&r='. $encode;
		// }elseif (in_array($Site, $A4)) {
		// 	return 'https://www.a4labels.com/labels/?tt=25370_12_282840_chex&r='. $encode;
		// }elseif (in_array($Site, $CT)) {
		// 	return 'https://www.chicretreats.com/hotels/?tt=25704_12_282840_chex&r='. $encode;
		// }
		elseif(in_array($Site, $bol)) {
			return 'https://partner.bol.com/click/click?p=2&t=url&s=51851&f=TXL&url=' . $encode;
		}elseif(isset($Coolblue[$Site])) {
			return 'https://prf.hn/click/camref:' . FindCoolblue($url) . '/destination:' . $encode;
		}elseif(in_array($Site, $DX)) {
			return $url . '?TC=USD&&Utm_rid=78139600&Utm_source=affiliate';
		}elseif (isset($FindDaisy[$Site])) {
			return 'https://' . FindDaisySi($url)[0] . '/c/?si=' . FindDaisySi($url)[1] . '&li=' . FindDaisySi($url)[2] . '&wi=303581&ws=&dl=' . $uri_encode;
		}elseif(in_array($Site, $ebay)){
			return ' http://rover.ebay.com/rover/1/' . $Als . '/1?ff3=4&pub=5575349754&toolid=11800&campid=5338219191&customid=chex&mpre=' . $encode;
		}elseif(isset($TradeTrackersThingsElse[$Site])){
			return $url . FindTradeTracker($url)[0] . '/?tt=' . FindTradeTracker($url)[1] . '_0_315369_';
		}elseif (in_array($Site, $YieldKit)) {
			return 'http://r.srvtrck.com/v1/redirect?url=' . $encode . '&api_key=6192753faa5975d8d9450690274e77dd&site_id=249c53bccf944c4c8f010cf6c914f30c&type=url&source=https%3A%2F%2Fco2ok.ninja';
		}
		// else {
		// 	return 'errorPage.php';
		// }
	}
	function SubDomein($url){
		$strip_url = $url;
		$redir_url = readArraySite($url, $strip_url);
		if ($redir_url == true) {
			return $redir_url;
		}else{
			return readArraySite($url, FindSiteName($url));
		}
	}
?>
