<?php
declare(strict_types=1);

namespace Tests\EoneoPay\Utils\Exceptions;

use Tests\EoneoPay\Utils\Stubs\Exceptions\NotFoundExceptionStub;
use Tests\EoneoPay\Utils\TestCase;

class NotFoundExceptionTest extends TestCase
{
    /**
     * Exception should return valid codes.
     */
    public function testGettersFromBaseExceptionInterface(): void
    {
        $this->processExceptionCodesTest(new NotFoundExceptionStub(), 1200, 0, 404);
    }
}
