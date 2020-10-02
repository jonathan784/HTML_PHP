<html>

<head>

<title>PHP code to illustrate indexed array illustration</title>

</head>

<body>

<?php

$moviesArray = array(“Sherlock”, “Jumanji”, “Hulk”,”IronMan”,”Up”,”Nemo”,”ToyStory”);

echo "\n";

echo "I like these movies :".$moviesArray[1]. “, ” . $moviesArray[2]. “, ”. $moviesArray[3]. “, ”;

echo "\n";



echo "Printing all arrays using foreach loop"."\n";

echo "\n";

echo "Movies:"."\n";

foreach($moviesArray as $key => $element)

{

echo $element . "\n";

}

echo "\n";



?>

</body>

</html>



