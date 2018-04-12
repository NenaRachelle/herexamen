<?php

$sn="localhost";
    $un="root";
    $pw="root";
    $db="herexamen";
    $conn = new mysqli($sn, $un, $pw, $db);
            $speler1 = $_GET['speler1'];
            $speler2 = $_GET['speler2'];
            $results = "SELECT * FROM newgame;";
            
            $conn->query($sql);
            
            $sql = "CREATE TABLE newgame(gameid int, speler1 varchar(255), speler2 varchar(255), winnaar varchar(255))";
            $update = "INSERT INTO `newgame`(`speler1`, `speler2`) VALUES ('$speler1','$speler2')";
