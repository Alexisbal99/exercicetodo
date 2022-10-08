<?php
if (!empty($_POST["title"])) {
  $title = $_POST["title"];

  $description = $_POST["description"];

  if ($description === '') {
    $description = "Pas de description";
  }
  
  $date = $_POST["year"] . '-' . $_POST["month"] . '-' . $_POST["day"];
  $priority = $_POST["priority"];
  
  $taskData = [$title, $description, $date, $priority];

  $file = fopen("tasks.csv", "a");

  fputcsv($file, $taskData);

  fclose($file);
}
header('Location: index.php');
exit();

?>
