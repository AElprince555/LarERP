<?php

namespace App\Policies\General\System;

use App\Models\General\System\Method;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MethodPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Method $method): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Method $method): bool
    {
    }

    public function delete(User $user, Method $method): bool
    {
    }

    public function restore(User $user, Method $method): bool
    {
    }

    public function forceDelete(User $user, Method $method): bool
    {
    }
}
