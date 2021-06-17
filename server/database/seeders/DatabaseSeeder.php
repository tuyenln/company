<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ConfigurationTableSeeder::class);
        $this->call(MemberTableSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(TeamMemberTableSeeder::class);
        $this->call(CandidateTableSeeder::class);
        $this->call(CandidateSkillTableSeeder::class);
        $this->call(CandidateContactTableSeeder::class);
        $this->call(InterviewTableSeeder::class);
        $this->call(InterviewerTableSeeder::class);
        $this->call(InterviewerCommentTableSeeder::class);
    }
}
