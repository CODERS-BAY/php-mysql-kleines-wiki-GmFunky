<!doctype html>
<html>

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>login.inc.php</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/wiki.css">
</head>

<body class="">
      <div class="">
            <?php

     $host=localhost;
     $pw=12345;
     $user=Gerald;
     $db=auto_wiki; 

/* Verbindung aufnehmen und Datenbank auswählen */
$con = new mysqli($host, $user, $pw, $db);

/*Damit ich eine Meldung bekomme, falls die Verbingung nicht funktioniert*/
if($con->connect_errno) {
      printf("Connect failed: %s\n", $con->connect_error);
      exit();
      }
?>

 </div>

</body>

</html>