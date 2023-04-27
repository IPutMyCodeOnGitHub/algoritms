<?php


    function search(array $arr, int $aim): ?int
    {
        if (empty($arr)) {
            return null;
        }

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

        return null;
    }


$arr = [];
echo search($arr, 1) . "\n";

$arr = [];
echo search($arr, 1) . "\n";



