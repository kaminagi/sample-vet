<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class OwnerTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    /** @test */
    public function canBrowseOwnersTest()
    {
        $owner = factory('App\Owner')->create();

        $response = $this->get('/owner');

        $response->assertSee($owner->name);
    }
}
