<?php
declare(strict_types=1);

namespace Zestic\Contracts\Jwt;

interface DecodeJwtTokenInterface
{
    public function decode(string $jwt): array;
}
