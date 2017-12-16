<?php

$db = mysqli_connect("localhost", "root", "");
    mysqli_set_charset($db, "utf8");
    mysqli_select_db($db, "worldations");
    
    $sql_abfrage = "SELECT * FROM länder";
    
    $abfrage_ergebnis = mysqli_query($db, $sql_abfrage);
    while($row = mysqli_fetch_assoc($abfrage_ergebnis)){
            echo "$row[Text1]<br>\n";     
    }
    mysqli_close($db);
?>
