<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>PHP Jackpot rework</title>
    </head>
<body>
    
    <h>Jackpot thingy</h>
        <p>
            <?php
            
            $chosenNumber_1 = rand(0, 1);
            $chosenNumber_2 = rand(0, 1);
            $chosenNumber_3 = rand(0, 1);
            $chosenNumber_4 = rand(0, 1);
            $chosenNumber_5 = rand(0, 1);
            
            echo"
            $chosenNumber_1
            $chosenNumber_2
            $chosenNumber_3
            $chosenNumber_4 
            $chosenNumber_5
            ";
            ?>
        </p>
        
        <?php
        if 
        ($chosenNumber_1+$chosenNumber_2+$chosenNumber_3+$chosenNumber_4 +$chosenNumber_5 == 5):
        ?>
        
        <?php
        $possibility = ((0.5)**5)*100;
        echo "You won and the possibility of you winning the jackpot is $possibility %";
        
        elseif 
        ($chosenNumber_1+$chosenNumber_2+$chosenNumber_3+$chosenNumber_4 +$chosenNumber_5 == 0):
            
        echo "You lost but the possibility of this happening was really low, so congratulations in a weird way!"
         ?>
    <?php
        endif;
        ?>
</body>