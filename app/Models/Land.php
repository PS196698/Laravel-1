<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;
    
    protected $table = 'landen';
    public $timestamps = false;

    protected $fillable = [
        'Naam',
        'Landcode',
        'MuntEenheid',
        'Regeringsvorm',
        'inwonersaantal',
        'staatshoofd',
        'oppervlakte',
        'budget'
    ];
}