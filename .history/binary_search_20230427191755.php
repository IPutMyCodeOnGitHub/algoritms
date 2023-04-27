<?php

class BinarySearch 
{
    static public function search(array $arr, int $aim)
    {
        $from = 0;
        $to = count($arr) - 1;
        $mid = ($from + $to) / 2;

        while ($from <= $to) {
            if ($aim === $arr[$mid]) {
                return $mid;
            }
            if ($aim < $arr)
        }
    }
}



