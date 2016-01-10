<?php
namespace App\PetFindrs\Locations;

use App\PetFindrs\Locations\Countries\EloquentCountryRepository;
use App\PetFindrs\Locations\Countries\CountryRepository;
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
        $this->app->bind(CountryRepository::class, EloquentCountryRepository::class);
    }
}