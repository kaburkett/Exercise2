<?php

//values passed from html form
$name = $_POST['change_record'];
$value = $_POST['change_description'];

//get timestamp
date_default_timezone_set('America/New_York');
$date = date('m/d/Y h:i:s a', time());

shell_exec('./shlscrpt.sh  2>&1');
echo ("Thank you for recording a change. This won't suffice for an audit, but it's nice to have. Just for the record, you titled your change: ".$name.". and you changed: ".$value." All of this is recorded inside of a log on the system with the date/time of: ".$date);

?>