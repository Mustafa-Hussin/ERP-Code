<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class FrontendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Share frontend assets with all views
        View::composer('*', function ($view) {
            $view->with('frontendAssets', [
                'styles' => [
                    'toastr' => asset('node_modules/toastr/build/toastr.min.css'),
                    'sweetalert2' => asset('node_modules/sweetalert2/dist/sweetalert2.min.css'),
                    'fullcalendar' => asset('node_modules/@fullcalendar/core/main.css'),
                    'dropzone' => asset('node_modules/dropzone/dist/min/dropzone.min.css'),
                    'summernote' => asset('node_modules/summernote/dist/summernote-bs4.min.css'),
                ],
                'scripts' => [
                    'toastr' => asset('node_modules/toastr/build/toastr.min.js'),
                    'sweetalert2' => asset('node_modules/sweetalert2/dist/sweetalert2.all.min.js'),
                    'fullcalendar' => [
                        asset('node_modules/@fullcalendar/core/main.js'),
                        asset('node_modules/@fullcalendar/daygrid/main.js'),
                    ],
                    'dropzone' => asset('node_modules/dropzone/dist/min/dropzone.min.js'),
                    'summernote' => asset('node_modules/summernote/dist/summernote-bs4.min.js'),
                ],
            ]);
        });
    }
}
