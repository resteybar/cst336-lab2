<?php
    
    function displayPoints($rand1, $rand2, $rand3) {
        echo "<div id='output'>";
        
        if($rand1 == $rand2 && $rand2 == $rand3) {
            switch($rand1) {
                case 0:
                    $totalPoints = 1000;
                    echo "<h1>Jackpot!</h1>";
                    break;
                    
                case 1:
                    $totalPoints = 500;
                    break;
                    
                case 2:
                    $totalPoints = 250;
                    break;
            }
            
            echo "<h2> You won $totalPoints points! </h2>";
        } else {
            echo "<h3> Try again! </h3>";
        }
        
        echo "<div/>";
    }
    
    function displaySymbol($rand, $pos) {
        switch($rand) {
            case 0:
                $symbol = "seven";
                break;
                
            case 1:
                $symbol = "cherry";
                break;
                
            case 2:
                $symbol = "orange";
                break;
                
            case 3:
                $symbol = "grapes";
                break;
                
            case 4:
                $symbol = "bar";
                break;
                
            default:
                $symbol = "lemon";
                break;
        }
        
        echo "<img id='reel$pos' src='img/$symbol.png' alt='$symbol' title='" . ucfirst($symbol) . "'width='70' />";
    }
    
    function play() {
        for($i = 1; $i < 4; ++$i) {
            ${"rand".$i} = rand(0, 6);
            displaySymbol(${"rand".$i}, $i);
        }
        displayPoints($rand1, $rand2, $rand3);
    }
?>