<?php

namespace De_ik_app_storing;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question', 'boolanswer', 'comment',
    ];
}
