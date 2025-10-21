<?php

namespace App\Providers;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (env('APP_ENV') === 'local') {
            DB::listen(function (QueryExecuted $sql): void {
                file_put_contents('php://stdout', "\e[34m{$sql->sql}\t\e[37m".json_encode($sql->bindings)."\t\e[32m{$sql->time}ms\e[0m\n");
            });
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useTailwind();
    }
}
