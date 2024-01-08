<?php

namespace App\Models;

use App\Models\MyClass;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function my_class()
    {
        return $this->belongsTo(MyClass::class);
    }
}
