<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamLog extends Model
{
    protected $table = 'exam_log';
    
    public $timestamps = false;
    protected $dateFormat = 'Y-m-d H:i:s';
}
