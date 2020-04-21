<?php


namespace App\Container;


class PropertyContainer
{
    public $properties = [];

    public function addProperty($propertyName)
    {
        $this->properties[$propertyName] = null;
    }

    public function deleteProperty($propertyName)
    {
        unset($this->properties[$propertyName]);
    }

    public function getProperty($propertyName)
    {
        return $this->properties[$propertyName] ?? null;
    }

    public function setProperty($propertyName, $value)
    {
//        if (!isset($this->properties[$propertyName])) {
//            throw  new \Exception("Attribute $propertyName not found");
//        }
        $this->properties[$propertyName] = $value;
    }
}
