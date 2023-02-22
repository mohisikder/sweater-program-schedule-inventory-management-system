<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'buyerName',
    //     'buyerEmail',
    //     'buyerContact',
    //     'countryName',
    //     'cityName',
    //     'address',
    // ];
    protected $guarded = [];
    public function styles()
    {
        return $this->hasMany(Style::class);
    }
}
