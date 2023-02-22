<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StyleDetails extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function gauge()
    {
        return $this->belongsTo(Gauge::class);
    }
}
