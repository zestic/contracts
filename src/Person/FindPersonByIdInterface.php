<?php
declare(strict_types=1);

namespace Zestic\Contracts\Person;

interface FindPersonByIdInterface
{
    public function find($id): ?PersonInterface;
}
