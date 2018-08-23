<?php

namespace App\Http\Composers;


use App\Submit;
use Illuminate\Contracts\View\View;

class DealsComposer
{
    public function compose(View $view)
    {
        $view->with('submit', Submit::all());
    }
}