<?php

namespace Bi\Helpers\Traits\Enum;

trait IsEqualTrait
{
    public function isEqual(\BackedEnum|\IntBackedEnum|\StringBackedEnum|\UnitEnum $role): bool
    {
        return $this->value === $role->value;
    }
}
