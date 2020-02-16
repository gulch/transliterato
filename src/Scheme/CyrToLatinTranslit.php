<?php

namespace gulch\Transliterato\Scheme;

use gulch\Transliterato\Contract\SchemeInterface;

class CyrToLatinTranslit extends AbstractPatternScheme implements SchemeInterface
{
    protected const PATTERN = [
        'й' => 'y',
        'ц' => 'ts',
        'у' => 'u',
        'к' => 'k',
        'е' => 'e',
        'н' => 'n',
        'г' => 'g',
        'ш' => 'sh',
        'щ' => 'sch',
        'з' => 'z',
        'х' => 'h',
        'ї' => 'yi',
        'ъ' => '',


        'ф' => 'f',
        'і' => 'i',
        'ы' => 'i',
        'в' => 'v',
        'а' => 'a',
        'п' => 'p',
        'р' => 'r',
        'о' => 'o',
        'л' => 'l',
        'д' => 'd',
        'ж' => 'zh',
        'є' => 'ye',
        'э' => 'e',

        'я' => 'ya',
        'ч' => 'ch',
        'с' => 's',
        'м' => 'm',
        'и' => 'i',
        'т' => 't',
        'ь' => '',
        'б' => 'b',
        'ю' => 'yu',

        'ё' => 'yo',

        'Й' => 'Y',
        'Ц' => 'TS',
        'У' => 'U',
        'К' => 'K',
        'Е' => 'E',
        'Н' => 'N',
        'Г' => 'G',
        'Ш' => 'SH',
        'Щ' => 'SCH',
        'З' => 'Z',
        'Х' => 'H',
        'Ї' => 'YI',
        'Ъ' => '',

        'Ф' => 'F',
        'І' => 'I',
        'Ы' => 'I',
        'В' => 'V',
        'А' => 'A',
        'П' => 'P',
        'Р' => 'R',
        'О' => 'O',
        'Л' => 'L',
        'Д' => 'D',
        'Ж' => 'ZH',
        'Є' => 'YE',
        'Э' => 'E',

        'Я' => 'YA',
        'Ч' => 'CH',
        'С' => 'S',
        'М' => 'M',
        'И' => 'I',
        'Т' => 'T',
        'Ь' => '',
        'Б' => 'B',
        'Ю' => 'YU',

        'Ё' => 'YO',
    ];
}
