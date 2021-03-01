<?php

namespace Conference\Zoom\Exception;

use InvalidArgumentException;

final class ComponentMissing extends InvalidArgumentException implements ConferenceExceptionInterface
{
    public static function create(string $componentName): ComponentMissing
    {
        return new self("Please install missing component $componentName.");
    }
}
