<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManager;

class Company extends Model
{
    use HasFactory;

    public function Employees()
    {
        return $this->hasMany(Employees::class);
    }

    protected $table = 'companies';
    
    public $timestamps = true;

    protected $casts = [
        'id' => 'string'
    ];

    protected $fillable = [
        'name',
        'email',
        'logo',
        'website'
    ];
}
