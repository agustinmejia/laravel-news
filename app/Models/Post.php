<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
Use  \TCG\Voyager\Traits\Translatable;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    Use Translatable;
    protected $dates = ['deleted_at'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
