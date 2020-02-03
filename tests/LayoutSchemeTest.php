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
    public function testEngToUkrLayoutScheme()
    {
        $processor = new Processor(new EngToUkrKeyboardLayout());

        $this->assertSame(
            'йЙцЦуУкКеЕнНгГшШщЩзЗхХїЇфФіІвВаАпПрРоОлЛдДжЖєЄяЯчЧсСмМиИтТьЬбБюЮ',
            $processor->process('qQwWeErRtTyYuUiIoOpP[{]}aAsSdDfFgGhHjJkKlL;:\'"zZxXcCvVbBnNmM,<.>')
        );
    }

    public function testUkrToEngLayoutScheme()
    {
        $processor = new Processor(new UkrToEngKeyboardLayout());

        $this->assertSame(
            'qQwWeErRtTyYuUiIoOpP[{]}aAsSdDfFgGhHjJkKlL;:\'"zZxXcCvVbBnNmM,<.>',
            $processor->process('йЙцЦуУкКеЕнНгГшШщЩзЗхХїЇфФіІвВаАпПрРоОлЛдДжЖєЄяЯчЧсСмМиИтТьЬбБюЮ')
        );
    }

    public function testRusToUkrLayoutScheme()
    {
        $processor = new Processor(new RusToUkrKeyboardLayout());

        $this->assertSame(
            'їієЇІЄ',
            $processor->process('ъыэЪЫЭ')
        );
    }

    public function testUkrToRusLayoutScheme()
    {
        $processor = new Processor(new UkrToRusKeyboardLayout());

        $this->assertSame(
            'ъыэЪЫЭ',
            $processor->process('їієЇІЄ')
        );
    }
}
