<html>
<head>
<title>E Commerce: Hidden Form Field for Session Tracking</title>
</head>
<body bgcolor=#DDDDDD>
<p>

<?php
  // Get the input variables
  $session_name = $_POST['session_name'];
  $favorite_course = $_POST['favorite_course'];
  
  // Output the message
  echo "Hello. You are executing a session called " . $session_name . ". Your favourite course is " . $favorite_course . ".";
?>

<p>
<hr>
<p>
</body>
</html>
