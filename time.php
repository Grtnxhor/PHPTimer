<?php
$duration = "3 hours 0 mins";

$split = preg_split("/[^\w]*([\s]+[^\w]*|$)/", $duration, -1, PREG_SPLIT_NO_EMPTY);

    if ($split[0] >= 1 && $split[0] < 60 && $split[1] == 'min'){
        $duration = $split[0];
    }
    elseif ($split[0] >= 1 && $split[0] < 60 && $split[1] == 'mins'){
        $duration = $split[0];
    }
    else{
        $durationHours = $split[0]*60;
        $durationMin = $split[2];

        $duration = $durationHours + $durationMin;
        echo $duration;
    }
    ?>