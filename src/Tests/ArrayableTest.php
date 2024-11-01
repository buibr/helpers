<?php

namespace Bi\Helpers\Tests;

use PHPUnit\Framework\TestCase;
use Bi\Helpers\Tests\Data\TestEnum;

final class ArrayableTest extends TestCase
{
    public function testCanBeCreatedFromValidEmail(): void
    {
        $this->assertEquals([1, 2], TestEnum::toArray(false));
    }
}
