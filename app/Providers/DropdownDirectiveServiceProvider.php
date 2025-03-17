<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class CustomDirectiveServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Dropdown Directive
        Blade::directive('dropdown', function ($expression) {
            return '<div class="dropdown">' . PHP_EOL;
        });

        Blade::directive('endDropdown', function () {
            return '</div>' . PHP_EOL;
        });

        // Dropdown Item Directive
        Blade::directive('dropdownItem', function ($expression) {
            return "<div class='dropdown-item'><?php echo $expression; ?></div>" . PHP_EOL;
        });
    }

    public function register()
    {
        //
    }
}
