<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Collection;

/**
 * @method static create(array $only)
 */
class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = ['title', 'description', 'category_id'];
}
