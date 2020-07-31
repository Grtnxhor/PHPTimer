<?php


//present time
$data = date("H:i:s");
$data = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $data);

sscanf($data, "%d:%d:%d", $hour, $minute, $second);

$time_second = ($hour * (1000 * 60 * 60 * 24) / (1000 * 60 * 60)) + ($minute * (1000 * 60 * 60) / (1000 * 60)) + $second;





//db time

$str_time = "03:30:00";

$str_time = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $str_time);

sscanf($str_time, "%d:%d:%d", $hours, $minutes, $seconds);

$time_seconds = $hours * 3600 + $minutes * 60 + $seconds;


$diff = $time_seconds - $time_second;



echo gmdate("H:i:s", $diff);

echo "<br/><br/><br/>";

echo gmdate("H:i:s", $time_second);



?>

<script>
	
</script>