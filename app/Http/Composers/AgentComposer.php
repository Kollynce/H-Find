<?php

namespace App\Http\Composers;


use App\Submit;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class AgentComposer
{
    public function compose(View $view)
    {
        $id = Auth::user()->id;
        $submits = Submit::whereUserId($id)->get();
        $view->with('submits', $submits);
    }
}