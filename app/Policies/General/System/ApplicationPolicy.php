<?php

namespace App\Policies\General\System;

use App\Models\General\System\Application;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ApplicationPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Application $application): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Application $application): bool
    {
    }

    public function delete(User $user, Application $application): bool
    {
    }

    public function restore(User $user, Application $application): bool
    {
    }

    public function forceDelete(User $user, Application $application): bool
    {
    }
}
