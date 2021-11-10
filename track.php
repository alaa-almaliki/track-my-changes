<?php

declare(strict_types=1);

$map = include __DIR__ . '/file_map.php';

foreach ($map as $source => $targets) {
    if (is_string($targets)) {
        $targets = [$targets];
    }

    foreach ($targets as $target) {
        copy($source, $target);
    }
}
