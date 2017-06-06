<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ManufacturerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can create manufacturers.
     *
     * @param  \App\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can update the manufacturer.
     *
     * @param  \App\User $user
     * @param  \App\Manufacturer $manufacturer
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can delete the manufacturer.
     *
     * @param  \App\User $user
     * @param  \App\Manufacturer $manufacturer
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->role == 'admin';
    }
}
