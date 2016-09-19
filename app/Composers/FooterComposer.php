<?php

namespace App\Composers;

use Illuminate\Contracts\View\View;

use App\Models\Article;

class FooterComposer
{
    public function compose(View $view)
    {
        return $view->with('latest', Article::latest()->published()->first());;
    }
}
