<?php

namespace Bi\Helpers\Traits\Enum;

trait ArrayableEnumTrait
{
    public static function toArray(bool $assoc = false)
    {
        if ($assoc) {
            $keys = array_map(fn(self $item) => $item->name, self::cases());
            $values = array_map(fn(self $item) => isset($item->value) ? $item->value : $item->name, self::cases());
            return array_combine($keys, $values);
        }

        return array_map(fn(self $item) => isset($item->value) ? $item->value : $item->name, self::cases());
    }


    public static function toKeyValueArray()
    {
        return array_map(fn(self $item) => ['key' => $item->name, 'value' => isset($item->value) ? $item->value : $item->name], self::cases());
    }
}
