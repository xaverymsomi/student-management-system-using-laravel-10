<?php

namespace App\Models;

use App\Models\PaymentRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Receipt extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pr()
    {
        return $this->belongsTo(PaymentRecord::class, 'pr_id');
    }
}
