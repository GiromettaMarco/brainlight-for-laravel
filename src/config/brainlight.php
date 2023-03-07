<?php

return[

    'cacheDir' => env('BRAINLIGHT_CACHE_DIR', storage_path('brain')),
    'partialsDir' => env('BRAINLIGHT_PARTIALS_DIR', null),
    'extension' => env('BRAINLIGHT_EXTENSION', 'brain'),
    'escapeFlags' => env('BRAINLIGHT_ESCAPE_FLAGS', ENT_QUOTES),
    'escapeEncoding' => env('BRAINLIGHT_ESCAPE_ENCODING', 'UTF-8'),
    'escapeDoubleEncode' => env('BRAINLIGHT_ESCAPE_DOUBLE_ENCODE', true),

];
