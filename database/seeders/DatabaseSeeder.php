<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();

        User::query()->inRandomOrder()->limit(10)->get()
            ->each(function (User $user) {
                $project = Project::factory()->create(['created_by' => $user->id]);

                Proposal::factory(random_int(4, 20))->create(['project_id' => $project]);
            });
    }
}
