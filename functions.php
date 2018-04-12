<html>
<head>
    <script>
        function updaten($conn){ 
            var speler1 = document.getElementById("speler1").value;
            var speler2 = document.getElementById("speler2").value;
            document.location = "connection.php?speler1="+speler1+"&speler2="+speler2;
//            
//            var newgame = "CREATE TABLE newgame(gameid int, speler1 varchar(255), speler2 varchar(255), winnaar varchar(255))";
           // var inhoud = "INSERT INTO newgame(speler1, speler2) VALUES ('$speler1','$speler2')";
//    
    }
        
        function update(){
            var speler1 = document.getElementById("speler1").value;
            var speler2 = document.getElementById("speler2").value;
            document.location = "index.php?speler1="+speler1+"&speler2="+speler2;
        }


    </script>
</head>
</html>

<?php

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
    
    function start(){
        
    }
    
    function rood($rood){
        $rood = "UPDATE `newgame` SET `winnaar`=[Rood heeft gewonnen] WHERE `winnaar`";
        echo "Rood heeft gewonnen";
    }
    
        function geel($geel){
        $geel = "UPDATE `newgame` SET `winnaar`=[Geel heeft gewonnen] WHERE `winnaar`";
        echo "Geel heeft gewonnen";
    }
    
    function updaten($sql){
        $conn->query($sql); 
        }