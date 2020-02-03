<?php

namespace gulch\Transliterato\Processor;

use gulch\Transliterato\Contract\ProcessorInterface;
use gulch\Transliterato\Contract\SchemeInterface;

class Transliterator implements ProcessorInterface
{
    /**
     * @var SchemeInterface
     */
    private SchemeInterface $scheme;

    public function __construct(SchemeInterface $scheme)
    {
        $this->scheme = $scheme;
    }

    public function process(string $text): string
    {
        return \str_replace(
            $this->scheme->getSearchData(),
            $this->scheme->getReplaceData(),
            $text
        );
    }
}