<?php
declare(strict_types=1);

namespace Zestic\Contracts\Authentication;

use Zestic\Contracts\Person\PersonInterface;

interface AuthenticationResponseInterface
{
    public function response(PersonInterface $person, string $jwt, int $expiresAt): array;
}
