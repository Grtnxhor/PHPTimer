<?php
session_start();

                $timer    = 1;

     $_SESSION["duration"] = $timer;
     $_SESSION["start_time"] = date("Y-m-d H:i:s");


     $end_time = $end_time = date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration"].'minutes', strtotime($_SESSION["start_time"])));

     $_SESSION["end_time"] = $end_time;
    
?>
<script>
  window.location = "index.php";
</script>