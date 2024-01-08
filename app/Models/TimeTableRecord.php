<?php

namespace App\Models;

use App\Models\Exam;
use App\Models\MyClass;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TimeTableRecord extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function my_class()
    {
        return $this->belongsTo(MyClass::class);
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
