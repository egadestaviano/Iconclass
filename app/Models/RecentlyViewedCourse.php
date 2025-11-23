<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecentlyViewedCourse extends Model
{
    protected $table = 'recently_viewed_courses';
    
    protected $fillable = [
        'user_id',
        'course_id',
        'viewed_at'
    ];
    
    protected $casts = [
        'viewed_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}