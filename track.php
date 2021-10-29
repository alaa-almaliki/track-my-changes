<?php

declare(strict_types=1);

$map = include __DIR__ . '/file_map.php';

foreach ($map as $source => $target) {
    copy($source, $target);
}
