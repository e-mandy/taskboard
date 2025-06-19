<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',

        'board_id'
    ];

    public function board(){
        return $this->hasOne(Board::class);
    }
}
