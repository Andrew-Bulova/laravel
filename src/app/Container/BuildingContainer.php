<?php


namespace App\Container;


use App\Building;

class BuildingContainer extends PropertyContainer
{
    public function __construct()
    {
        foreach ((new Building())->getAttr() as $attribute) {
            $this->addProperty($attribute);
        }
        $this->addProperty('id');
    }
}
