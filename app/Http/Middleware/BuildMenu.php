<?php

namespace App\Http\Middleware;

use Closure;
use Menu;

class BuildMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Menu::make('menuIcon', function ($menu) {
            $menu
                ->add('<span class="fas fa-bars"></span>', ['class' => 'navbar-mobile-menu'])
                ->link->attr(['id' => 'navbar-mobile-menu']);
        });
        Menu::make('menuMain', function ($menu) {
            $menu->add('Главная', ['url' => '#main']);
            $menu->add('Цены', ['url' => '#prices']);
            $menu->add('Отзывы', ['url' => '#reviews']);
            $menu->add('Контакты', ['url' => '#contacts']);
            //$menu->add('Франшиза', ['url' => '#franch']);
        });
        return $next($request);
    }
}
