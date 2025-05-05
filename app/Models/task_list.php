<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task_list extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'category',
    ];

    public function task_cards()
    {
        return $this->hasMany(task_card::class);
    }
}
