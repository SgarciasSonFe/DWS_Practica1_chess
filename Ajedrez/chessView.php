<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="chess_game_styles.css">

</head>
<body>
        <?php
            $board = array(
                array("RoB","KnB","BiB","QuB","KiB","BiB","KnB","RoB"),
                array("PaB","PaB","PaB","PaB","PaB","PaB","PaB","PaB"),
                array(""),
                array(""),
                array(""),
                array(""),
                array("PaW","PaW","PaW","PaW","PaW","PaW","PaW","PaW"),
                array("RoW","KnW","BiW","QuW","KiW","BiW","KnW","RoW"));

            DrawChessGame($board);
        ?>

    <?php
        function DrawChessGame($board)
        {
            echo "<table  class='negro'>";
            for($i=0;$i<8;$i++)
            {
                echo "<tr>";
                for($j=0; $j<8; $j++)
                {
                    if($board[$i][$j] == "RoB")
                    {
                        echo "<td><div class='pieza'><img src='./img/BLArook.png'></div></td>"; 
                    } else if($board[$i][$j] == "KnB"){
                        echo "<td><div class='pieza'><img src='./img/BLAknight.png'></div></td>"; 
                    } else if($board[$i][$j] == "BiB"){
                        echo "<td><div class='pieza'><img src='./img/BLAbishop.png'></div></td>"; 
                    } else if($board[$i][$j] == "QuB"){
                        echo "<td><div class='pieza'><img src='./img/BLAqueen.png'></div></td>"; 
                    } else if($board[$i][$j] == "KiB"){
                        echo "<td><div class='pieza'><img src='./img/BLAking.png'></div></td>"; 
                    } else if($board[$i][$j] == "PaB"){
                        echo "<td><div class='pieza'><img src='./img/BLApawn.png'></div></td>"; 
                    } else 
                    if($board[$i][$j] == "RoW")
                    {
                        echo "<td><div class='pieza'><img src='./img/WHIrook.png'></div></td>"; 
                    } else if($board[$i][$j] == "KnW"){
                        echo "<td><div class='pieza'><img src='./img/WHIknight.png'></div></td>"; 
                    } else if($board[$i][$j] == "BiW"){
                        echo "<td><div class='pieza'><img src='./img/WHIbishop.png'></div></td>"; 
                    } else if($board[$i][$j] == "QuW"){
                        echo "<td><div class='pieza'><img src='./img/WHIqueen.png'></div></td>"; 
                    } else if($board[$i][$j] == "KiW"){
                        echo "<td><div class='pieza'><img src='./img/WHIking.png'></div></td>"; 
                    } else if($board[$i][$j] == "PaW"){
                        echo "<td><div class='pieza'><img src='./img/WHIpawn.png'></div></td>"; 
                    } else {
                        if($i % 2)
                        {
                            echo "<td><div class='negro'></div></td>"; 
                            echo "<td><div class='blanco'></div></td>"; 
                            $j++;
                        } else {
                            echo "<td><div class='blanco'></div></td>"; 
                            echo "<td><div class='negro'></div></td>"; 
                            $j++;
                        }
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
                     
        }
    ?>
    
    
</body>
</html>