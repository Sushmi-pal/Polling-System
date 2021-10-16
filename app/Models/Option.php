<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $fillable=['question_id', 'name', 'option_num'];

    public function question(){
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }
}
