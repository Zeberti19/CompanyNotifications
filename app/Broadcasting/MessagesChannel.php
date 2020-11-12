<?php

namespace App\Broadcasting;

use App\Models\User;

class MessagesChannel
{
    /**
     * @param User $user
     * @param int $task_id
     * @return bool
     */
    public function join(User $user, int $task_id)
    {
        //if ($user->)
        return true;
    }
}
