<?php 
  function checkOrigin($handler) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER["HTTP_SEC_FETCH_SITE"] === "same-origin") $handler();
    else echo 'forbidden';
  }
?>