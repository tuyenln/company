<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'del_flag', 'name', 'leader', 'description', 'created_by', 'modified_by', 'created_at', 'updated_at'];

    // protected $hidden = ['pivot'];

    public function members()
    {
        // Team trỏ về bảng member lấy thông tin của của tất cả member trong team thông qua bảng trung gian TeamMember
        return $this->belongsToMany(Member::class, TeamMember::class, 'team_id', 'member_id');
    }

    public function teamMembers()
    {
        // Lấy tất cả thông tin trong bảng TeamMember
        return $this->hasMany(TeamMember::class, 'team_id', 'id');
    }

    public function memberLeader()
    {
        // Lấy thông tin trong bảng member
        // leader là khoá ngoại của cuả member trong bảng Teams
        return $this->belongsTo(Member::class, 'leader', 'id');
    }
}
