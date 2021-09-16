<?php
declare(strict_types=1);

namespace Zestic\Contracts\User;

interface FindUserByIdInterface
{
    public function find($id): ?UserInterface;
}
