<?php
$day = date('N');

$StartWork = 9;
$EndWork = 15;
$Hours = date('H');
echo($Hours).PHP_EOL;
echo($day).PHP_EOL;
//echo($day <= 5);
if ($day <= 5) {
    if ($Hours>=$StartWork and $Hours<=$EndWork) {
        $ToHourEnd = $EndWork - $Hours;
        echo("Waite: ".$ToHourEnd." hours." ).PHP_EOL;
    }elseif ($StartWork>$Hours) {
        $StartHours = $StartWork-$Hours;
        echo ("Start work after: " . $StartHours . " hours.") . PHP_EOL;
    } elseif ($EndWork>$Hours) {
        $AfterWork = $EndWork - $Hours;
        Echo("You Do not Working: ".$AfterWork." hours").PHP_EOL;
    }
    else{
        echo("Error!");
    }
} else {
    echo("Weekend!!!");
}