<?php

namespace gulch\Transliterato;

use gulch\Transliterato\Contract\SchemeInterface;

class BatchProcessor
{

    /**
     * @var array|SchemeInterface[]
     */
    private array $schemes;

    public function __construct(SchemeInterface ...$schemes)
    {
        $this->schemes = $schemes;
    }

    public function process(string $text): array
    {
        $result = [];

        foreach ($this->schemes as $scheme) {
            $result[] = (new Processor($scheme))->process($text);
        }

        return $result;
    }
}
