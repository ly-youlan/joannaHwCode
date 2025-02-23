<html>
<head>
<title> E Commerce: Hidden Form Field for Session Tracking </title>
</head>
<body bgcolor=#DDDDDD>
<p>
<!-- The lines above are the standard html header -->

<?php

  // Get the input variables
  $name = $_POST['name'];
  $pin = $_POST['pin'];
  
  // Create session name by concatenating name and pin
  $session_name = $name . $pin;
?>

<form method="POST" action="hidden_field_3.php">
    <b>What is your favorite course?</b><br>
    <input name="favorite_course" type="text" size=25>
    <input type="hidden" name="session_name" value="<?php echo $session_name; ?>">
    <input type="submit" value="Submit">
</form>

<!-- The lines below are a standard html footer -->
<p>
<hr>
<p>
</body>
</html>
