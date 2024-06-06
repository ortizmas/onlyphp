<?php
// spl_autoload_register(function ($class) {
//     $prefix = 'PhpOffice\\PhpSpreadsheet\\';
//     $base_dir = __DIR__ . '/PhpSpreadsheet/';

//     $len = strlen($prefix);
//     if (strncmp($prefix, $class, $len) !== 0) {
//         return;
//     }

//     $relative_class = substr($class, $len);
//     $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

//     if (file_exists($file)) {
//         require $file;
//     }
// });

// Autoloader function to include PhpSpreadsheet and PSR classes
spl_autoload_register(function ($class) {
    $prefixes = [
        'PhpOffice\\PhpSpreadsheet\\' => __DIR__ . '/PhpSpreadsheet/',
        'Psr\\SimpleCache\\' => __DIR__ . '../../../psr-simple-cache/src/',
        'Psr\\Container\\' => __DIR__ . '../../../psr-container/src/',
    ];

    foreach ($prefixes as $prefix => $base_dir) {
        $len = strlen($prefix);
        
        if (strncmp($prefix, $class, $len) !== 0) {
            continue;
        }

        $relative_class = substr($class, $len);
        
        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

        if (file_exists($file)) {
            require $file;
            return;
        }
    }
});
