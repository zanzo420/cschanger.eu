<?php 
/*******************************
*	WeatherBot
*	Author Eros1337
*	Contact:
*	TeamSpeak: VixenClan.pl
*	Copyright Krzysztof Śpiewak
********************************/
$config = [
'TeamSpeak' => [
	'host' => 'localhost',			//Connection Adress
	'queryPort' => 10011,			//Query connect Port
	'queryLogin' => 'serveradmin',	//Query connect Login
	'queryPassword' => '',			//Query connect Password
	'connectPort' => 9987,			//Connect port
	'NameOfBot' => 'Pogodynka'		//Bot name
],
'content' => [
	'ApiKey' => '', //ApiKey from openweathermap.org Interval > 60 or Interval == 60
	'interval' => 60, //iterval
	'CountryCode' => 'PL', //Country Code

	'ChannelName' => [
		'enable' => true,
		'name' => '[city] - Pogoda',
	],

	'function' => [
		'Warszawa' => 2, //City => channelID (Bez polskich znaków)
		'Lublin' => 3,
	],

],

];
?>