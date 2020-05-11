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


<?php


include('inc/login.inc.php');
//$_REQUEST['lexikonID'] 
$result = $con->query("SELECT title, imgpath, description FROM content WHERE id = " . $entryID);
$response = "<div class='modal-header'>";
while($entry = $result->fetch_assoc()){ ... } 

$response .= "<h5 class='modal-title'>" . $entry['title'] . "</h5>";
$response .= "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
$response .= "</div>";
 
 ?>
</html>