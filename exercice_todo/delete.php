<?php
if (array_key_exists('tasks', $_POST)) {
  $indexesOfTasksToDelete = $_POST["tasks"];  

  $file = fopen('tasks.csv', 'a+');

  $tasks= [];
  while ($taskData = fgetcsv($file)) {
    array_push($tasks, $taskData);
  }
  fclose($file);
  
  for ($i=0; $i < count($indexesOfTasksToDelete); $i++) {
    array_splice($tasks, ($indexesOfTasksToDelete[$i]-$i), 1);
    
  }

  
  $file = fopen("tasks.csv", "w");
  foreach ($tasks as $task) {
    fputcsv($file, $task);
  }
  fclose($file);
}

header('Location: index.php');
exit();

?>
