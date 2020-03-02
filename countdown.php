<?php
session_start();
if(isset($to_epoch))
{
$to_epoch = $_SESSION['toseconds'];
}
function countdown($value='')
{
     date_default_timezone_set('UTC');
     $time = time();
     if(!isset($_SESSION['toseconds']))
     {
          $to_epoch  = strtotime("September 13, 2020 12:26:40");
     }
     else
     {
          $to_epoch = $_SESSION['toseconds'];
     }
     $rem_epoch = $to_epoch - time();
     $dt        = new DateTime("@$to_epoch");
     $to_time   = $dt->format('D, F d, Y h:i:s T');
     $dt        = new DateTime("@$time");
     $c_time    = $dt->format('D, F d, Y h:i:s A');
     echo "<span id='c_time'>".$c_time."</span><br/>";
     echo "<span id='count'>".$rem_epoch."</span><br/>";
     echo "<span id='count_to'>Countdown to $to_epoch $to_time</span>";
}
countdown();
?>
