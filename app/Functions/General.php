<?php

/**
 * Format bytes to kb, mb, gb, tb
 *
 * @param  integer $size
 * @param  integer $precision
 * @return integer
 */
function formatBytes($size, $precision = 2)
{
    if ($size > 0) {
        $size = (int) $size;
        $base = log($size) / log(1024);
        $suffixes = [' bytes', ' KB', ' MB', ' GB', ' TB'];
        return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
    } else {
        return $size;
    }
}
