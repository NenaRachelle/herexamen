<html>
<head>
    <script>
        function start(){
            var speler1 = document.getElementById("speler1").value;
            var speler2 = document.getElementById("speler2").value;
            document.location = "index.php?speler1="+speler1+"&speler2="+speler2;
            
            var newgame = "CREATE TABLE newgame(gameid int, speler1 varchar(255), speler2 varchar(255), winnaar varchar(255))";
            var inhoud = "INSERT INTO newgame(speler1, speler2) VALUES ('$speler1','$speler2')";
        }
        
        function update(gameid,id){
            var speler1 = document.getElementById("speler1").value;
            var speler2 = document.getElementById("speler2").value;
            document.location = "index.php?speler1="+speler1+"&speler2="+speler2;
        }
    </script>
    Speler 1: <input type="text" placeholder="Naam speler 1" id="speler1"><br>
    Speler 2: <input type="text" placeholder="Naam speler 2" id="speler2"><br>
    <input type="button" value="Nieuw spel" onclick="start(), newgame()"><br>
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
    function bepaalsteen($x, $y){
    global $speelveld;
        switch($speelveld[$x][$y]){
            case 1:
                return "steenblauw";
            case 2:
                return "steenrood";
            default:
                return "";
        }
    }
    ?>
</body>
</html>


<?php
include 'connection.php';

$newgame = "CREATE TABLE newgame(gameid int, speler1 varchar(255), speler2 varchar(255), winnaar varchar(255))";
$inhoud = "INSERT INTO newgame(speler1, speler2) VALUES ('$speler1','$speler2')";
            
tabelmaken();

function tabelmaken(){
    $b=7;
    $h=6;
    echo"<table>";
    echo"<tr>";
        for ($y=0;$y<$h;$y++){  
                for ($x=0;$x<$b;$x++){
                    echo"<td id=vakje".$x.",".$y.">";
                }
            echo"</td>";
            echo "</tr>";
            }
    echo"</table>";
}

echo "<br>";
echo'<input type="button" value="Rood wint" onclick="$rood">';
echo'<input type="button" value="Geel wint" onclick="$geel">';

$geel = "Geel wint";
$rood = "Rood wint";
?>