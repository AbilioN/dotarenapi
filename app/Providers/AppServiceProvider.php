<?php

namespace App\Providers;

use App\Http\Interfaces\PlayerInterface;
use App\Http\Interfaces\ResponseInterface;
use App\Http\Responses\HttpResponse;
use App\Http\Services\PlayerService;
use App\Models\Player;
use App\Repositories\PlayerRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PlayerInterface::class, function(){

            return new PlayerRepository(new Player(), new PlayerService());
        });

        $this->app->bind(ResponseInterface::class, function(){
            return new HttpResponse();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
