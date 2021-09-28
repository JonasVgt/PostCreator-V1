<?php include $_SERVER['DOCUMENT_ROOT'].'/common/connect_db.php';
$post_id = $_GET['id'];
$post = fetch($conn, "SELECT * FROM `Blogs` WHERE id = ".$post_id)->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/post_editor.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Post Editor</title>
  </head>
  <body>
    <div class="wrapper">
      <?php include $_SERVER['DOCUMENT_ROOT']."/common/header.html"; ?>
      <h1><input id="post_title" autocomplete="off" type="text" name="title" value="<?=$post["title"]?>"></h1>

      <h3><label for="date">Date:</label>
      <input id="post_date" autocomplete="off" type="date" name="date" value="<?=$post["date"]?>"></h3>

      <h3><label for="project">Project ID:</label>
      <input id="post_project_id" autocomplete="off" type="text" name="project" value="<?=$post["project_id"]?>"></h3>

      <textarea id="post_text" autocomplete="off" class="text_input" type="text" name="text" rows="40" ><?=$post["text"]?></textarea>

      <p id="feedback">--</p>
    </div>


    <script type="text/javascript">
      var postId = <?=$post_id?>;

      $('#post_title').change(function(){
        var newValue = $(this).val();
        $.post( "/common/update_post.php", { id: postId, type: "title", value: newValue},function(data, status){
            $("#feedback").html(status+"  "+data);
          });
      });

      $('#post_date').change(function(){
        var newValue = $(this).val();
        $.post( "/common/update_post.php", { id: postId, type: "date", value: newValue},function(data, status){
            $("#feedback").html(status+"  "+data);
          });
      });

      $('#post_project_id').change(function(){
        var newValue = $(this).val();
        $.post( "/common/update_post.php", { id: postId, type: "project_id", value: newValue},function(data, status){
            $("#feedback").html(status+"  "+data);
          });
      });

      $('#post_text').change(function(){
        var newValue = $(this).val();
        $.post( "/common/update_post.php", { id: postId, type: "text", value: newValue},function(data, status){
            $("#feedback").html(status+"  "+data);
          });
      });



    </script>


  </body>
</html>
