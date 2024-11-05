<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;

class Content extends Model
{
    use HasFactory;
    protected $fillable=['user_id', 'title', 'concept', 'status'];
}
