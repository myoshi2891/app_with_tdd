<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Project;
use App\Models\Activity;
use Facades\Tests\Setup\ProjectFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ActivityTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_has_a_user()
    {
        $user = $this->signIn();

        $project = ProjectFactory::ownedBy($user)->create();

        $this->assertEquals($user->id, $project->activity->first()->user->id);
    }
}