<?php
	//Defining $lang
	
	$lang = array();
	
	//Determining the right language
	
	
	if(isSet($_GET['lang']))
	{
		$lang = $_GET['lang'];
		// register the session and set the cookie
		$_SESSION['lang'] = $lang;
		setcookie('lang', $lang, time() + (3600 * 24 * 30));
	}
	elseif(isSet($_SESSION['lang']))
	{
		$lang = $_SESSION['lang'];
	}
	elseif(isSet($_COOKIE['lang']))
	{
		$lang = $_COOKIE['lang'];
	}
	else
	{
		$lang = 'en';
	}
?>