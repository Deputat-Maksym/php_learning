<?php

//-----------1-----------//

function getRevNum($number) {
    if($number) {
        $lastNum = $number % 10;
        $number = ($number - $lastNum) / 10;

        echo ' ' . $lastNum;

        getRevNum($number);
    }

}

getRevNum(5671);


//-----------2-----------//


