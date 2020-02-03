<?php

namespace gulch\Transliterato\Tests;

use gulch\Transliterato\Processor\Transliterator;
use gulch\Transliterato\Scheme\UkrToEngKeyboardLayout;
use PHPUnit\Framework\TestCase;

class UkrToEngLayoutSchemeTest extends TestCase
{
    public function testUkrToEngLayoutScheme()
    {
        $processor = new Transliterator(new UkrToEngKeyboardLayout());

        $this->assertSame(
            'qwertyuiop[]asdfghjkl;\'zxcvbnm,.',
            $processor->process('йцукенгшщзхїфівапролджєячсмитьбю')
        );
    }
}
