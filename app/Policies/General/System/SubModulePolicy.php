<?php

namespace App\Policies\General\System;

use App\Models\General\System\SubModule;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubModulePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, SubModule $subModule): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, SubModule $subModule): bool
    {
    }

    public function delete(User $user, SubModule $subModule): bool
    {
    }

    public function restore(User $user, SubModule $subModule): bool
    {
    }

    public function forceDelete(User $user, SubModule $subModule): bool
    {
    }
}
