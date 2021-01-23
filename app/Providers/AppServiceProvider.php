<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Form Page
        Blade::include('includes.forms.register', 'register');
        Blade::include('includes.forms.login', 'login');
        Blade::include('includes.forms.edit', 'edit');
        // Template
        Blade::include('includes.leftheader', 'leftheader');
        Blade::include('includes.pages.resume', 'resume');
    }
}
