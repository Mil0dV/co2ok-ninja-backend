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
				$Land_code['at'];
				return $Land_code['at'];
				break;
			case '.com.au':
				$Land_code['com.au'];
				return $Land_code['com.au'];
				break;
			case '.be':
				$Land_code['be'];
				return $Land_code['be'];
				break;
			case '.ca':
				$Land_code['ca'];
				return $Land_code['ca'];
				break;
			case '.ch':
				$Land_code['ch'];
				return $Land_code['ch'];
				break;
			case '.de':
				$Land_code['de'];
				return $Land_code['de'];
				break;
			case '.es':
				$Land_code['es'];
				return $Land_code['es'];
				break;
			case '.fr':
				$Land_code['fr'];
				return $Land_code['fr'];
				break;
			case '.ie':
				$Land_code['ie'];
				return $Land_code['ie'];
				break;
			case '.it':
				$Land_code['it'];
				return $Land_code['it'];
				break;
			case '.nl':
				$Land_code['nl'];
				return $Land_code['nl'];
				break;
			case '.co.uk':
				$Land_code['co.uk'];
				return $Land_code['co.uk'];
				break;
			case '.com':
				$Land_code['com'];
				return $Land_code['com'];
				break;
		}
	}

	function FindSiteName($url){
		preg_match('|www.\K[^.]*|', $url, $match);
		return $match[0];
	}

	function readArraySite($url){
		$encode = urlencode($url);

		$Als = readarray($url);

		$Site = FindSiteName($url);

		$awin = array("jaarbeurs", "gearbest");
		$anrdoezrs = array("101shavers");
		$tcfjump = array("0cm");
		$booking = array("booking");
		$bol = array("bol");
		$Cool = array("coolblue");
		$DX = array("dx");

		if (in_array($Site, $awin)) {
			header('Location: http://www.awin1.com/cread.php?awinmid=8315&awinaffid=283879&clickref=chex&p=' . $encode);
		} elseif (in_array($Site, $anrdoezrs)) {
			header('Location: http://www.anrdoezrs.net/links/8106588/type/dlg/sid/chex/' . $encode);
		} elseif (in_array($Site, $tcfjump)) {
			header('Location:https://t.cfjump.com/50770/t/48059?Url='. $encode . '&UniqueId=chex');
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
			header('Location:https://partner.bol.com/click/click?p=2&t=url&s=51851&f=TXL&url=' . $encode);
		}elseif(in_array($Site, $DX)) {
			header('Location:' . $url . '?TC=USD&&Utm_rid=78139600&Utm_source=affiliate');
		} else{
			header('Location: http://rover.ebay.com/rover/1/' . $Als . '/1?ff3=4&pub=5575349754&toolid=11800&campid=5338219191&customid=chex&mpre=' . $encode);
		}
	}
?>