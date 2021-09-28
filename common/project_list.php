<!DOCTYPE html>

<?php include $_SERVER['DOCUMENT_ROOT'].'/common/connect_db.php';
$projects = fetch($conn, "SELECT * FROM `Projects` ORDER BY id DESC");
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/project_list.css">
    <title></title>
  </head>
  <body>
    <div class="wrapper">

    <?php include $_SERVER['DOCUMENT_ROOT']."/common/header.html"; ?>
    <h1>Projects</h1>
    <?php
      while($project = $projects->fetch_assoc()) {
         include $_SERVER['DOCUMENT_ROOT'].'/common/project_preview.php';
      }
    ?>

  </div>
  </body>
</html>
