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
	<h2 id="title">Start raising money for climate neutral shopping</h2>
	<p id="text">You are about to go to: <?php echo $url;?>. It means that if you go there by clicking the green button below and buy something - co2ok.eco will receive a small portion of what you've spent (the price stays the same for you), which we will donate to one of the charities we support</p>
	<p>
		<?php
			echo "<a href='redirect.php?url=" . urlencode($_GET['url']) . "' class='btn btn-success md' style='padding: 20px; witdh: 1%;'>I understand and happy to help. Take me back to ebay";
			echo $lang . "!</a>";
		?>
	</p>
	<p>
		<?php
			echo "<a href='" . $_GET['url'] . "' class='btn btn-light md1' style='padding: 20px; witdh: 1%;'>Ga terug zonder partner code</a>";
		?>
	</p>
	<p id="link">
		Wil je meer weten kom dan <a href="http://www.co2ok.eco/">hier</a>
	</p>
	</div>
</body>
</html>