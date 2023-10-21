<?php

require_once __DIR__ . '/vendor/autoload.php';

$start=hrtime(true);

$dir = __DIR__.'/vendor/';

$useSplFileInfo = $argc === 2 && $argv[1] === 'spl';

$flags = RecursiveDirectoryIterator::SKIP_DOTS;

if (!$useSplFileInfo) {
   $flags |= RecursiveDirectoryIterator::CURRENT_AS_PATHNAME;
}
$iterator = new RecursiveDirectoryIterator($dir, $flags);
$iterator = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::SELF_FIRST);

$i = 0;
foreach ($iterator as $file) {
    if (is_dir($file)) {
        continue;
    }
    $i++;
}

$end=hrtime(true);
$eta=$end-$start;
printf("Elapsed time: %d ms\n", $eta/1000000);

printf("CURRENT_AS_PATHNAME: %s\n", $useSplFileInfo ? 'yes' : 'no');
printf("Num files %d\n", $i);
printf(
    'Used memory: %s'.PHP_EOL,
    BytesHelper::bytes(memory_get_peak_usage(true)),
);
