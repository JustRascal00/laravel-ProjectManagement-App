<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_path',
        'status',
        'priority',
        'due_date',
        'assigned_user_id',
        'created_by',
        'updated_by',
        'project_id',
        'assigned_user_id',
        'created_by',
        'updated_by',
        'project_id',
    ];
    public function project () {
        return $this->belongsTo(Project::class);
    }
    public function assignedUser () {
        return $this->belongsTo(Project::class, 'assigned_user_id');
    }
    public function createdBy () {
        return $this->belongsTo(Project::class, 'created_by');
    }
    public function UpdatedBy () {
        return $this->belongsTo(Project::class, 'updated_by');
    }
}
