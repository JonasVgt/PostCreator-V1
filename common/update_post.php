<?php
include $_SERVER['DOCUMENT_ROOT'].'/common/connect_db.php';


$sql = "UPDATE `Blogs` SET `".$_POST['type']."` = ? WHERE `Blogs`.`id` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss",$_POST['value'],$_POST['id']);
$stmt->execute();

 ?>
