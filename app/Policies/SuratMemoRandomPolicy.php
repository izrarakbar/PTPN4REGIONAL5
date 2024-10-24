<?php

namespace App\Policies;

use App\Models\User;
use App\Models\SuratMemoRandom;
use Illuminate\Auth\Access\HandlesAuthorization;

class SuratMemoRandomPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_surat::memo::random');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, SuratMemoRandom $suratMemoRandom): bool
    {
        return $user->can('view_surat::memo::random');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_surat::memo::random');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, SuratMemoRandom $suratMemoRandom): bool
    {
        return $user->can('update_surat::memo::random');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, SuratMemoRandom $suratMemoRandom): bool
    {
        return $user->can('delete_surat::memo::random');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_surat::memo::random');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, SuratMemoRandom $suratMemoRandom): bool
    {
        return $user->can('force_delete_surat::memo::random');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_surat::memo::random');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, SuratMemoRandom $suratMemoRandom): bool
    {
        return $user->can('restore_surat::memo::random');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_surat::memo::random');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, SuratMemoRandom $suratMemoRandom): bool
    {
        return $user->can('replicate_surat::memo::random');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_surat::memo::random');
    }
}
