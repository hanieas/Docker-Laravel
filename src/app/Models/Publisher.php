<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
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
     * publisher's books
     *
     * @return void
     */
    public function books(){
        return $this->hasMany(Book::class,'publisher_id');
    }
}
