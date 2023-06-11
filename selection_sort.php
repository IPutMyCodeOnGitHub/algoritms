<?php

function findSmallest(array $arr): int
{
    $smallestIdx = array_key_first($arr);
    $smallest = $arr[$smallestIdx];

    foreach($arr as $key => $item) {
        if ($item < $smallest) {
            $smallest = $item;
            $smallestIdx = $key;
        }
    }

    return $smallestIdx;
}

function selectionSort(array $arr): array
{
    $sortedArray = [];

    while(!empty($arr)) {
        $itemIdx = findSmallest($arr);
        $sortedArray[] = $arr[$itemIdx];
        unset($arr[$itemIdx]);
    }

    return $sortedArray;
}

function printArray(array $arr): void
{
    foreach($arr as $item) {
        echo $item . ' ';
    }

    echo "\n";
}

$arr = [];
echo printArray(selectionSort($arr)); // пустота

$arr = [ 2 ];
echo printArray(selectionSort($arr)); // 2

$arr = [ 2, 1 ];
echo printArray(selectionSort($arr)); // 1 2

$arr = [ 2, 1, 3, 9, 5, 16, 7, 8, 15 ];
echo printArray(selectionSort($arr)); // 1 2 3 5 7 8 9 15 16

$arr = [ 1, 5, 7 ];
echo printArray(selectionSort($arr)); // 1 5 7 

$arr = [ 9, 8, 7, 10 ];
echo printArray(selectionSort($arr)); // 7 8 9 10



