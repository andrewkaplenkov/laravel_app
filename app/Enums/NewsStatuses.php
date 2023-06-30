<?php

namespace App\Enums;

enum NewsStatuses: string
{
    case DRAFT = 'draft';
    case BLOCKED = 'blocked';
    case PUBLISHED = 'published';
    case PENDING = 'pending';

    public static function all(): array
    {
        return [
            self::DRAFT->value,
            self::BLOCKED->value,
            self::PUBLISHED->value,
            self::PENDING->value
        ];
    }
}
