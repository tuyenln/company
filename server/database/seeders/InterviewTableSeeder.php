<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InterviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('interviews')->insert([
            array('del_flag' => false, 'status' => true, 'evaluation' => 0, 'candidate_id' => 1, 'position_id' => 81, 'date' => '2019-06-21 10:00:00', 'note' => 'Notes during the interview process', 'created_by' => 1, 'modified_by' => null, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' => false, 'status' => true, 'evaluation' => 0, 'candidate_id' => 2, 'position_id' => 78, 'date' => '2019-06-22 15:00:00', 'note' => 'Notes during the interview process', 'created_by' => 1, 'modified_by' => null, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' => false, 'status' => true, 'evaluation' => 0, 'candidate_id' => 3, 'position_id' => 79, 'date' => '2019-06-23 08:00:00', 'note' => 'Notes during the interview process', 'created_by' => 1, 'modified_by' => null, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' => false, 'status' => true, 'evaluation' => 0, 'candidate_id' => 4, 'position_id' => 80, 'date' => '2019-06-24 13:00:00', 'note' => 'Notes during the interview process', 'created_by' => 1, 'modified_by' => null, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' => false, 'status' => true, 'evaluation' => 0, 'candidate_id' => 5, 'position_id' => 94, 'date' => '2019-06-25 14:00:00', 'note' => 'Notes during the interview process', 'created_by' => 1, 'modified_by' => null, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
        ]);
    }
}
