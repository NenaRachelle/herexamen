<html>
<head>
    <form method="get" action="index.php" name="form">

        <span>Rood:</span><input type="text" name="speler1" id="speler1" placeholder="Naam speler 1"> 
        <span>Geel:</span><input type="text" name="speler2" id="speler2" placeholder="Naam speler 2">
        <input type=submit name="submit" onclick="updaten($conn)">
    </form> 
<br>
    <script>
        //print_r = document.write(stand);
    </script>
<br>
    <style>
    table, tr, td {
        border: 3px solid black;
        border-collapse: collapse;
        cursor: pointer;
    }
    
    td:hover{
        background-color: grey;
        border-radius : 100%;
    }
    td:checked + label {
        background: red;
        color: red;
        border-radius : 100%;
    }

    td label {
        border-radius : 100%;
        background: grey;
        width: 100px;
        height: 100px;
    }

    tr, td{
        width: 100px;
        height: 100px;
    }

    td, tr{
        .steenrood:onclick{
        border-radius : 100%;
        background-color:red;
        }
        
        .steengeel:onclick{
        border-radius : 100%;
        background-color:yellow;
        }
    
        .plaatsR:hover, .dropbtn:focus {
        background-color: darkred;
        }
        
        .plaatsG:hover, .dropbtn:focus {
        background-color: darkgoldenrod;
        }
        .showR {display:steengeel;
        }
    }
    
        
    </style>
</head>
<body>
    <?php
    
include 'connection.php';
include 'functions.php';
            
tabelmaken();




?>
</body>
</html>

<?php

echo "<br>";
echo'<input type="button" value="Rood wint" onclick="rood()">';
echo'<input type="button" value="Geel wint" onclick="geel()">';

    function rood(){
        $rood = "UPDATE `newgame` SET `winnaar`=[Rood heeft gewonnen] WHERE `winnaar`";
        echo "Speler 1 heeft gewonnen";
    }
    
        function geel(){
        $geel = "UPDATE `newgame` SET `winnaar`=[Geel heeft gewonnen] WHERE `winnaar`";
        echo "Speler 2 heeft gewonnen";
    }


//if ($conn->query($resultaten) === TRUE) {
//    echo "<ul>";
//    while($row = $results->fetch_assoc()){
//        echo "<li>";
//        echo $speler1 + $speler2 + $winnaar ['speler1'+'speler2' +'winnaar'];
//        echo "</li>";
//    }
//} else {
//    echo "Error" . $conn->error;
//}
  
//    $resultaten = "SELECT * FROM `newgame`";
//            
//    $stand = $conn->query($resultaten);
//    //echo $stand;
//    
//    $extrainfo ++;
//    $extrainfo = "onclick=klik($x,$y)";
    //console.log($extrainfo);
?>

