<html>
<head>
    <form method="get" action="index.php" name="form">

        <span>Rood:</span><input type="text" name="speler1" id="speler1" placeholder="Naam speler 1"> 
        <span>Geel:</span><input type="text" name="speler2" id="speler2" placeholder="Naam speler 2">
        <input type=submit name="submit" onclick="updaten($conn)"><br>
        
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
    td::active {
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
        .steenrood:active{
        border-radius : 100%;
        background-color:red;
        }
        
        .steengeel:active{
        border-radius : 100%;
        background-color:yellow;
        }
    
        .plaatsR:hover, .show:focus {
        background-color: darkred;
        }
        
        .plaatsG:hover, .showG:focus {
        background-color: darkgoldenrod;
        }
        
    }
    
    td{
        #steenrood {
        display: none;
        }

        #steenrood:checked+:active{
            background: red;
        }
    }
    
        
    </style>
<!--    <input type="checkbox" id="steenrood"/>-->
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

    $results = mysqli_query($conn,"SELECT * FROM `newgame`");
    
    
    echo "<ul>";
            echo "<li>";
           while ($row = $result->fetch_assoc()) {
                echo $row['speler1'];
                echo $row['speler2'];
           }
           
   
?>

