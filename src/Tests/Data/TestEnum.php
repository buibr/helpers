<?php

namespace Bi\Helpers\Tests\Data;

use Bi\Helpers\Traits\Enum\ArrayableEnumTrait;

enum TestEnum: int
{
    use ArrayableEnumTrait;

    case ACTIVE = 1;
    case INACTIVE = 2;
}
