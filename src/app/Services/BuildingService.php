<?php


namespace App\Services;

use App\Attribute;
use App\Building;
use App\BuildingAttribute;
use App\Container\BuildingContainer;
use App\Entity;

class BuildingService
{
    private $container;

    public function __construct()
    {
        $this->container = new BuildingContainer();
    }

    public function getBuilding($id)
    {
        $building = $this->buildingShort($id);
        $this->container->setProperty('id', $id);
        foreach ($building->getFillable() as $attribute) {
            $this->container->setProperty($attribute, $building->$attribute);
        }
        foreach ($building->details() as $attribute) {
            $detail = $building->attributes->where('attribute', $attribute)->first();
            $this->container->setProperty($attribute, $detail->value);
        }
        return $this->container;

    }

    public function buildingUpdate($request, $id)
    {
        $building = $this->buildingShort($id);

        foreach ($building->getFillable() as $attribute) {
            $building->$attribute = $request->get($attribute);
        }
        $building->save();
        foreach ($building->details() as $attribute) {
            $details = BuildingAttribute::where('building_id', $id)->where('attribute', $attribute)->first();
            $details->value = $request->get($attribute);
            $details->save();
        }
    }

    public function buildingShort($id)
    {
        return Building::findOrFail($id);
    }
}
