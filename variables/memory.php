<?php

$allocatedMemory = memory_get_usage();

if (240 > ($allocatedMemory / 1024)) {
    echo "640 KB wystarczy każdemu.", PHP_EOL;
} else {
    echo "Potrzebujesz \033[31m", round((($allocatedMemory/1024)/1024), 2), "MB.\033[0m", PHP_EOL;
}

echo "Używasz: \033[33m", (int)($allocatedMemory / 1024) , "KB\033[0m i \033[33m", ($allocatedMemory % 1024), "B\033[0m." , PHP_EOL;