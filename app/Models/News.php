<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Collection;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    public function getNews(int $limit = 4): Collection
    {
        return \DB::table($this->table)->get();
    }

    public function getNewsById(int $id): object
    {
        return \DB::table($this->table)->find($id);
    }
}