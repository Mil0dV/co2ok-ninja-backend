<?php

error_reporting(false);

/*Stap 1 url met GET in een var zetten.*/
	$url = $_GET['url'];

/*Stap 2 met get de ?www.ebay.nl naar .nl gaan werken*/
	function FindTLD($url){

		preg_match('|ebay\K[^/]*|', $url, $match);
		return $match[0];
	}
/*Stap 3 de .nl moet in de if om gecheck geworden*/
	function readArray($url){

		$tld = FindTLD($url);

		$Land_code = array("at" => "5221-53469-19255-0" , "com.au" => "705-53470-19255-0", "be" => "1553-53471-19255-0", "ca" => "706-53473-19255-0", "ch" => "5222-53480-19255-0", "de" => "707-53477-19255-0", "es" => "1185-53479-19255-0", "fr" => "709-53476-19255-0", "ie" => "5282-53468-19255-0", "it" => "724-53478-19255-0","ss" => "420-02001-09020-0", "nl" => "1346-53482-19255-0", "co.uk" => "710-53481-19255-0", "com" => "711-53200-19255-0", );

		if(in_array($tld, $Land_code))
		{

       return $tld;

		}

		/*switch ($tld) {
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
		}*/
	}

	function FindSiteName($url){
		preg_match('|www.\K[^.]*|', $url, $match);
		return $match[0];
	}

	function readArraySite(){

		$Site = FindSiteName($url);

		$readSite = array("jaarbeurs.nl" => "jaarbeurs.nl", "gearbest.com" => "gearbest.com");

		switch ($Site) {
			case 'jaarbeurs.nl':
				$readSite['jaarbeurs.nl'];
				return $readSite['jaarbeurs.nl'];
				break;
			case 'gearbest.com':
				$readSite['gearbest.com'];
				return $readSite['gearbest.com'];
				break;


		}
	}

/*Stap 4 urlencode de website waar je bij de website www.ebay.nl(bijvoorbeeld) naar https%3A%2F%2Fwww.ebay.nl%2F gaan*/
	$encode = urlencode($url);

/*Stap 5 maak vars die in de rover link gaan*/
	$Als = readarray($url);
	$test = FindSiteName($url);

	if ($test == 'ebay') {
		header('Location: http://rover.ebay.com/rover/1/' . $Als . '/1?ff3=4&pub=5575349754&toolid=10001&campid=5338219191&customid=chex&mpre=' . $encode);
	} else{
		header('Location: http://www.awin1.com/cread.php?awinmid=8315&awinaffid=283879&clickref=chex&p=' . $encode);
	}

?>
