<?php

namespace App\Models;

use App\ProjectsStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $casts = [
        'tech_stack' => 'array',
        'status' => ProjectsStatus::class,
        'ends_at' => 'datetime'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }
}
