<?php


//link to the database credentials
$host = "shared09.uk-noc.com:3306"; //webserver
$dbname = "dotunpat_spa_cafe_feedback"; //name of dbase
$username = "dotunpat_spa";// we connect using the root account on the dbase when dev locally
$password = "lemurianstar1$";



//CONNECTION TO DBASE only this worked
$conn = mysqli_connect("shared09.uk-noc.com:3306", "dotunpat_spa", "lemurianstar1$", "dotunpat_spa_cafe_feedback");



?>