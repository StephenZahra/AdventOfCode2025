<?php
    $start = 50;
    $zeroCount = 0;

    foreach(file("q1Input.txt") as $line) {
        $leftTurn = explode('L', $line);
        $rightTurn = explode('R', $line);

        // left turn has the direction and count of turns, right turn does not so we go left
        if(count($leftTurn) > count($rightTurn)){
            for($turns = (int)$leftTurn[1]; $turns > 0; $turns--){
                $start--;

                if($start == -1){
                    $start = 99;
                }

                if($start == 0){
                    $zeroCount++;
                }
            }
        }
        else{
            for($turns = (int)$rightTurn[1]; $turns > 0; $turns--){
                $start++;

                if($start == 100){
                    $start = 0;
                }

                if($start == 0){
                    $zeroCount++;
                }
            }
        }
    }

    echo("Zero Count: $zeroCount");
?>