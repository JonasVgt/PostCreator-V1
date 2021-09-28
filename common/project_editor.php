<!DOCTYPE html>

<?php include $_SERVER['DOCUMENT_ROOT'].'/common/connect_db.php';
$project_id = $_GET['id'];
$project = fetch($conn, "SELECT * FROM `Projects` WHERE id = ".$project_id)->fetch_assoc();
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/project_editor.css">
    <title><?= $project["title"] ?></title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="wrapper">

    <?php include $_SERVER['DOCUMENT_ROOT']."/common/header.html"; ?>
    <h1><?= $project["id"] ?> <input type='text' id='project_title' name='title' value='<?= $project["title"]?>'></h1>


    <?php
      $posts = fetch($conn, "SELECT * FROM `Blogs` WHERE project_id = ".$project_id);
      while($post = $posts->fetch_assoc()) {
         include $_SERVER['DOCUMENT_ROOT'].'/common/post_preview_project.php';
      }
    ?>

    <p id="feedback"></p>

    <script type="text/javascript">
      var projectId = <?=$project_id?>;

      $('#project_title').change(function(){
        var newTitle = $(this).val();
        $.post( "/common/update_project.php", { id: projectId, title: newTitle},function(data, status){
            $("#feedback").html(status+"  "+data);
          });
      });

    </script>

    </div>
  </body>
</html>
