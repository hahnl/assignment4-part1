<?php
      error_reporting(E_ALL);
      session_start(); //Persistant login! Woohoo!

      if(isset($_SESSION['view'])) //If page views are set
      {
        $_SESSION['view']=$_SESSION['view']+1; //Increase the views by 1
      }
      else
      {
        $_SESSION['view']=0; //initialize views with 0
      }

//CITATION: https://www.daniweb.com/web-development/php/code/303111/page-view-count-in-a-session
//I learned the algorithm for the page views from this website here
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
          // Citation Learned the algorithm of cases to check from the study session, but I applied it to assignment
              if(isset($_REQUEST['username'])) {
                //If they pressed login yet the search field was left blank
                if (isset($_REQUEST['username']) && (empty($_REQUEST['username']) || $_REQUEST['username'] == null)) {
                  echo "A username must be entered.<br/>Click ";
                  echo '<a href="logout.php">here</a>';
                  echo " to return to the login screen.";
                }
                else {
                //If the username entered is not the same as the person who is already logged in
                    if(isset($_SESSION['username']) && $_SESSION['username'] != $_REQUEST['username']) {
                        echo "<h3>".$_SESSION['username']."'s Profile</h3><br/>";
                        echo "Hello ".$_SESSION['username']." you have visited this page ".$_SESSION['view']." times before.<br/>";
                        echo "Click ";
                        echo '<a href="logout.php">here</a>';
                        echo " to logout.";
                //The user is logged in
                      } elseif(isset($_SESSION['username'])) {
                        echo "<h3>".$_SESSION['username']."'s Profile</h3><br/>";
                        echo "Hello ".$_SESSION['username']." you have visited this page ".$_SESSION['view']." times before.<br/>";
                        echo "Click ";
                        echo '<a href="logout.php">here</a>';
                        echo " to logout.";
                //Yay the user is NOW logged in
                      } else {
                        $_SESSION['username'] = $_REQUEST['username'];
                        echo "<h3>".$_SESSION['username']."'s Profile</h3><br/>";
                        echo "Hello ".$_SESSION['username']." you have visited this page ".$_SESSION['view']." times before.<br/>";
                        echo "Click ";
                        echo '<a href="logout.php">here</a>';
                        echo " to logout.";
                }
              }
              } else {
              //Covering the bases here, if there's a session, keep them logged in
                if (isset($_SESSION['username'])) {
                  echo "<h3>".$_SESSION['username']."'s Profile</h3><br/>";
                  echo "Hello ".$_SESSION['username']." you have visited this page ".$_SESSION['view']." times before.<br/>";
                  echo "Click ";
                  echo '<a href="logout.php">here</a>';
                  echo " to logout.";
                } elseif (!isset($_SESSION['username'])) {
              //If they aren't logged in, redirect them to log in again
                  echo "<meta http-equiv=\"refresh\" content=\"0;URL=login.php\">";
                }
              }
          ?>
        </div>
  </table>

  <?php
  if(isset($_SESSION['username'])) { //If they are logged in, display content
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
             <a href="content2.php">Content2 link</a>
          </div>
    </table>


    <?php
    }
    ?>
</body>
</html>
