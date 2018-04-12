<html>
<head>
    <form method="get" action="index.php" name="form">

        <span>Rood:</span><input type="text" name="speler1" id="speler1" placeholder="Naam speler 1"> 
        <span>Geel:</span><input type="text" name="speler2" id="speler2" placeholder="Naam speler 2">
        <input type=submit name="submit" onclick="updaten($conn)">
    </form> 
<br>
    <script>
        print_r = document.write(stand);
    </script>
<br>
    <style>
    table, tr, td {
        border: 3px solid black;
        border-collapse: collapse;
    }

    tr, td{
        width: 100px;
        height: 100px;
    }

    td{
        .steenrood{
        border-radius : 100%;
        background-color:red;
        }
        .steengeel{
        border-radius : 100%;
        background-color:yellow;
        }
    }
    </style>
</head>
<body>
    <?php
    
include 'connection.php';
include 'functions.php';
            
tabelmaken();

echo "<br>";
echo'<input type="button" value="Rood wint" onclick="rood($rood)">';
echo'<input type="button" value="Geel wint" onclick="geel($geel)">';


?>
</body>
</html>

<?php




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

