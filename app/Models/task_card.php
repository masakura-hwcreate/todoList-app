<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task_card extends Model
{

    protected $fillable = [
        'task_list_id',
        'title',
    ];

    public function list()
    {
        return $this->belongsTo(task_list::class, 'task_list_id');
    }
}
