<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase; // ✅ das hier ist wichtig

class JobTest extends TestCase
{
    use RefreshDatabase;
    public function test_belongs_to_employer(): void
    {

        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        $this->assertTrue($job->employer->is($employer));
    }
}
