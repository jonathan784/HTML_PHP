
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Final Results</title>
</head>
<body>
<?php
$number= $_POST['number'];
$form_result= $_POST['form'];

if (isset($form_result)){
if (is_numeric($number)) {
echo 'The number you entered is ' . $number. '. This is a valid number.';
}
else {
echo 'Error: You did not enter numbers only. Please enter only numbers.';
}


if (is_numeric($number)) {
if($number>=10){
echo ''.$number.'is grater or equal than 10.';
}
else if ($number<10){
echo ''.$number.'less Than 10';
}
}
}
