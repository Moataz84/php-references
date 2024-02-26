<?php 
  include '../inc/middleware.php';
  include '../inc/database.php';

  $handler = function() {
    $data = json_decode(file_get_contents('php://input'), true);
    $id = Null;
    $name = $data['name'];
    $email = $data['email'];
    $comment = $data['message'];
    $posted = date('Y-m-d');

    $stmt = $GLOBALS['connection'] -> prepare("INSERT INTO comments(id, name, email, comment, posted) VALUES (?, ?, ?, ?, ?)");
    $stmt -> bind_param("issss", $id, $name, $email, $comment, $posted);
    $stmt -> execute();
  };

  checkOrigin($handler);
?>