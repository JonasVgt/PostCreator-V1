<!DOCTYPE html>

<?php include $_SERVER['DOCUMENT_ROOT'].'/common/connect_db.php';
$posts = fetch($conn, "SELECT * FROM `Blogs`");
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/post_list.css">
    <title></title>
  </head>
  <body>
    <div class="wrapper">

    <?php include $_SERVER['DOCUMENT_ROOT']."/common/header.html"; ?>
    <h1>Posts</h1>
    <?php
      while($post = $posts->fetch_assoc()) {
         include $_SERVER['DOCUMENT_ROOT'].'/common/post_preview.php';
      }
    ?>

    </div>
  </body>
</html>
