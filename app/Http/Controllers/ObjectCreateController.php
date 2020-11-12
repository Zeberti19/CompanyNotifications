<?php

namespace App\Http\Controllers;

use App\Events\NewsCreated;
use App\Events\ProductCreated;
use App\Models\NewCompany;
use App\Models\ProductCompany;

class ObjectCreateController extends Controller
{
    public function productCreate()
    {
        $ProductCompany=new ProductCompany();
        $ProductCompany->name= 'Name №' .rand(0,1000000);
        $ProductCompany->price= rand(0,100000) *0.01;

        $ProductCompany->save();
        event(new ProductCreated());
        broadcast(new ProductCreated())->toOthers();
    }

    public function newsCreate()
    {
        $NewCompany=new NewCompany();
        $NewCompany->title= 'Title №' .rand(0,1000000);
        $NewCompany->content= 'Content №' .rand(0,1000000);

        $NewCompany->save();

        event(new NewsCreated());
        broadcast(new NewsCreated())->toOthers();
    }
}
