<?php
date_default_timezone_set("Asia/Yangon");
echo "<br>Current Date => ".date("d-m-Y h:i:s a");

$current_date = date_create(date("d-m-Y"));
date_add($current_date, date_interval_create_from_date_string("5 days"));
echo "<br> Add 5 days => ".date_format($current_date, "d-m-Y");


date_sub($current_date, date_interval_create_from_date_string("10 days"));
echo "<br> Sub 10 days => ".date_format($current_date, "d-m-Y");

echo "<br> Calculate days in => ".cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));

$d=strtotime("10:30pm April 15 2014");
echo "<br> String to time is " . date("Y-m-d h:i:sa", $d);