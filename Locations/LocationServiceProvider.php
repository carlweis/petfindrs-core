<?php
namespace App\PetFinders\Locations;

use App\PetFinders\Locations\Countries\CountryEloquentRepository;
use App\PetFinders\Locations\Countries\CountryRepository;
use Illuminate\Support\ServiceProvider;

class LocationServiceProvider extends ServiceProvider
{
    /**
     * Register the location service provider.
     *
     * @return void
     */
    public function register()
    {
        // bind countries repository
        $this->app->bind(CountryRepository::class, CountryEloquentRepository::class);
    }
}