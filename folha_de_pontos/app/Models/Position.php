<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
	protected $fillable = [
		'name',
		'sectors_id'
	];

    use HasFactory;

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'sectors_id');
    }
}
