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

    public function setOne() {
        return "test";
    }
}
