<?php

function fibonacci(int $n): int
{
    static $cache = [];

    if (1 >= $n) {
        return $n;
    } elseif (isset($cache[$n])) {
        return $cache[$n];
    }

    $cache[$n] = fibonacci($n - 1) + fibonacci($n - 2);

    return $cache[$n];
}

function printInt(int $n): void
{
    echo $n . "\n";
}



printInt(fibonacci(0)); # 0

printInt(fibonacci(1)); # 1

printInt(fibonacci(2)); # 1

printInt(fibonacci(3)); # 2

printInt(fibonacci(4)); # 3

printInt(fibonacci(5)); # 5

printInt(fibonacci(6)); # 8

printInt(fibonacci(7)); # 13

printInt(fibonacci(8)); # 21

printInt(fibonacci(10)); # 55