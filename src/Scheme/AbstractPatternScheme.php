<?php

namespace gulch\Transliterato\Scheme;

abstract class AbstractPatternScheme
{
    public function getSearchData(): array
    {
        return \array_keys(static::PATTERN);
    }

    public function getReplaceData(): array
    {
        return \array_values(static::PATTERN);
    }
}