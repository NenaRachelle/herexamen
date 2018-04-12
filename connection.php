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