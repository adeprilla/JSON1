<?php
	$json_string1 = file_get_contents("http://api.wunderground.com/api/ee25287f3d5c72db/forecast/q/CA/semarang.json");
	$json_string2 = file_get_contents("http://api.wunderground.com/api/ee25287f3d5c72db/astronomy/q/Australia/sydney.json");
	$json_string3 = file_get_contents ("http://api.wunderground.com/api/ee25287f3d5c72db/planner_07010731/q/CA/islam.json");
	
	$parsed_json1 = json_decode ($json_string1);
	$parsed_json2 = json_decode ($json_string2);
	$parsed_json3 = json_decode ($json_string3);
	
	$a = $parsed_json1->{"response"}->results[0]->{"country_name"};
	$b = $parsed_json1->{"response"}->results[0]->{"name"};
	$c = $parsed_json1->{"response"}->results[0]->{"state"};
	
	$d = $parsed_json2->{"moon_phase"}->{"current_time"}->{"hour"};
	$e = $parsed_json2->{"moon_phase"}->{"moonrise"}->{"minute"};
	$f = $parsed_json2->{"moon_phase"}->{"hemisphere"};
	
	$g = $parsed_json3->{"response"}->results[0]->{"name"};
	$h = $parsed_json3->{"response"}->results[0]->{"state"};
	$i = $parsed_json3->{"response"}->results[0]->{"country_name"};
	
	echo "1. Nama Saya                 : Ade Prilla Sari";
	echo "<br>";
	echo "2. Negara Saya               : ${a}\n";
    echo "<br>";
	echo "3. Kota Saya di       		: ${b}\n";
	echo "<br>";
	echo "4. Idola Saya(Justin Bieber) : ${c}\n";
	echo "<br>";	
	echo "5. Saya Anak Nomer           : ${d}\n";
    echo "<br>";	
	echo "6. Suhu di indonesia         : ${e}<sup>0</sup>C\n";
	echo "<br>";
	echo "7. Arah Rumah Saya           : ${f}\n";
	echo "<br>";
	echo "8. Agama Saya                : ${g}\n";
	echo "<br>";
	echo "9. Umur Saya                 : ${h}\n";
	echo "<br>";
	echo "10.Saya Ingin Pergi Ke       : ${i}\n";
?>