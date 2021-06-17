<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class InterviewerCommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('interviewer_comments')->insert([
            array('del_flag' => false, 'interviewer_id' => 1, 'comment' => 'Kiến thức nền tảng tốt', 'rating' => 4, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' => false, 'interviewer_id' => 1, 'comment' => 'IQ cũng tạm chấp nhận', 'rating' => 3, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' => false, 'interviewer_id' => 1, 'comment' => 'Có kiến thức về AWS', 'rating' => 5, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' => false, 'interviewer_id' => 2, 'comment' => 'Đi phỏng vấn trễ', 'rating' => 2, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' => false, 'interviewer_id' => 2, 'comment' => 'Tư duy về giải quyết vấn đề tốt', 'rating' => 5, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' => false, 'interviewer_id' => 2, 'comment' => 'Phần trình bày thuyết phục', 'rating' => 4, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' => false, 'interviewer_id' => 3, 'comment' => 'Không nắm chắc về MySQL', 'rating' => 1, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag' => false, 'interviewer_id' => 3, 'comment' => 'Tốt nghiệp vào cuối năm', 'rating' => 5, 'created_at' => Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')),
        ]);
    }
}
