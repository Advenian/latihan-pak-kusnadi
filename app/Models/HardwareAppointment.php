<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HardwareAppointment extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function fixer()
    {
        return $this->belongsTo(Fixer::class);
    }

    protected $fillable = [
        'client_id',
        'fixer_id',
        'issue_description',
        'os',
        'brand',
        'image',
        'date_time'

    ];
}
