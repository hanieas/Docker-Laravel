<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BookAuthor extends Pivot
{
    use HasFactory;

    protected $table = 'book_authors';
}
