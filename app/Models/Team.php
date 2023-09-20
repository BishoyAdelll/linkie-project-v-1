<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'image',
        'bio',
        'portfolio',
        'years_ex',
        'date_of_birth',
        'category_id',
    ];
    public function Categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
