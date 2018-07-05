<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class PatientTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    /** @test */
    public function canBrowsePatientsTest()
    {
        $patient = factory('App\Patient')->create();

        $response = $this->get(route('patient.index'));

        $response->assertSee($patient->name);
        $response->assertSee($patient->owner->name);
    }
}
