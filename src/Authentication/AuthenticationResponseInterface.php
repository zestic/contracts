<?php
declare(strict_types=1);

namespace Zestic\Contracts\Authentication;

use Zestic\Contracts\User\UserInterface;

interface AuthenticationResponseInterface
{
    public function response(UserInterface $user, string $jwt, int $expiresAt): array;
}
