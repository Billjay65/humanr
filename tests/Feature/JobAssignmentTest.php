<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Job;

class JobAssignmentTest extends TestCase
{
    /**
     * A job assignment test case. Create a job object
     * and assert it is created and displayed on the screen
     *
     * @return void
     */
    public function test_job_page_shows_all_assignments()
    {
        $newJob = Job::create([
            'description' => 'My new job',
             'start_date' => '2023-11-05',
        ]); 
        
        $this->get('/job/create/job')->assertSee('My new job');
    }
}
