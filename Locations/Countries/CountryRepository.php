<?php
namespace App\PetFindrs\Locations\Countries;

interface CountryRepository
{
    /**
     * Return all countries.
     *
     * @return mixed
     */
    public function all();

    /**
     * Return all active countries.
     *
     * @return mixed
     */
    public function active();

    /**
     * Returns a country by id.
     *
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * Return country by country code.
     *
     * @param $code
     * @return mixed
     */
    public function findByCode($code);

    /**
     * Return country by name.
     *
     * @param $name
     * @return mixed
     */
    public function findByName($name);

    /**
     * Return country by location.
     *
     * @param $latitude
     * @param $longitude
     * @return mixed
     */
    public function findByLocation($latitude, $longitude);
}