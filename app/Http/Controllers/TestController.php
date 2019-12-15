<?php

namespace App\Http\Controllers;

use App\Services\TestBasicService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $testBasicService;

    public function __construct(TestBasicService $service)
    {
        $this->testBasicService = $service;
    }

    public function getOne()
    {
        return $this->testBasicService->getTestOnePropertiesTypes();
    }

    public function setOne(Request $request)
    {
        return $this->testBasicService->setTestOnePropertiesValues($request->name, $request->age, $request->boolProperty);
    }
}
