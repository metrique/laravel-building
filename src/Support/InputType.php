<?php

namespace Metrique\Building\Support;

final class InputType
{
    const HIDDEN = 0;
    const TEXT = 1;
    const NUMBER = 2;
    const EMAIL = 3;
    const DATE = 4;
    const DATETIME = 5;
    const TIME = 6;
    const TEXTAREA = 7;
    const CHECKBOX = 8;
    const FILE = 9;
    const IMAGE = 10;
    const MARKDOWN = 11;

    public static function type(int $enum)
    {
        $types = [
            'hidden',
            'text',
            'number',
            'email',
            'date-local',
            'datetime-local',
            'time-local',
            'textarea',
            'checkbox',
            'file',
            'image',
            'markdown',
        ];

        return $types[$enum];
    }
}
