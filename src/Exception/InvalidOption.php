<?php

namespace Conference\Zoom\Exception;

use InvalidArgumentException;

final class InvalidOption extends InvalidArgumentException implements ConferenceExceptionInterface
{
    public static function create(string $name, string $expected = null): InvalidOption
    {
        $message = "Option '$name' is invalid";
        if (null !== $expected) {
            $message .= ', expected value: '.$expected;
        }

        return new self($message);
    }
}
