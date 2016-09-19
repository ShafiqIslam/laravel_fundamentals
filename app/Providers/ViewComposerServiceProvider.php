<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Article;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->_composeFooter();
    }

    private function _composeFooter() {
        /*view()->composer('partials._footer', function($view) {
            $view->with('latest', Article::latest()->published()->first());
        });*/
        view()->composer('partials._footer', 'App\Composers\FooterComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
