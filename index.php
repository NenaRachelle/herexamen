<html>
<head>
    Rood: <input type="text" placeholder="Naam speler 1" id="speler1"><br>
    Geel: <input type="text" placeholder="Naam speler 2" id="speler2"><br>
    <input type="submit" value="Nieuw spel" onclick="start(),  update()"><br>
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
require 'connection.php';
require 'functions.php';
            
tabelmaken();

echo "<br>";
echo'<input type="button" value="Rood wint" onclick="rood()">';
echo'<input type="button" value="Geel wint" onclick="geel()">';

?>
</body>
</html>
