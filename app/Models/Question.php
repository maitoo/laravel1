<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_id';
    public $incrementing = false;
    protected $keyType = 'varchar';
    protected $fillable = [
        'user_id',
        'contents_of_question',
        'answer',
    ];
}
