<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestOne
{
    private $name;
    private $age;
    private $boolProperty;

    public function getPropertiesTypes() {
        return [
            'name' => 'string',
            'age' => 'int',
            'boolProperty' => 'boolean'
        ];
    }

    public function getPropertiesValues() {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'boolProperty' => $this->boolProperty
        ];
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setBoolProperty($boolProperty) {
        $this->boolProperty = $boolProperty;
    }
};

class TestController extends Controller
{
    public function getOne() {
        $testOne = new TestOne();
        return $testOne->getPropertiesTypes();
    }

    public function setOne(Request $request) {
        $testOne = new TestOne();
        $testOne->setName($request->name);
        $testOne->setAge($request->age);
        $testOne->setBoolProperty($request->boolProperty);
        return $testOne->getPropertiesValues();
    }
}
