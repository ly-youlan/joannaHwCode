<html>
<head>
<title> E Commerce: Hidden Form Field for Session Tracking </title>
</head>
<body bgcolor=#DDDDDD>
<p>
<!-- The lines above are the standard html header -->

<?php

  // First get the input variables and their values
$cgi_name = $_POST['f_name'];
$cgi_ID = $_POST['f_ID'];

  // Do something with the inputs submitted by the user (here, print them back to the client).
    echo "Hello, $cgi_name . I will remember you in the next page!";
?>

<form method=POST action="http://YOUR_ITSC_LOGIN.student.ust.hk/cgi-bin/hidden_field_2.php">

    Isn't web programming easy? <input name=f_like type=text size=25>

    <input type=hidden name=f_session value=<?php echo $_POST['f_name']; ?> >
	
    <input type=submit value="Click me!">
</form>


<!-- The lines below are a standard html footer -->
<p>
<hr>
<p>
</body>
</html>
