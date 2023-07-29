<?php

namespace Bi\Traits\Enum;

trait ArrayableEnumTrait
{
    public static function toArray()
    {
        return array_map(fn(self $item) => $item->name, self::cases());
    }
}
