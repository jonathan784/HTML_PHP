
<html>
<head>
<title>associative arrays</title>
</head>
<body>
<?php

$things = array("HeadPhones"=>"airpods", "smartwatch"=>"Apple", "Fridge"=>"LG","show" =>"simpsons","sweater"=>"Gap","TV"=>"SONY","food"=>"fish");

echo "Before sort"."\n";
foreach($things as $x => $x_value)
{
echo "Key=" . $x . ", Value=" . $x_value;
echo "\n";
}

echo"\n";
ksort($things);
echo "After sort by key"."\n";
echo"\n";
foreach($things as $x => $x_value)
{
echo "Key=" . $x . ", Value=" . $x_value;
echo "\n";
}
?>
?>
</body>
</html>