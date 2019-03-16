<?php
 
    echo '<br />' . date('d'); // day
    echo '<br />' . date('m'); // month
    echo '<br />' . date('Y'); // year
    echo '<br />' . date('l'); // day of the week

    echo '<br />' . date('Y/m/d');
    echo '<br />' . date('d-m-Y');

    echo '<br />' . date('h'); // hour
    echo '<br />' . date('i'); // min
    echo '<br />' . date('s'); // sec
    echo '<br />' . date('a'); // AM or PM

    // set time zone
    date_default_timezone_set('Europe/Warsaw');

    echo '<br />' . date('h:i:sa'); 

    $timestamp = mktime(10, 14, 54, 9, 10, 1981);

    echo '<br />' . $timestamp; 
    echo '<br />' . date('m/d/Y h:i:sa', $timestamp); 

    $timestamp2 = strtotime('7:00pm March 22 2016');

    echo '<br />' . $timestamp2; 
    echo '<br />' . date('m/d/Y h:i:sa', $timestamp2); 

    $timestamp3 = strtotime('tomorrow');

    echo '<br />' . $timestamp3;
    echo '<br />' . date('m/d/Y h:i:sa', $timestamp3); 

    $timestamp4 = strtotime('next Monday');

    echo '<br />' . $timestamp4;
    echo '<br />' . date('m/d/Y h:i:sa', $timestamp4); 

    $timestamp5 = strtotime('+2 Months');

    echo '<br />' . $timestamp5;
    echo '<br />' . date('m/d/Y h:i:sa', $timestamp5); 


?>