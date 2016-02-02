<?php

/**
 * Function to covert bytes to human readable format
 *
 * @param  int $bytes
 * @param  int $decimals
 * @return string
 */
function hFileSize($bytes, $decimals = 2)
{
    $size = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB'];
    $factor = floor((strlen($bytes) - 1) / 3);
    return  str_replace('.00', '', sprintf("%.{$decimals}f", $bytes / pow(1024, $factor))).' '. @$size[$factor];
}