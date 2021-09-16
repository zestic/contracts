<?php
declare(strict_types=1);

namespace Zestic\Contracts\User;

interface CreateUserInterface
{
    public function create($data = null): UserInterface;
}
