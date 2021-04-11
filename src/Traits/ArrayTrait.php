<?php

namespace PheRum\BBCode\Traits;

trait ArrayTrait
{
    /**
     * Filters all parsers that you don´t want
     *
     * @param array $parsers An array of all parsers
     * @param array $only    Chosen parsers
     * @return array parsers
     */
    private function arrayOnly(array $parsers, array $only): array
    {
        return array_intersect_key($parsers, array_flip($only));
    }

    /**
     * Removes the parsers that you don´t want
     *
     * @param array $parsers An array of all parsers
     * @param array $except  Parsers to exclude
     * @return array parsers
     */
    private function arrayExcept(array $parsers, array $except): array
    {
        return array_diff_key($parsers, array_flip($except));
    }
}
