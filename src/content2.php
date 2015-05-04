<?php
    error_reporting(E_ALL);
    session_start(); // Persistent login! Oh yeah! Wish I knew how to do this ten years ago.
?>

<!DOCTYPE html>
<head>
  <html lang="en-US">
  <meta charset="UTF-8">
  <title>Login Result - Assignment 4, Part 1 for CS290 at OSU - Larissa Hahn</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <table>
    <tr>
      <td>
        <div class="title">
          <h1>My Nifty Website</h1>
        </div>
      <td>
        <div class="login-section">
          <?php
              if(isset($_REQUEST['username'])) { //Please see the comments from content1.php. This is the same.
                if(isset($_SESSION['username']) && $_SESSION['username'] != $_REQUEST['username']) {
                  echo "<h3>".$_SESSION['username']."'s Profile</h3><br/>";
                  echo "Hello ".$_SESSION['username']."<br/>";
                  echo "Click ";
                  echo '<a href="logout.php">here</a>';
                  echo " to logout.";
                } elseif(isset($_SESSION['username'])) {
                  echo "<h3>".$_SESSION['username']."'s Profile</h3><br/>";
                  echo "Hello ".$_SESSION['username']."<br/>";
                  echo "Click ";
                  echo '<a href="logout.php">here</a>';
                  echo " to logout.";
                } else {
                  $_SESSION['username'] = $_REQUEST['username'];
                  echo "<h3>".$_SESSION['username']."'s Profile</h3><br/>";
                  echo "Hello ".$_SESSION['username']."<br/>";
                  echo "Click ";
                  echo '<a href="logout.php">here</a>';
                  echo " to logout.";
                }
              } else {
                if(isset($_SESSION['username'])) {
                  echo "<h3>".$_SESSION['username']."'s Profile</h3><br/>";
                  echo "Hello ".$_SESSION['username']."<br/>";
                  echo "Click ";
                  echo '<a href="logout.php">here</a>';
                  echo " to logout.";
                } elseif (!isset($_SESSION['username'])) { //If not logged in, redirect! WOoooooHoooo!
                  echo "<meta http-equiv=\"refresh\" content=\"0;URL=login.php\">";
                }
              }
          ?>
        </div>
  </table>

<?php
if(isset($_SESSION['username'])) { //Display contents when user is logged in
  ?>
    <table>
      <tr>
        <td>
          <div class="content1-header">Account Settings</div>
          <div class="content1-body">
            Features go here
          </div>
        <td>
          <div class="content2-header">Content</div>
          <div class="content2-body">
            <a href="content1.php">Content1 link</a><br><br>
          </div>
    </table>
</body>
</html>

<?php
}
?>
