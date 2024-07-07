<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Order;

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
        View::composer(['frontend.home', 'frontend.donate', 'frontend.about'], function ($view) {
            $allDonatedAmount = Order::where('status', 'Pending')->sum('amount');
            $donationNumber = Order::where('status', 'Pending')->count('id');
            $view->with('allDonatedAmount', $allDonatedAmount)
                ->with('donationNumber', $donationNumber);
        });
    }
}
