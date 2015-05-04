<?php
  error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>multtable.php - Larissa Hahn</title>
    <link rel="stylesheet" href="style_mult.css">
  </head>
  <body>
    <?php
    //Soooooo many cases to check for missing parameters if using URL or form to access:
      if (isset($_GET['min-multiplicand']) && (empty($_GET['min-multiplicand']) || $_GET['min-multiplicand'] == null)) {
        echo "Missing parameter min-multiplicand.";
      }
      if (isset($_GET['max-multiplicand']) && (empty($_GET['max-multiplicand']) || $_GET['max-multiplicand'] == null)) {
        echo '<br>';
        echo "Missing parameter max-multiplicand.";
      }
      if (isset($_GET['min-multiplier']) && (empty($_GET['min-multiplier']) || $_GET['min-multiplier'] == null)) {
        echo '<br>';
        echo "Missing parameter min-multiplier.";
      }
      if (isset($_GET['max-multiplier']) && (empty($_GET['max-multiplier']) || $_GET['max-multiplier'] == null)) {
        echo '<br>';
        echo "Missing parameter max-multiplier.";
      }
      if (!isset($_GET['min-multiplicand'])) {
        echo '<br>';
        echo "Missing parameter min-multiplicand.";
      }
      if (!isset($_GET['max-multiplicand'])) {
        echo '<br>';
        echo "Missing parameter max-multiplicand.";
      }
      if (!isset($_GET['min-multiplier'])) {
        echo '<br>';
        echo "Missing parameter min-multiplier.";
      }
      if (!isset($_GET['max-multiplier'])) {
        echo '<br>';
        echo "Missing parameter max-multiplier.";
      }
      if (!isset($_GET['min-multiplicand'], $_GET['max-multiplicand'], $_GET['min-multiplier'], $_GET['max-multiplier'])) {
        echo '<br>';
      }
      else {
      //Convert parameters to numerical data
        $minMd = $_GET['min-multiplicand']*1;
        $minMp = $_GET['min-multiplier']*1;
        $maxMd = $_GET['max-multiplicand']*1;
        $maxMp = $_GET['max-multiplier']*1;

      //Integer checks
        if (is_int($minMd) && $minMd >= 0) {
          echo '<br>';
        }
        else {
          echo '<br>';
          echo "min-multiplicand must be an integer.";
        }
        if (is_int($maxMd) && $maxMd >= 0) {
          echo '<br>';
        }
        else {
          echo '<br>';
          echo "max-multiplicand must be an integer.";
        }
        if (is_int($minMp) && $minMp >= 0) {
          echo '<br>';
        }
        else {
          echo '<br>';
          echo "min-multiplier must be an integer.";
        }
        if (is_int($maxMp) && $maxMp >= 0) {
          echo '<br>';
        }
        else {
          echo '<br>';
          echo "max-multiplier must be an integer.";
        }
        if ($minMd > $maxMd) {
          echo "Minimum multiplicand is larger than maximum.";
        }
        if ($minMp > $maxMp) {
          echo "Minimum multiplier is larger than maximum.";
        }

        if (($minMd <= $maxMd) && ($minMp <= $maxMp) && (is_int($maxMp) && $maxMp >= 0) && (is_int($minMp) && $minMp >= 0)
           && (is_int($maxMd) && $maxMd >= 0) && (is_int($minMd) && $minMd >= 0)) {
        //Finally print multiplication table if all the above cases are satisfied properly
           echo '<b>Your Multiplication Table:</b><br>';
           echo '<br><table>';
           echo '<tr><td></td>';

           for ($index = $minMd; $index <= $maxMd; $index = $index+1) {
             echo '<td>';
             echo $index;
             echo '</td>';
           }
           echo '</tr>';

           for ($ind = $minMp; $ind <= $maxMp; $ind = $ind+1) {
             echo '<tr><td>';
             echo $ind;
             echo '</td>';

             for ($index = $minMd; $index <= $maxMd; $index = $index+1) {
               echo '<td>';
               echo $ind*$index;
               echo '</td>';
             }
             echo '</tr>';
           }
           echo '</table>';
      }
    }
    ?>
  </body>
</html>
