<?php

declare(strict_types=1);

namespace App\Enums;


enum UserPlan: int
{
    case FREE = 0;
    case BASIC = 1;
    case PREMIUM = 2;
}
