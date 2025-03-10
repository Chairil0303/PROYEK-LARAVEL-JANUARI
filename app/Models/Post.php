<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{

    // eager loading
    protected $with = ['author','category'];

    use HasFactory;
    protected $fillable = ['title','author_id','category_id','slug','body'];

    public function author(): BelongsTo 
    {
        return $this->belongsTo(User::class,'author_id');
    }
    public function category(): BelongsTo 
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
