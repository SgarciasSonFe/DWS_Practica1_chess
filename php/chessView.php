<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Game</title>
    <link rel="stylesheet" href="chess_game_styles.css">

</head>
<body>
        <?php // Array que define la posición de las piezas en el tablero.
            $board = array(
                array("RoB","KnB","BiB","QuB","KiB","BiB","KnB","RoB"),
                array("PaB","PaB","PaB","PaB","PaB","PaB","PaB","PaB"),
                array(),
                array(),
                array(),
                array(),
                array("PaW","PaW","PaW","PaW","PaW","PaW","PaW","PaW"),
                array("RoW","KnW","BiW","QuW","KiW","BiW","KnW","RoW"));
            
            DrawChessGame($board);
        ?>

    <?php
        function DrawChessGame($board)
        {
            $nothing = "";
            $blaRook = "<img src='./img/BLArook.png'>";
            $blaKnight = "<img src='./img/BLAknight.png'>";
            $blaBishop = "<img src='./img/BLAbishop.png'>";
            $blaQueen = "<img src='./img/BLAqueen.png'>";
            $blaKing = "<img src='./img/BLAking.png'>";
            $blaPawn = "<img src='./img/BLApawn.png'>";
            $whiRook = "<img src='./img/WHIrook.png'>";
            $whiKnight = "<img src='./img/WHIknight.png'>";
            $whiBishop = "<img src='./img/WHIbishop.png'>";
            $whiQueen = "<img src='./img/WHIqueen.png'>";
            $whiKing = "<img src='./img/WHIking.png'>";
            $whiPawn = "<img src='./img/WHIpawn.png'>";

            echo "<table>";
            for($i=0;$i<8;$i++)
            {
                echo "<tr>"; 
                for($j=0; $j<8; $j++) 
                {
                    if($board[$i][$j] == "RoB") {
                        BoxColor($i,$j,$blaRook);
                    } else if($board[$i][$j] == "KnB"){
                        BoxColor($i,$j,$blaKnight);
                    } else if($board[$i][$j] == "BiB"){
                        BoxColor($i,$j,$blaBishop);
                    } else if($board[$i][$j] == "QuB"){
                        BoxColor($i,$j,$blaQueen);
                    } else if($board[$i][$j] == "KiB"){
                        BoxColor($i,$j,$blaKing);
                    } else if($board[$i][$j] == "PaB"){
                        BoxColor($i,$j,$blaPawn); 
                    
                    } else if($board[$i][$j] == "RoW") {
                        BoxColor($i,$j,$whiRook); 
                    } else if($board[$i][$j] == "KnW"){
                        BoxColor($i,$j,$whiKnight); 
                    } else if($board[$i][$j] == "BiW"){
                        BoxColor($i,$j,$whiBishop); 
                    } else if($board[$i][$j] == "QuW"){
                        BoxColor($i,$j,$whiQueen); 
                    } else if($board[$i][$j] == "KiW"){
                        BoxColor($i,$j,$whiKing); 
                    } else if($board[$i][$j] == "PaW"){
                        BoxColor($i,$j,$whiPawn); 
                    } else {
                        BoxColor($i,$j,$nothing);
                    }
                }
                echo "</tr>";
            }
            echo "</table>";

        }

        function BoxColor($i,$j,$pieza)
        {
            if($i % 2) 
            {
                if($j % 2) 
                {
                    echo "<td><div class='blanco'>".$pieza."</div></td>";
                } else {
                    echo "<td><div class='negro'>".$pieza."</div></td>";
                }
            } else if(($i % 2)-1) 
            {
                if($j % 2) 
                {
                    echo "<td><div class='negro'>".$pieza."</div></td>";
                } else {
                    echo "<td><div class='blanco'>".$pieza."</div></td>";
                }
            }
        }



    ?>
    
    
</body>
</html>