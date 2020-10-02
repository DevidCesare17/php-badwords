<?php
  $badword = $_GET['badword'];
  $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  $new_paragraph = str_replace($badword, "***", $paragraph);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP badword</title>
  </head>
  <body>
    <p><?php echo $new_paragraph; ?></p>
    <p>La sua lunghezza: <?php echo strlen($new_paragraph); ?></p>
  </body>
</html>
