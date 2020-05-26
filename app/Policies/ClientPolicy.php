<?php

namespace App\Policies;

use App\Models\Client;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return !is_null($user->systemuser);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Client  $client
     * @return mixed
     */
    public function view(User $user, Client $client)
    {
        if (!is_null($user->systemuser)) {
            return !is_null($user->systemuser);
        } elseif (!is_null($client)) {
            return $user->id == $client->user_id;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return !is_null($user->systemuser);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Client  $client
     * @return mixed
     */
    public function update(User $user, Client $client)
    {
        if (!is_null($user->systemuser)) {
            return !is_null($user->systemuser);
        } elseif (!is_null($client)) {
            return $user->id == $client->user_id;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Client  $client
     * @return mixed
     */
    public function delete(User $user, Client $client)
    {
        return !is_null($user->systemuser);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Client  $client
     * @return mixed
     */
    public function restore(User $user, Client $client)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Client  $client
     * @return mixed
     */
    public function forceDelete(User $user, Client $client)
    {
        //
    }
}
