<?php

namespace App\Http\Middleware;

use Closure;
use Menu;
use View;

class MenuMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      Menu::make('primary', function($menu) {
            $menu->add('Home', array('route'  => 'homepage',  'class' => 'navbar-home', 'id' => 'home'))->link->secure();
            $menu->add('About',    array('url'  => 'about', 'class' => 'navbar-about'))->link->secure();
            $menu->add('Parties',    array('url'  => 'parties', 'class' => 'navbar-about'))->link->secure();
            $menu->add('Contact',  'contact')->link->secure();
        });

        return $next($request);
    }
}
