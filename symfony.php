<?php

require_once __DIR__ . '/vendor/autoload.php';

$start=hrtime(true);

$dir = __DIR__.'/vendor/';

$finder = new \Symfony\Component\Finder\Finder();
$finder->ignoreDotFiles(true)->ignoreVCS(false);
$finder->files()->in($dir);

$i = 0;
foreach ($finder as $file) {
    $i++;
}

$end=hrtime(true);
$eta=$end-$start;
printf("Elapsed time: %d ms\n", $eta/1000000);


printf("Num files %d\n", $i);
printf(
    'Used memory: %s'.PHP_EOL,
    BytesHelper::bytes(memory_get_peak_usage(true)),
);
