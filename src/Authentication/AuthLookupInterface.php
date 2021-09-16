<?php
declare(strict_types=1);

namespace Zestic\Contracts\Authentication;

use Mezzio\Authentication\UserInterface as MezzioInterface;

interface AuthLookupInterface extends MezzioInterface
{
    public function getUserId();
}
