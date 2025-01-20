<?php

namespace App\Enums;

use Carbon\Traits\Options;

enum UserRole: string
{

    case Admin = 'admin';
    case Moderator = 'moderator';
    case User = 'user';
}