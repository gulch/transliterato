<?php

namespace gulch\Transliterato\Tests;

use gulch\Transliterato\Processor;
use gulch\Transliterato\Scheme\CyrToLatinTranslit;
use PHPUnit\Framework\TestCase;

class TranslitSchemeTest extends TestCase
{
    public function testCyrToLatinTranslitScheme()
    {
        $test_data = 'йцукенгшщзхїфівапролджєячсмитьбюъыэё';
        $result_data = 'ytsukengshschzhyifivaproldzhyeyachsmitbyuieyo';

        $processor = new Processor(new CyrToLatinTranslit());

        $this->assertSame(
            $result_data,
            $processor->process($test_data)
        );

        $this->assertSame(
            \mb_strtoupper($result_data),
            $processor->process(\mb_strtoupper($test_data))
        );
    }
}
