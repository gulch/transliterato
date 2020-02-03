<?php

namespace gulch\Transliterato\Scheme;

use gulch\Transliterato\Contract\SchemeInterface;

class RusToUkrKeyboardLayout extends AbstractPatternScheme implements SchemeInterface
{
    protected const PATTERN = [
        'ы' => 'і',
        'ъ' => 'ї',
        'э' => 'є',
    ];
}