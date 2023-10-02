<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareAppointment extends Model
{
    use HasFactory;

    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function fixer(){
        return $this->belongsTo(Fixer::class);
    }

    protected $fillable = [
        'client_id',
        'fixer_id',
        'issue_description',
        'os',
        'tasks',
        'image',
        'date_time'
        
    ];

    protected $casts=[
        'tasks' => 'array',

    ];

}
