<?php
// Contert default time zone to EST time Zone
$estTime = (new DateTime('America/New_York'))->format('h:i a');
$current_time = $estTime;
$sunrise = "12:00 am";
$sunset = "03:00 am";
$date1 = DateTime::createFromFormat('h:i a', $current_time);
$date2 = DateTime::createFromFormat('h:i a', $sunrise);
$date3 = DateTime::createFromFormat('h:i a', $sunset);
if ($date1 > $date2 && $date1 < $date3)
{
    echo '<h3 style="text-align: center; padding: 39px;line-height: 40px;">System is down for maintenance daily from 12am EST to 3am EST</h3>';
} 


