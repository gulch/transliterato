<?php

namespace gulch\Transliterato\Contract;

interface ProcessorInterface
{
    public function process(string $text): string;
}