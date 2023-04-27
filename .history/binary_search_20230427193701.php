<?php


    function search(array $arr, int $aim): ?int
    {
        if (empty($arr)) {
            return null;
        }

        $from = 0; 
        $to = count($arr) - 1; //10

        while ($from <= $to) 
        {
            $mid = ($from + $to) / 2; //5   (0+4)/2 = 2

            echo $mid

            if ($aim === $arr[$mid]) { // 3 != 16   3 != 9
                return $mid;
            }

            if ($aim < $arr[$mid]) { // 3 < 16  3 < 9
                $to = $mid - 1; // $to = 5-1 = 4    $to = 2-1 = 1;
            } else {
                $from = $mid + 1;
            }
        }

        return null;
    }


/*$arr = [];
echo search($arr, 1) . "\n"; // none

$arr = [1];
echo search($arr, 1) . "\n"; // 0

$arr = [1, 3];
echo search($arr, 1) . "\n"; // 0

$arr = [1, 3, 9];
echo search($arr, 3) . "\n"; // 1*/

$arr = [1, 3, 9, 10, 15, 16, 21, 25, 40, 101, 118];
echo search($arr, 3) . "\n"; // 1

/*$arr = [1, 3, 9, 10, 15, 16, 21, 25, 40, 101, 118];
echo search($arr, 100) . "\n"; // none

$arr = [1, 3, 9, 10, 15, 16, 21, 25, 40, 101, 118];
echo search($arr, 118) . "\n"; // 10*/



