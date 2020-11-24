<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    public function Company()
    {
        return $this->belongsTo(Company::class,'company_id');
    }

    protected $table = 'employees';
    
    public $timestamps = true;

    protected $casts = [
        'company_id' => 'string'
    ];

    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'company_id'
    ];
}
