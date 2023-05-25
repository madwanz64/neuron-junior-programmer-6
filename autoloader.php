<?php

spl_autoload_register(function ($className) {
    $baseDir = __DIR__ . "\\";
    $filePath = $baseDir . $className . '.php';

    if (file_exists($filePath)) {
        require $filePath;
    }
});