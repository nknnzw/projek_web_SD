<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Helpers\ViewHelper;
use Illuminate\Support\Facades\Log;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
            if (class_exists(\App\Helpers\ViewHelper::class)) {
                Log::info('ViewHelper class EXISTS!');
            } else {
                Log::error('ViewHelper class DOES NOT exist!');
            }

            Blade::directive('getNamaBulan', function ($nomorBulan) {
                return "<?php echo App\\Helpers\\ViewHelper::getMonthName({$nomorBulan}); ?>";
            });
    }
}
