<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'isbn',
        'name',
        'year',
        'page',
        'publisher_id',
    ];

    /**
     * book's publisher
     *
     * @return void
     */
    public function publisher()
    {
        return $this->belongsTo(Publisher::class)
            ->withDefault([
                'identifier' => 'WITHOUT ID',
                'fname' => 'NOT FOUND',
                'lname' => 'NOT FOUND',
            ]);
    }

    /**
     * book's authors
     *
     * @return void
     */
    public function authors()
    {
        return $this->belongsToMany(Author::class, 'book_authors')
            ->using(BookAuthor::class);
    }
}
