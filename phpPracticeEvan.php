<?php
$date = date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300", "2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br>";

$date2 = str_replace('-','/',$date);
print_r($date2);
echo "<br>";

if (strcmp($date, $tar) > 0){
	echo 'the future';
}	elseif (strcmp($date, $tar) < 0){
	echo 'the past';
}	elseif (strcmp($date, $tar) == 0){
	echo 'Oops';
}
echo "<br>";

echo strpos($date, "/")."<br>";
echo strlen($date)."<br>";
echo ord($date)."<br>";
echo substr($date, -2)."<br>";

$array = explode("/", $date2);
print_r($array)."<br>";

foreach($year as $x => $x_value){
	$isLeapYear = (bool) date('L', strtotime("$year-01-01"));
	printf(
		'%d %s a leap year%s : True',
		$year,
		$isLeapYear ? 'is True' : 'is not : False',
		PHP_EOL
	);
}
?>