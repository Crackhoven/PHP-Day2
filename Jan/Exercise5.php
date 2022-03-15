<?php

function convertToHoursMins($time, $format = '%02d:%02d') {
    $hours = floor($time / 60);
    $minutes = ($time % 60);
    return sprintf($format, $hours, $minutes);
}

echo convertToHoursMins(6969, '%02d hours %02d minutes');