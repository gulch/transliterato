<?php

namespace gulch\Transliterato\Tests;

use gulch\Transliterato\Processor;
use gulch\Transliterato\Scheme\EngToUkrKeyboardLayout;
use gulch\Transliterato\Scheme\RusToUkrKeyboardLayout;
use gulch\Transliterato\Scheme\UkrToEngKeyboardLayout;
use gulch\Transliterato\Scheme\UkrToRusKeyboardLayout;
use PHPUnit\Framework\TestCase;

class LayoutSchemeTest extends TestCase
{
    public function testEngtoUkrLayoutScheme()
    {
        $processor = new Processor(new EngToUkrKeyboardLayout());

        $this->assertSame(
            'йцукенгшщзхїфівапролджєячсмитьбю',
            $processor->process('qwertyuiop[]asdfghjkl;\'zxcvbnm,.')
        );
    }

    public function testUkrToEngLayoutScheme()
    {
        $processor = new Processor(new UkrToEngKeyboardLayout());

        $this->assertSame(
            'qwertyuiop[]asdfghjkl;\'zxcvbnm,.',
            $processor->process('йцукенгшщзхїфівапролджєячсмитьбю')
        );
    }

    public function testRusToUkrLayoutScheme()
    {
        $processor = new Processor(new RusToUkrKeyboardLayout());

        $this->assertSame(
            'їіє',
            $processor->process('ъыэ')
        );
    }

    public function testUkrToRusLayoutScheme()
    {
        $processor = new Processor(new UkrToRusKeyboardLayout());

        $this->assertSame(
            'ъыэ',
            $processor->process('їіє')
        );
    }
}
