<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Carbon\Carbon;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('datetoday', function() {;
            $toDay = Carbon::now();
            $toDay = $toDay->format('Y-m-d');
            return "<?php echo strtoupper($toDay) ; ?>";
        });
        //
    }
}
