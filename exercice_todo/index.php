<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">

    <!-- Liens vers le CSS et fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    <title>PHP1.2 - Ma ToDo List</title>
  </head>
  <body>
    <h1>ToDo List</h1>
    <div class="container">
      <!-- SECTION : affichage de la ToDoList  (quelques éléments d'exemple pour le fun) -->
      <section class="section-ToDoList">
        
        <form class="form-ToDoList" action="delete.php" method="post">
          <button type="submit">Supprimer</button>
        </form>
      </section>

      
      <section class="section-addTask">
        <hr>
        <h2>Nouvelle Tache</h2>
        
        <form class="form-addTask" action="add.php" method="post">
          
          <p>
            <label for="title" class="addTask-legend">Titre</label>
            <input type="text" name="title" id="title" placeholder="Titre...">
          </p>

          <p>
            <label for="description" class="addTask-legend">Description</label>
            <textarea name="description" id="description" placeholder="Description..."></textarea>
          </p>
          
          <p class="addTask-legend">
            <label for="day">Date d'échéance</label>
          </p>
          <p class="addTast-legend-radio">            
           </select>
          </p>
          <!-- Priorité -->
          <p>
            <p class="addTask-legend">Priorité</p>
            <p class="addTast-legend-radio">
              <input type="radio" id="priority-low" name="priority" value="priority-low">
              <label for="priority-low">Basse</label>
              <input type="radio" id="priority-normal" name="priority" value="priority-normal" checked>
              <label for="priority-normal">Normale</label>
              <input type="radio" id="priority-high" name="priority" value="priority-high">
              <label for="priority-high">Haute</label>
            </p>
          </p>
          <button type="submit">Ajouter</button>

        </form>
      </section>
    </div>

  </body>
</html>