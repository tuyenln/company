<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class TeamMemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('team_members')->insert([
            array('del_flag' => false, 'member_id' => 1, 'team_id' => 1, 'team_member_role' => 69, 'created_by' => 1, 'modified_by' => null, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
        ]);
    }
}
