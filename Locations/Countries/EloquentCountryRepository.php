<?php
namespace App\PetFindrs\Locations\Countries;

class EloquentCountryRepository implements CountryRepository
{
    /**
     * Return all countries.
     *
     * @return mixed
     */
    public function all()
    {
        return Country::all();
    }

    /**
     * Return all active countries.
     *
     * @return mixed
     */
    public function active()
    {
        return Country::where('active', 1)->get();
    }


    /**
     * Returns a country by id.
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return Country::where('id', '=', $id)->get();
    }

    /**
     * Return country by country code.
     *
     * @param $code
     * @return mixed
     */
    public function findByCode($code)
    {
        return Country::where('code', $code)->limit(1)->get();
    }

    /**
     * Return country by name.
     *
     * @param $name
     * @return mixed
     */
    public function findByName($name)
    {
        return Country::where('name', $name)->limit(1)->get();
    }

    /**
     * Return country by location.
     *
     * @param $latitude
     * @param $longitude
     * @return mixed
     */
    public function findByLocation($latitude, $longitude)
    {
        return Country::where([
            'latitude' => $latitude,
            'longitude' => $longitude
        ])->limit(1)->get();
    }

}