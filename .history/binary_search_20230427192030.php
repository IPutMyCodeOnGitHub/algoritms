<?php

class BinarySearch 
{
    public static function search(array $arr, int $aim): ?int
    {
        if (empty($ar))

        $from = 0;
        $to = count($arr) - 1;
        $mid = ($from + $to) / 2;

        while ($from <= $to) {
            if ($aim === $arr[$mid]) {
                return $mid;
            }
            if ($aim < $arr[$mid]) {
                $to = $mid - 1;
            } else {
                $from = $mid + 1;
            }
        }
    }
}




