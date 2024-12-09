<?php

declare(strict_types=1);

namespace App\Enums;


enum UserRole: string
{
    case ADMIN = 'admin';
    case EDITOR = 'editor';
    case SUB = 'subscriber';
}
