<?php

declare(strict_types=1);

$map = include __DIR__ . '/file_map.php';

foreach ($map as $source => $targets) {
    if (is_string($targets)) {
        $targets = [$targets];
    }

    foreach ($targets as $target) {
        $directory = pathinfo($target, PATHINFO_DIRNAME);
        if (!@mkdir($directory, 0777, true) && !is_dir($directory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $directory));
        }
        copy($source, $target);
    }
}
