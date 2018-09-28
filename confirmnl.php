<!DOCTYPE html>
<?php
		error_reporting(false);
		$url = $_GET['url'];

	function FindTLD($url){
		preg_match('|ebay\K[^/]*|', $url, $match);
		return $match[0];
	}

	function readarray($url){
		$tld = FindTLD($url);
		$dotLang = array("at" => ".at", "com.au" => ".com.au", "be" => ".be", "ca" => ".ca", "ch" => ".ch", "de" => ".de", "es" => ".es", "fr" => ".fr", "ie" => ".ie", "it" => ".it", "nl" => ".nl", "co.uk" => ".co.uk", "com" => ".com");
		switch ($tld) {
			case '.at':
				$dotLang['at'];
				return $dotLang['at'];
				break;
			case '.com.au':
				$dotLang['com.au'];
				return $dotLang['com.au'];
				break;
			case '.be':
				$dotLang['be'];
				return $dotLang['be'];
				break;
			case '.ca':
				$dotLang['ca'];
				return $dotLang['ca'];
				break;
			case '.ch':
				$dotLang['ch'];
				return $dotLang['ch'];
				break;
			case '.de':
				$dotLang['de'];
				return $dotLang['de'];
				break;
			case '.es':
				$dotLang['es'];
				return $dotLang['es'];
				break;
			case '.fr':
				$dotLang['fr'];
				return $dotLang['fr'];
				break;
			case '.ie':
				$dotLang['ie'];
				return $dotLang['ie'];
				break;
			case '.it':
				$dotLang['it'];
				return $dotLang['it'];
				break;
			case '.nl':
				$dotLang['nl'];
				return $dotLang['nl'];
				break;
			case '.co.uk':
				$dotLang['co.uk'];
				return $dotLang['co.uk'];
				break;
			case '.com':
				$dotLang['com'];
				return $dotLang['com'];
				break;
		}
	}

	$lang = readarray($url);
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="confirmm.css">
</head>	
<body>

	<div id="container">
	<img src="banner3.1_co2ok_def8.mobiel.svg">
	<h2 id="title">Begin met het inzamelen van geld voor klimaatneutraal winkelen</h2>
	<p id="text">Je gaat zo naar: <?php echo $url;?>. Dat betekent als je op de groene knop drukt en iets koopt - co2ok.eco krijg dan een klein beetje van het bedrag binnen wat je hebt uit gegeven (de prijs blijft het zelfde voor je), en dat geld doneren wij dan aan een van onze goede doelen gaat die wij ondersteunen.
	</p>
	<p>
		<?php
			echo "<a href='redirect.php?url=" . urlencode($_GET['url']) . "' class='btn btn-success md' style='padding: 20px; witdh: 1%;'>I understand and happy to help. Take me back to ebay";
			echo $lang . "!</a>";
		?>
	</p>
	<p>
		<?php
			echo "<a href='" . $_GET['url'] . "' class='btn btn-light md1' style='padding: 20px; witdh: 1%;'>Go back to ebay";
			echo $lang . "</a>";
		?>
	</p>
	<p id="link">
		Wil je meer leren over het klimaat klik dan <a href="http://www.co2ok.eco/">hier</a>
	</p>
	</div>
</body>
</html>