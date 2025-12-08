<?php

$invalidIdSum = 0;
$ids = explode(',', file("q2Input.txt")[0]); // read a 1 line string like "11-11,55-66,....."

foreach ($ids as $id){

    $nums = explode('-', $id);
    for($x = $nums[0]; $x <= $nums[1]; $x++){
        $numToStr = (string)$x;
        if(strlen($numToStr) % 2 == 0){
            //if we have a string of even length, we can check it's validity
            $splitNum = str_split($numToStr, strlen($numToStr) / 2);
            if($splitNum[0] == $splitNum[1]){
                $invalidIdSum += $x;
            }
        }
    }
}

echo("Sum of invalid Ids: $invalidIdSum");

?>