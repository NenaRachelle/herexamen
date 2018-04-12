<html>
<head>
<style>
table, tr, td {
    border: 1px solid black;
}

tr, td{
                width: 80px;
                height: 80px;
            }
</style>
<table>
    <tr>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
</table>
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
            echo"<td>";  
                for ($x=0;$x<$b;$x++){
                }
                   // if($x%2){}
            echo"</td>";
            echo "</tr>";
            }
    echo"</table>";
}

