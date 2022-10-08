<?php
$months = [
  "Janvier",
  "Février",
  "Mars",
  "Avril",
  "Mai",
  "Juin",
  "Juillet",
  "Aout",
  "Septembre",
  "Octobre",
  "Novembre",
  "Décembre"
];

$currentYear = date('Y');

$today = date_create();

$file = fopen('tasks.csv', 'a+');

$tasks= [];

while ($taskData = fgetcsv($file)) {
  
  array_push($tasks, $taskData);
}

fclose($file);



include("index.php");

?>
