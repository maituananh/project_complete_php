<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
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
        try {
            $ListProducts = DB::table('products')
            ->limit(4)
            ->get();
            View::share('ListProducts', $ListProducts);

            $Listsingle = DB::table('products')
            ->select('products.image', 'products.id_products')
            ->limit(4)
            ->get();
            View::share('Listsingle', $Listsingle);

            $productcarrier = DB::table('productcarrier')
            ->get();
            View::share('productcarrier', $productcarrier);
        }catch(\Exception $e) {
            
        }
    }
}
