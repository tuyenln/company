<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'del_flag', 'name', 'is_male', 'birthday', 'cv', 'is_passed', 'university_id', 'created_by', 'modified_by', 'created_at', 'updated_at'];

    public function skills()
    {
        // Một ứng viên có nhiều kỹ năng
        // Bảng đích là Configuration
        // Bảng trung gian là CandidateSkill
        // Hai khoá ngoại 'candidate_id', 'skill_id'
        return $this->belongsToMany(Configuration::class, CandidateSkill::class, 'candidate_id', 'skill_id');
    }

    public function contacts()
    {
        // Khoá ngoại nằm trong bảng trung gian
        return $this->belongsToMany(Configuration::class, CandidateContact::class, 'candidate_id', 'contact_id');
    }

    public function candidateSkills()
    {
        // Khoá ngoại nằm trong bảng Đích
        return $this->hasMany(CandidateSkill::class, 'candidate_id', 'id');
    }

    public function candidateContacts()
    {
        // Khoá ngoại nằm trong bảng Đích
        return $this->hasMany(CandidateContact::class, 'candidate_id', 'id');
    }

    public function candidateUniversity()
    {
        // Khoá ngoại nằm trong chính nó (Candidate)
        return $this->belongsTo(Configuration::class, 'university_id', 'id');
    }

    public function interviews()
    {
        // Khoá ngoại nằm trong bảng Đích
        return $this->hasMany(Interview::class, 'candidate_id', 'id');
    }

    public function interviewers()
    {
        // Bảng đích là Interviewer
        // Bảng trung gian là Interview
        // Trong interview chứa id cuả Candidate 'candidate_id' Candidate link sang Interview qua khoá ngoại 'candidate_id'
        // Trong Interviewer chứa id của interview 'interview_id' Bảng trung gian interview link sang interviewers khoá ngoại 'interview_id'
        return $this->hasManyThrough(Interviewer::class, Interview::class, 'candidate_id', 'interview_id', 'id', 'id');
    }
}
