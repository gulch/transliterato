<?php

namespace gulch\Transliterato\Scheme;

use gulch\Transliterato\Contract\SchemeInterface;

class UkrToRusKeyboardLayout extends AbstractPatternScheme implements SchemeInterface
{
    protected const PATTERN = [
        'і' => 'ы',
        'ї' => 'ъ',
        'є' => 'э',

        'І' => 'Ы',
        'Ї' => 'Ъ',
        'Є' => 'Э',
    ];
}
