<?php


namespace App\Services;

class TestOne
{
    private $name;
    private $age;
    private $boolProperty;

    public function getPropertiesTypes()
    {
        return [
            'name' => 'string',
            'age' => 'int',
            'boolProperty' => 'boolean'
        ];
    }

    public function getPropertiesValues()
    {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'boolProperty' => $this->boolProperty
        ];
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setBoolProperty($boolProperty)
    {
        $this->boolProperty = $boolProperty;
    }
}

class TestBasicService
{
    private $testOne;

    public function __construct()
    {
        $this->testOne = new TestOne();
    }

    public function getTestOnePropertiesTypes()
    {
        return $this->testOne->getPropertiesTypes();
    }

    public function setTestOnePropertiesValues($name, $age, $boolProperty)
    {
        $this->testOne->setName($name);
        $this->testOne->setAge($age);
        $this->testOne->setBoolProperty($boolProperty);

        return $this->testOne->getPropertiesValues();
    }
}
