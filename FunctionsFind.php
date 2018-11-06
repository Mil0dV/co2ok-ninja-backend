<?php

	function FindAwinMid($url){
		$FAM = FindURLplusTLD($url);

		global $AwinMid;
		return $AwinMid[$FAM];
	}

	function FindDaisySi($url){
		$FS = FindURLplusTLD($url);

		global $FindDaisy;
		return $FindDaisy[$FS];
	}

	function FindTradeTracker($url){
		$TradeTrack = FindURLplusTLD($url);

		global $TradeTrackersThingsElse;
		return $TradeTrackersThingsElse[$TradeTrack];
	}

	function FindTradeTrackers($url){
		$TradeTracks = FindURLplusTLD($url);

		global $TradeTracker;
		return $TradeTracker[$TradeTracks];
	}

?>