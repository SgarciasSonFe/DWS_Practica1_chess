<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="chess_game_styles.css">

</head>
<body>
    <table>
        <?php
            for($i=0;$i<8;$i++)
            {
                echo "<tr>";
                for($j=0; $j<4; $j++)
                {
                    if($i % 2)
                    {
                        echo "<td><div class='negro'></div></td>"; 
                        echo "<td><div class='blanco'></div></td>";
                    } else {
                        echo "<td><div class='blanco'></div></td>";
                        echo "<td><div class='negro'></div></td>"; 
                    }
                }
                echo "</tr>";
            }
            DrawChessGame(1);
        ?>
    </table>

    <?php
        // $whitePieces = array("<img src='./img/WHIpeon.png'>");
        // function DrawChessGame($board)
        // {
        //     for($i=0;$i<8;$i++)
        //     {
        //         for($j=0; $j<4; $j++)
        //         {
        //             echo "<div class='pieza'><img src='./img/BLApeon.png'></div>"; 
        //         }
        //     }
        // }
    ?>
    
</body>
</html>