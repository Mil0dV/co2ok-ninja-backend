<?php

	include 'Functions.php';

	$Files = file_get_contents('./partners');

	$FileGet = file('./partners');

	$Qoute = str_replace('"', "", $Files);
	$Rechts = str_replace("[", "", $Qoute);

	foreach ($FileGet as $key) {
		// $key = trim($Files, '[]');
		
		$key = str_replace("]", "", $Rechts);
		$exploded = explode(",", $key);
	}

	$FuckingHell = str_replace(" ", "", $exploded);

	$Lower = array_map('strtolower', $FuckingHell);

	sort($Lower);

	$nummers = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
	$nummer = array();
	$a = array();
	$b = array();
	$c = array();
	$d = array();
	$e = array();
	$f = array();
	$g = array();
	$h = array();
	$i = array();
	$j = array();
	$k = array();
	$l = array();
	$m = array();
	$n = array();
	$o = array();
	$p = array();
	$q = array();
	$r = array();
	$s = array();
	$t = array();
	$u = array();
	$v = array();
	$w = array();
	$x = array();
	$y = array();
	$z = array();

	foreach ($Lower as $key => $val) {
		$split = substr($val, 0);
		if (in_array($split[0], $nummers)) {
			array_push($nummer, $val);
		} elseif ($split[0] == "a") {
			array_push($a, $val);
		}elseif ($split[0] == "b") {
			array_push($b, $val);
		}elseif ($split[0] == "c") {
			array_push($c, $val);
		}elseif ($split[0] == "d") {
			array_push($d, $val);
		}elseif ($split[0] == "e") {
			array_push($e, $val);
		}elseif ($split[0] == "f") {
			array_push($f, $val);
		}elseif ($split[0] == "g") {
			array_push($g, $val);
		}elseif ($split[0] == "h") {
			array_push($h, $val);
		}elseif ($split[0] == "i") {
			array_push($i, $val);
		}elseif ($split[0] == "j") {
			array_push($j, $val);
		}elseif ($split[0] == "k") {
			array_push($k, $val);
		}elseif ($split[0] == "l") {
			array_push($l, $val);
		}elseif ($split[0] == "m") {
			array_push($m, $val);
		}elseif ($split[0] == "n") {
			array_push($n, $val);
		}elseif ($split[0] == "o") {
			array_push($o, $val);
		}elseif ($split[0] == "p") {
			array_push($p, $val);
		}elseif ($split[0] == "q") {
			array_push($q, $val);
		}elseif ($split[0] == "r") {
			array_push($r, $val);
		}elseif ($split[0] == "s") {
			array_push($s, $val);
		}elseif ($split[0] == "t") {
			array_push($t, $val);
		}elseif ($split[0] == "u") {
			array_push($u, $val);
		}elseif ($split[0] == "v") {
			array_push($v, $val);
		}elseif ($split[0] == "w") {
			array_push($w, $val);
		}elseif ($split[0] == "x") {
			array_push($x, $val);
		}elseif ($split[0] == "y") {
			array_push($y, $val);
		}elseif ($split[0] == "z") {
			array_push($z, $val);
		}
	}
	$topSide = "<h1 class=''>#</h1> <ul>";
	echo htmlspecialchars($topSide) . "<br>";
	foreach ($nummer as $key => $val) {
			$topSide = "<h1 class=''>A</h1> <ul>";
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
	$topSideA = "</ul><h1 class=''>A</h1> <ul>";
	echo htmlspecialchars($topSideA) . "<br>";
	foreach ($a as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}

	$topSideb = "</ul><h1 class=''>B</h1> <ul>";
	echo htmlspecialchars($topSideb) . "<br>";
	foreach ($b as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSidec = "</ul><h1 class=''>C</h1> <ul>";
	echo htmlspecialchars($topSidec) . "<br>";
	foreach ($c as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSided = "</ul><h1 class=''>D</h1> <ul>";
	echo htmlspecialchars($topSided) . "<br>";
	foreach ($d as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSidee = "</ul><h1 class=''>E</h1> <ul>";
	echo htmlspecialchars($topSidee) . "<br>";
	foreach ($e as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSidef = "</ul><h1 class=''>F</h1> <ul>";
	echo htmlspecialchars($topSidef) . "<br>";
	foreach ($f as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSideg = "</ul><h1 class=''>G</h1> <ul>";
	echo htmlspecialchars($topSideg) . "<br>";
	foreach ($g as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSideh = "</ul><h1 class=''>H</h1> <ul>";
	echo htmlspecialchars($topSideh) . "<br>";
	foreach ($h as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSidei = "</ul><h1 class=''>I</h1> <ul>";
	echo htmlspecialchars($topSidei) . "<br>";
	foreach ($i as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSidej = "</ul><h1 class=''>J</h1> <ul>";
	echo htmlspecialchars($topSidej) . "<br>";
	foreach ($j as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSidek = "</ul><h1 class=''>K</h1> <ul>";
	echo htmlspecialchars($topSidek) . "<br>";
	foreach ($k as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSidel = "</ul><h1 class=''>L</h1> <ul>";
	echo htmlspecialchars($topSidel) . "<br>";
	foreach ($l as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSidem = "</ul><h1 class=''>M</h1> <ul>";
	echo htmlspecialchars($topSidem) . "<br>";
	foreach ($m as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSiden = "</ul><h1 class=''>N</h1> <ul>";
	echo htmlspecialchars($topSiden) . "<br>";
	foreach ($n as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSideo = "</ul><h1 class=''>O</h1> <ul>";
	echo htmlspecialchars($topSideo) . "<br>";
	foreach ($o as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSidep = "</ul><h1 class=''>P</h1> <ul>";
	echo htmlspecialchars($topSidep) . "<br>";
	foreach ($p as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSideq = "</ul><h1 class=''>Q</h1> <ul>";
	echo htmlspecialchars($topSideq) . "<br>";
	foreach ($q as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSider = "</ul><h1 class=''>R</h1> <ul>";
	echo htmlspecialchars($topSider) . "<br>";
	foreach ($r as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSides = "</ul><h1 class=''>S</h1> <ul>";
	echo htmlspecialchars($topSides) . "<br>";
	foreach ($s as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSidet = "</ul><h1 class=''>T</h1> <ul>";
	echo htmlspecialchars($topSidet) . "<br>";
	foreach ($t as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSideu = "</ul><h1 class=''>U</h1> <ul>";
	echo htmlspecialchars($topSideu) . "<br>";
	foreach ($u as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSidev = "</ul><h1 class=''>V</h1> <ul>";
	echo htmlspecialchars($topSidev) . "<br>";
	foreach ($v as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSidew = "</ul><h1 class=''>W</h1> <ul>";
	echo htmlspecialchars($topSidew) . "<br>";
	foreach ($w as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSidex = "</ul><h1 class=''>X</h1> <ul>";
	echo htmlspecialchars($topSidex) . "<br>";
	foreach ($x as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSidey = "</ul><h1 class=''>Y</h1> <ul>";
	echo htmlspecialchars($topSidey) . "<br>";
	foreach ($y as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$topSidez = "</ul><h1 class=''>Z</h1> <ul>";
	echo htmlspecialchars($topSidez) . "<br>";
	foreach ($z as $key => $val) {
			$http = "http://" . $val . "/";
			readArraySite($http);
			$echos = '<li><a href="' . readArraySite($http) . '">' . $val . '</a></li>';
			echo htmlspecialchars($echos) . '<br>';
		}
		$bot = "</ul>";
		echo htmlspecialchars($bot);
?>