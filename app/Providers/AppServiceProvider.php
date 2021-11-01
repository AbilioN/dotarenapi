<?php

namespace App\Providers;

use App\Http\Interfaces\HeroesInterface;
use App\Http\Interfaces\MatchInterface;
use App\Http\Interfaces\PlayerInterface;
use App\Http\Interfaces\ResponseInterface;
use App\Http\Responses\HttpResponse;
use App\Http\Services\HeroService;
use App\Http\Services\MatchService;
use App\Http\Services\PlayerService;
use App\Models\Player;
use App\Repositories\HeroeRepository;
use App\Repositories\MatchRepository;
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

            if($logica = true)
            {
                // 
                return new PlayerRepository(new Player(), new PlayerService());

            }else{
                return new PlayerService();
            }
        });

        

        $this->app->bind(HeroesInterface::class, function(){
            return new HeroeRepository(new HeroService());
        }); 
        
        $this->app->bind(ResponseInterface::class, function(){
            return new HttpResponse();
        });

        $this->app->bind(MatchInterface::class , function(){
            return new MatchRepository(new MatchService());
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
