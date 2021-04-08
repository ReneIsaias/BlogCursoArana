<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /* Este metodo nos permite validar si el usuario que acceda a un post es el quien lo creo (solo para edita, actulizar y borrar) */
    public function author(User $user, Post $post)
    {
        if($user->id == $post->user_id)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /* Este metod es para validar si el post esta en modo de borrador o prueba, y permiteir si se puede ver o no */
    public function published(?User $user, Post $post)
    {
        if($post->status == 2)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
