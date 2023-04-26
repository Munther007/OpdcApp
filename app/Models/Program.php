<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'desc' , 'image' , 'file' , 'user_id' ,
//        'category_id'
    ];

    public function category() {
        $this->belongsTo(Category::class);
    }

    public function user() {
        $this->belongsTo(User::class);
    }
}
