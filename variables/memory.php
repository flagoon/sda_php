<?php

$allocatedMemory = memory_get_usage();

if (640 > ($allocatedMemory / 1024)) {
    echo "640 KB wystarczy każdemu.", PHP_EOL;
}

echo $allocatedMemory, PHP_EOL;