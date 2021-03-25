<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "agenda";

$link = mysqli_connect($host, $user, $pass, $dbname) or die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());   

if (!mysqli_set_charset($link, "utf8")) {
    //printf("Error loading character set utf8: %s\n", mysqli_error($link));
    exit();
} else {
    //printf("Current character set: %s\n", mysqli_character_set_name($link));
}
mysqli_select_db($link, $dbname);
        
//id15124707_root
//R8z9jZb~yRsZdtJq
//id15124707_agenda
?>