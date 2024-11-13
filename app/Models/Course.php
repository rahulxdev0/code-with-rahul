<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'category_id', 'description', 'level', 'price', 'duration', 'start_date', 'end_date', 'thumbnail', 'course_slug'
    ];

    public function category(){
        return $this->hasOne(Category::class, "id","category_id");
    } 
}
