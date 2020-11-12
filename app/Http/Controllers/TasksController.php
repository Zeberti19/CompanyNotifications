<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

use App\Events\ChatMessage;
use App\Models\Comment;

class TasksController extends Controller
{
    public function comment(Request $request)
    {
        /**
         * Валидация. Добавляю сообщение в базу,
         * получаю модель Comment $comment с сообщением
         */
        $comment = new Comment();
        $comment->text= rand(0,1000) ." " .rand(0,1000) ." " .rand(0,1000);
        $comment->save();
        event(new ChatMessage($comment)); // Это для примера. Отправка сообщения всем активным пользователям канала
        broadcast(new ChatMessage($comment))->toOthers(); // Отправляю сообщение всем, кроме текущего пользователя

        //return view('main');
    }
}

