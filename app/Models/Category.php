<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Collection;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function getCategories(): Collection
    {
        return \DB::table($this->table)->get();
    }

    public function getCategoryById(int $id): object
    {
        return \DB::table($this->table)->find($id);
    }
}
