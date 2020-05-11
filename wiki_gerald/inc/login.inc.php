<?php

     $host='localhost';
     $pw='12345';
     $user='Gerald';
     $db='auto_wiki'; 

/* Verbindung aufnehmen und Datenbank auswählen */
$con = new mysqli($host, $user, $pw, $db);

/*Damit ich eine Meldung bekomme, falls die Verbingung nicht funktioniert*/
if($con->connect_errno) {
      printf("Connect failed: %s\n", $con->connect_error);
      exit();
      }
?>