<?php
	$city=$_GET['city'];
	str_replace(' ', '', $city);
	$contents= file_get_contents('http://es.weather-forecast.com/locations/'.$city.'/forecasts/latest');

	preg_match('/3 Días:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)<\/s/', $contents,$matches);
	// $matches=utf8_decode($matches[0]);
	print_r($matches[1]);
 ?>