<?php

namespace App\Services\AdminPanel\Acrtical;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AcrticalService{

    public function store($request)
    {
        echo 'service->$request';
    }

}