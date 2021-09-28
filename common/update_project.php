<?php
include $_SERVER['DOCUMENT_ROOT'].'/common/connect_db.php';


$sql = "UPDATE `Projects` SET `title` = ? WHERE `Projects`.`id` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $_POST['title'],$_POST['id']);
$stmt->execute();

 ?>
