<?php
  error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>loopback.php - Larissa Hahn</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    // Get Method:
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if ($_SERVER["QUERY_STRING"] == NULL) { // No parameters
          $json_arr = ["Type" => $_SERVER['REQUEST_METHOD'], "parameters" => NULL];
          echo json_encode($json_arr); //Format data as JSON, print
        }
        else { // Parameters exist
          $json_arr = ["Type" => $_SERVER['REQUEST_METHOD'], "parameters" => $_GET];
          echo json_encode($json_arr); //Format get data as JSON, print
        }
      }
    // Post Method:
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_SERVER["QUERY_STRING"] == NULL) { // No parameters
          $json_arr = ["Type" => $_SERVER['REQUEST_METHOD'], "parameters" => NULL];
          echo json_encode($json_arr); //Format data as JSON, print
        }
        else { // Parameters exist
          $json_arr = ["Type" => $_SERVER['REQUEST_METHOD'], "parameters" => $_POST];
          echo json_encode($json_arr); //Format post data as JSON, print
        }
      }
    ?>
</body>
</html>
