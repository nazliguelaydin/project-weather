<?php

require 'vendor/autoload.php';

use Hannalackner\Weather\Day;
use Hannalackner\Weather\History;

$history = new History();
$history->addDay(new Day("2024-05-04", "sonnig"));
$history->addDay(new Day("2024-05-05", "windig"));
$history->addDay(new Day("2024-05-06", "regnerisch"));


//$history->addDay(new Day($_GET['date'], $_GET['weather']));

//?date=2024-05-04;
$date = $_GET['date']; //mit Benutzereingabe sonst die obere Zeile
$weather = $history->getWeatherDate($date);
echo "Das Wetter am $date war $weather";

?>s