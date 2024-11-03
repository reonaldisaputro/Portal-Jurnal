<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Transportation;
use Illuminate\Auth\Access\HandlesAuthorization;

class TransportationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_transportation');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Transportation $transportation): bool
    {
        return $user->can('view_transportation');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_transportation');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Transportation $transportation): bool
    {
        return $user->can('update_transportation');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Transportation $transportation): bool
    {
        return $user->can('delete_transportation');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_transportation');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Transportation $transportation): bool
    {
        return $user->can('force_delete_transportation');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_transportation');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Transportation $transportation): bool
    {
        return $user->can('restore_transportation');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_transportation');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Transportation $transportation): bool
    {
        return $user->can('replicate_transportation');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_transportation');
    }
}
