<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'summary',
        'type',
        'demo_url',
        'repo_url',
        'embed_url',
        'tech_stack',
        'content',
        'is_published',
        'sort_order',
    ];
}
