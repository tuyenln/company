<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'del_flag', 'username', 'password', 'fullname', 'is_male', 'birthday', 'email', 'phone', 'picture', 'access_level', 'created_by', 'modified_by', 'created_at', 'updated_at'];

    protected $hidden = ['password']; //Hidden password when retrive

    public function teams()
    {
        // Một member thuộc nhiều team, Một team có nhiều members
        //Quan hệ nhiều nhiều các tham số:
        // Tham số thử nhất Member muốn lấy team trong bảng Team
        // Tham số thứ 2 là bảng trung gian team_members
        // Tham số thử 3 là khoá ngoại của member 'member_id' trong bảng trung gian
        // Tham số thứ 4 là khoá ngoại của team 'team_id' trong bảng trung gian (đích đên bảng team)
        // withPivot lấy data trong bảng trung gian
        return $this->belongsToMany(Team::class, TeamMember::class, 'member_id', 'team_id');
    }

    public function teamMembers()
    {
        //Quan hệ 1 nhiều giữa bảng members và team_members:
        // Một member có nhiều team_member, một team_member có 1 member
        // Tham số thứ nhất: bảng team_member
        // Tham số thứ 2: Khoá ngoại trong bảng team_member là 'member_id'
        // Tham số thứ 3: Khoá chính trong bảng member là 'id'
        // return $this->hasMany('App\Models\TeamMember', 'member_id', 'id');
        return $this->hasMany(TeamMember::class, 'member_id', 'id');
    }

    public function accessLevel()
    {
        // Tham số thứ nhất: Là bảng configurations
        // Tham số thứ 2 :Member trỏ đến bảng configuration qua khoá ngoaị 'access_level' trong bảng members
        // Tham số thứ 3:  là 'id' trong bảng configurations
        return $this->belongsTo(Configuration::class, 'access_level', 'id');
    }

    public function leaderTeam()
    {
        // Member là leader của team nào quan hệ một nhiều;
        // Tham số thứ nhất: Trỏ đến bảng Team
        // Tham số thứ hai: Trỏ đến khoá ngoại 'leader'  trọng bảng team
        // Tham số thứ 3: Khoá chính trong bảng member là 'id'
        return $this->hasMany(Team::class, 'leader', 'id');
    }

    public function interviews()
    {
        //Quan hệ nhiều nhiều các tham số:
        // Tham số thử nhất Member muốn lấy team trong bảng interviews (bảng đích)
        // Tham số thử 2: bảng trung gian interviewers
        // Tham số thử 3 là khoá ngoại của member 'member_id' trong bảng trung gian
        // Tham số thứ 4 là khoá ngoại của interview 'interview_id' trong bảng trung gian (đích đên bảng interviews)
        return $this->belongsToMany(Interview::class, Interviewer::class, 'member_id', 'interview_id');
    }

    public function interviewers()
    {
        //Quan hệ một nhiều các tham số:
        // member trỏ đến bảng interviewers
        // Tham số thử nhất Member muốn lấy team trong bảng interviews (bảng đích)
        // Tham số thử 2: Khoá ngoại 'member_id' của member trong bảng interviewers
        // Tham số thứ 3: Khoá chính trong bảng member là 'id'
        return $this->hasMany(Interviewer::class,  'member_id', 'id');
    }

    public function interviewerComment()
    {
        //Quan hệ một nhiều các tham số:
        // member trỏ đến bảng interviewer_comment
        // Tham số thử nhất : interviewer_comments (bảng đích)
        // Tham số thử 2: bảng trung gian interviewers
        // Tham số thứ 3: Khoá ngoại của member trong bảng trung gian interviewer là 'member_id'
        // Tham số thứ 4: Khoá ngoai của interviewers trong bảng interviewer_comments là 'interviewer_id'
        // Tham số thứ 5: Là khoá chính của bảng interviewer_comments là 'id'
        // Tham số thứ 6: Là khoá chính của bảng interviewer là 'id'
        return $this->hasManyThrough(InterviewerComment::class,  Interviewer::class, 'member_id', 'interviewer_id', 'id', 'id');
    }
}
