<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    public function fixer()
    {
        return $this->belongsTo(Fixer::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
    ];
}
