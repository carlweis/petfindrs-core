<?php
namespace App\PetFindrs\Locations\Countries;

use League\Fractal\TransformerAbstract;

class CountryTransformer extends TransformerAbstract
{
    protected $availableEmbeds = [
        'states'
    ];

    public function transform(Country $country)
    {
        return [
            'id'         => (int)$country->id,
            'code'       => $country->code,
            'latitude'   => $country->latitude,
            'longitude'  => $country->longitude,
            'name'       => $country->name,
            'slug'       => $country->slug,
            'active'     => (boolean)$country->active,
            'created_at' => (string)$country->created_at->toIso8601String(),
            'updated_at' => (string)$country->updated_at->toIso8601String(),
        ];
    }

    public function embedStates(Country $country)
    {
        $states = $country->states;
        return $this->collection($states, new StateTransformer);
    }
}