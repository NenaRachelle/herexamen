<html>
<head>
<style>
table, tr, td {
    border: 3px solid black;
    border-collapse: collapse;
}

tr, td{
                width: 100px;
                height: 100px;
            }
</style>
</head>
</html>


<?php

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

