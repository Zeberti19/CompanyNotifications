<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function productsSubscribe()
    {
        $User=User::findOrFail(Auth::id());
        $User->products_subscribed=true;
        $User->save();

        return 'Вы подписались на оповещие о продуктах!';
    }

    public function newsSubscribe()
    {
        $User=User::findOrFail(Auth::id());
        $User->news_subscribed=true;
        $User->save();

        return 'Вы подписались на новости!';
    }
}
