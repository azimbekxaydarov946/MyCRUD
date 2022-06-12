<?php

namespace Tests\Feature;

use App\Models\User\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Str;
use Laravel\Passport\Passport;

class Base extends TestCase
{
    use RefreshDatabase;

    protected $singleStructure;
    protected $indexStructure;
    protected $modelName;
    protected $modelClass;
    protected $paramName;
    protected $user;
    protected $rawData;

    protected function createModels($count = 1)
    {


        $models = $this->modelClass::factory($count)->create();

        return $models;
    }

}
