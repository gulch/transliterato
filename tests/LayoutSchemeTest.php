<?php

namespace gulch\Transliterato\Tests;

use gulch\Transliterato\Processor\Transliterator;
use gulch\Transliterato\Scheme\EngToUkrKeyboardLayout;
use gulch\Transliterato\Scheme\RusToUkrKeyboardLayout;
use gulch\Transliterato\Scheme\UkrToEngKeyboardLayout;
use gulch\Transliterato\Scheme\UkrToRusKeyboardLayout;
use PHPUnit\Framework\TestCase;

class LayoutSchemeTest extends TestCase
{
    public function testEngtoUkrLayoutScheme()
    {
        $processor = new Transliterator(new EngToUkrKeyboardLayout());

        $this->assertSame(
            'йцукенгшщзхїфівапролджєячсмитьбю',
            $processor->process('qwertyuiop[]asdfghjkl;\'zxcvbnm,.')
        );
    }

    public function testUkrToEngLayoutScheme()
    {
        $processor = new Transliterator(new UkrToEngKeyboardLayout());

        $this->assertSame(
            'qwertyuiop[]asdfghjkl;\'zxcvbnm,.',
            $processor->process('йцукенгшщзхїфівапролджєячсмитьбю')
        );
    }

    public function testRusToUkrLayoutScheme()
    {
        $processor = new Transliterator(new RusToUkrKeyboardLayout());

        $this->assertSame(
            'їіє',
            $processor->process('ъыэ')
        );
    }

    public function testUkrToRusLayoutScheme()
    {
        $processor = new Transliterator(new UkrToRusKeyboardLayout());

        $this->assertSame(
            'ъыэ',
            $processor->process('їіє')
        );
    }
}
