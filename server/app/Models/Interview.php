<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'del_flag', 'status', 'evaluation', 'candidate_id', 'position_id', 'date', 'note', 'created_by', 'modified_by', 'created_at', 'updated_at'];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id', 'id');
    }

    public function position()
    {
        return $this->belongsTo(Configuration::class, 'position_id', 'id');
    }

    public function interviewers()
    {
        return $this->hasMany(interviewer::class, 'interview_id', 'id');
    }

    public function member_interviewers()
    {
        // Dùng khi bảng trung gian chứa khoá ngoai của cả bảng gốc và bảng đích (2 khoá ngoại)
        return $this->belongsToMany(Member::class, Interviewer::class, 'interview_id', 'member_id');
    }

    public function comment_interviewers()
    {
        // Dùng khi bảng trung gian chứa khoá ngoại của bảng gốc và bảng đích chứa khoá ngoại của bảng trung gian
        return $this->hasManyThrough(InterviewerComment::class, Interviewer::class, 'interview_id', 'interviewer_id', 'id', 'id');
    }
}
