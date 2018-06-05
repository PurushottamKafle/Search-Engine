<?php
//die();
// die() ma thiyo tei bhayera na chaleko 
$host = 'localhost';
$user ='kidpk';
$password = '';
$mysql_db ='YourDB';
$mysql_error ='Cound not connect in database';
#here
if(!@mysql_connect($host, $user, $password) || !@mysql_select_db($mysql_db)){
    die($mysql_error);
}

?>
