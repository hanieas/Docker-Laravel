<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Author extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'identifier',
        'fname',
        'lname',
    ];
    
    /**
     * authors's books
     *
     * @return void
     */
    public function books(){
        return $this->belongsToMany(Book::class,'book_authors')->using(BookAuthor::class);
    }
}
