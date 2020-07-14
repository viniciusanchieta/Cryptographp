<?php
    $variables = [
    'key' => 'F6HgQwBsbtsBPC1Fz2/FfGWrHs0hNdvNOCtIfuy99mzBSjhUnq5ktUXYoZBo/RxtJ1DvnmrTMHdbEGq7JsNqIQ==',
    'cipher'=> 'AES-128-CBC'
    ];

    foreach ($variables as $key => $value) {
    putenv("$key=$value");
    }

    if (!function_exists('env')) {
    function env($key, $default = null)
    {
        $value = getenv($key);

        if ($value === false) {
            return $default;
        }

        return $value;
    }
    }
