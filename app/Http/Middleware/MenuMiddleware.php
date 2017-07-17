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
            $menu->add('Home', array('route'  => 'homepage',  'class' => 'navbar-home', 'id' => 'home'));
            $menu->add('About',    array('url'  => 'about', 'class' => 'navbar-about'));
            $menu->add('Services', 'services');
            $menu->add('Contact',  'contact')->data('color', 'green');
        });


            // $menu->add('Home', '/');
            // $menu->add('Sewing Machines', getLang() . '/sewing-machines/qnique');
            // $menu->add('Machine Frames', getLang() . '/machine-frames');
            // $menu->add('Hand Quilting', getLang() . '/hand-quilting');
            // $menu->add('Automated', getLang() . '/automation/qct');
            // $menu->add('truecut', getLang() . '/');
            // $menu->add('Community', getLang() . '/community');
            // $shop = $menu->add('Shop', getLang() . '/shop', ['class' => 'sf-menu']);
            //             $shop->add('Cart', getLang() . '/shop/cart');
            //             $shop->add('Checkout', getLang() . '/shop/checkout');
            // $menu->add('Blog', getLang() . '/articles');
            // $menu->add('Contact', getLang() . '/contact');
            // $menu->add('WHAT WE DO', getLang() . "/");
            // $menu->add('ABOUT US', getLang() . "/");
            // $menu->add('MANUFACTURING', getLang() . "/");
            // $menu->add('INVESTORS', getLang() . "/");
            // $menu->add('NEWS', getLang() . "/");
            // $menu->add('CAREERS', getLang() . "/");
            // $menu->add('CONTACT', getLang() . "/");




        return $next($request);
    }
}
