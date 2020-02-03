<?php

namespace gulch\Transliterato;

use gulch\Transliterato\Contract\SchemeInterface;

class Processor
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