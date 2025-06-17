<?php

use function Pest\it;
use function Pest\expect;
use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
        ]);

        // act and assert
        expect($job->employer->is($employer))->toBeTrue();
});
