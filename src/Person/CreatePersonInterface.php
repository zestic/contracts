<?php
declare(strict_types=1);

namespace Zestic\Contracts\Person;

interface CreatePersonInterface
{
    public function create($data = null): PersonInterface;
}
