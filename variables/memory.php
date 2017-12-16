<?php

$allocatedMemory = memory_get_usage();

if (($allocatedMemory / 1024) < 640) {
    echo "640 KB wystarczy każdemu.", PHP_EOL;
}

echo $allocatedMemory, PHP_EOL;