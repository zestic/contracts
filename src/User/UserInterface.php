<?php
declare(strict_types=1);

namespace Zestic\Contracts\User;

use Mezzio\Authentication\UserInterface as MezzioInterface;

interface UserInterface extends MezzioInterface
{
    public function getPersonId();
}
