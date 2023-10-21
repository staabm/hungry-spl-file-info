<?php

require_once __DIR__ . '/vendor/autoload.php';

$dir = __DIR__;

$finder = new \Symfony\Component\Finder\Finder();
$finder->in($dir);

$i = 0;
foreach ($finder as $file) {
    $i++;
}

printf("Num files %d\n", $i);
printf(
    'Used memory: %s'.PHP_EOL,
    BytesHelper::bytes(memory_get_peak_usage(true)),
);
