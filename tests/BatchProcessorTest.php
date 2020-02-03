<?php

namespace gulch\Transliterato\Tests;

use gulch\Transliterato\BatchProcessor;
use gulch\Transliterato\Scheme\UkrToEngKeyboardLayout;
use gulch\Transliterato\Scheme\UkrToRusKeyboardLayout;
use PHPUnit\Framework\TestCase;

class BatchProcessorTest extends TestCase
{
    public function test()
    {
        $processor = new BatchProcessor(
            new UkrToEngKeyboardLayout(),
            new UkrToRusKeyboardLayout()
        );

        $this->assertEquals(
            $processor->process('Руддщ фдд еру цщкдві!'),
            [
                'Hello all the worlds!',
                'Руддщ фдд еру цщкдвы!'
            ]
        );
    }
}