<?php

namespace gulch\Transliterato\Contract;

interface SchemeInterface
{
    public function getSearchData(): array;
    public function getReplaceData(): array;
}