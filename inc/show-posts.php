<?php
  include 'database.php';

  /* Query Single row:
    $query = mysqli_query($connection, 'SELECT * FROM comments WHERE email="something"');
    print_r(mysqli_fetch_row($query));
  */
  $query = mysqli_query($connection, 'SELECT * FROM comments');
  $comments = array_reverse(mysqli_fetch_all($query, MYSQLI_ASSOC));

  if (count($comments) === 0) {
    echo '<p>No Posts have been made.</p>';
  } else {
    echo '<h3>Posts</h3>';
    foreach ($comments as $comment) {
      $name = $comment['name'];
      $posted = $comment['posted'];
      $message = $comment['comment'];
  
      if ($posted === date('Y-m-d')) {
        $date = 'Today';
      } else if (date('Y-m-d', strtotime('-1 days')) === $posted) {
        $date = 'Yesterday';
      } else {
        $date = 'on ' . date('F j, Y', strtotime($posted));
      }
  
      echo "<div class='post'>
        <p>$message</p>
        <p>By $name $date</p>
      </div>";
    }
  }
?>