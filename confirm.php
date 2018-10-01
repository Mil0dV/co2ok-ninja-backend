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
	if(!empty($url))
	{

		if(in_array($tld, $dotLang))
		{

			return $tld;

		}else{

			echo 'bestaat niet';

		}

	}else{

		echo 'empty url';

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
	<p id="text">You are about to go to: <?php echo $url;?>. It means that if you go there by clicking the green button below and buy something - co2ok.eco will receive a small portion of what you've spent (the price stays the same for you), which we will donate to one of the organizations we support</p>
	<p>
		<?php
			echo "<a href='redirect.php?url=" . $_GET['url'] . "' class='btn btn-success md' style='padding: 20px; witdh: 1%;'>I understand and happy to help. Take me back to ebay";
			echo $lang . "!</a>";
		?>
	</p>
	<p>
		<?php
			echo "<a href='" . $_GET['url'] . "' class='btn btn-light md1' style='padding: 20px; witdh: 1%;'>I don't want to use co2ok</a>";
		?>
	</p>
	<p id="link">
		Do you want to know more about the climate <a href="http://www.co2ok.eco/">click here</a>
	</p>
	</div>
</body>
</html>